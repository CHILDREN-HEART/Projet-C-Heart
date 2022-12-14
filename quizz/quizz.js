const quizData = [
    {
        question:"La fréquence cardiaque d'un enfant augmente avec l'age.",
        a: "vrai",
        b: "faux",
        correct:"b",
    },
    {
        question:"S'assoir permet-il d'augmenter la fiabilité du capteur de fréquence cardiaque?",
        a: "vrai",
        b: "faux",
        correct:"a",
    },
    {
        question:"Les établissements accueillants des enfants de moins de 6 ans ont pour obligation de surveiller la qualité de l'air dans leurs salles.",
        a: "vrai",
        b: "faux",
        correct:"a",
    },
    {
        question:"Les valeurs limites normatives de Co2 d'un espace clos se situe vers:",
        a: "750-1250bpm",
        b: "1000-1500bpm",
        c: "1250-1750bpm",
        d: "1500-2000bpm",
        correct:"b",
    },
    {
        question:"Par voie bucale, l'enfant est considéré comme fiévreux à partir de :",
        a: "37,1°C",
        b: "37,5°C",
        c: "38°C",
        d: "38,5°C",
        correct:"c",
    },
    { 
        question:"Quelle est la marge d'erreur moyenne d'une prise de température avec un bracelet ?",
        a: "0%",
        b: "3,3%",
        c: "6,7%",
        d: "10%",
        correct:"c",
    },
    {
        question:"Pour prendre la température d'un enfant par voie bucale, il faut laisser le thermomètre sous la langue au moins:",
        a: "20s",
        b: "40s",
        c: "1min",
        d: "1min30s",
        correct:"c",
    },
];

const quiz = document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl =document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')

let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz(){
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers(){
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getselected(){
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked){
            answer = answerEl.id
        }
    })
    return answer
}

submitBtn.addEventListener('click',() => {
    const answer = getselected()
    if (answer) {
        if(answer === quizData[currentQuiz].correct){
            score++
        }
        currentQuiz++
        if(currentQuiz < quizData.length){
            loadQuiz()
        } else{
            quiz.innerHTML ='<h2> Tu as répondu bon à ? questions</h2> <button onclick="location.reload()">Reload</button>'
        }
    }
})