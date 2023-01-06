// Récupération des éléments de la fenêtre modale
var modal = document.getElementById("modal");
var close = document.getElementsByClassName("close")[0];
var minimize = document.getElementsByClassName("minimize")[0];

// Fonction d'affichage de la fenêtre modale
function showModal() {
    modal.style.display = "block";
}

// Fonction de masquage de la fenêtre modale
function hideModal() {
    modal.style.display = "none";
}

// Fonction de réduction de la fenêtre modale
function minimizeModal() {
    modal.style.height = "25px";
    modal.style.padding = "0";
}

// Fonction de restauration de la fenêtre modale
function restoreModal() {
    modal.style.height = "75%";
    modal.style.padding = "20px";
}

// Gestion de l'événement de fermeture de la fenêtre modale
close.addEventListener("click", hideModal);

// Gestion de l'événement de réduction de la fenêtre modale
minimize.addEventListener("click", minimizeModal);

// Gestion de l'événement de restauration de la fenêtre modale
modal.addEventListener("dblclick", restoreModal);

// Gestion de l'événement de masquage de la fenêtre modale en cliquant en dehors de celle-ci
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        hideModal();
    }
});
