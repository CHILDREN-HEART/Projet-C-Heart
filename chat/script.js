window.onload = () => {

    let texte = document.getElementById("message");
    texte.addEventListener("keyup", verifEntree);


    let send = document.getElementById("send");
    send.addEventListener("click", ajoutMessage);

    setInterval(() => showMessagesInbox(), 1000);
};

function verifEntree(e) {
    if (e.key === "Enter") {
        ajoutMessage();
    }
}

function ajoutMessage() {
    let message = document.getElementById("message").value;
    let profID = document.getElementById("prof_id").value;
    let studentID = document.querySelector("select > option:checked")?.value ?? document.getElementById("student_id").value;
    let sentByStudent = document.getElementById("sent_by_student").value;

    if (message !== "") {
        let donnees = {};
        donnees["message"] = message;
        donnees["prof_id"] = profID;
        donnees["student_id"] = studentID;
        donnees["sent_by_student"] = sentByStudent;

        fetch("./ajoutMessage.php", {
            method: "POST", body: JSON.stringify(donnees)
        }).then(response => {
            document.getElementById("message").value = "";
            return response.text();
        }).then(data => {
            console.log(data);
        }).catch(error => {
            alert(error.message);
        });

    }
}

function showMessagesInbox() {

    console.log("showMessagesInbox");
    let prof_id = document.getElementById("prof_id").value;
    let student_id = document.querySelector("select > option:checked")?.value ?? document.getElementById("student_id").value;

    console.log({ prof_id, student_id });

    let messages = [];

    fetch("./getMessages.php", {
        method: "POST", body: JSON.stringify({ prof_id, student_id })
    }).then(response => {
        return response.json();
    }).then(data => {
        messages = data;
        console.log({ data });
        let html = "";
        messages.forEach(message => {
            html += `
                <div class="message ${!message.sent_by_student ? "prof" : "student"}">
                    <p>${!message.sent_by_student ? "[PROF] : " : ""}${message.message}</p>
                </div>
            `;
        });
        document.getElementById("messages_container").innerHTML = html;
    });

}