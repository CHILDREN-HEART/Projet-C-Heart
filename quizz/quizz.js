const quizData = [
    {
        question: "La fréquence cardiaque d'un enfant augmente avec l'âge.",
        a: "vrai",
        b: "faux",
        correct: "b",
    },
    {
        question: "S'assoir permet-il d'augmenter la fiabilité du capteur de fréquence cardiaque?",
        a: "vrai",
        b: "faux",
        correct: "a",
    },
    {
        question: "Les établissements accueillants des enfants de moins de 6 ans ont pour obligation de surveiller la qualité de l'air dans leurs salles.",
        a: "vrai",
        b: "faux",
        correct: "a",
    },
    {
        question: "Les valeurs limites normatives de Co2 d'un espace clos se situe vers:",
        a: "750-1250bpm",
        b: "1000-1500bpm",
        c: "1250-1750bpm",
        d: "1500-2000bpm",
        correct: "b",
    },
    {
        question: "Par voie buccale, l'enfant est considéré comme fébrile à partir de :",
        a: "37,1°C",
        b: "37,5°C",
        c: "38°C",
        d: "38,5°C",
        correct: "c",
    },
    {
        question: "Quelle est la marge d'erreur moyenne d'une prise de température avec un bracelet ?",
        a: "0%",
        b: "3,3%",
        c: "6,7%",
        d: "10%",
        correct: "c",
    },
    {
        question: "Comment évacuer le CO2 dans une pièce ?",
        a: "En fermant les fenêtres",
        b: "En ouvrant les fenêtres",
        correct: "b",
    },
];

const quiz = document.getElementById('quiz');
const questionEl = document.getElementById('question');
const submitBtn = document.getElementById('submit');
const answersUl = document.getElementById('answers');

let currentQuiz = 0;
let score = 0;

window.onload = () => {
    loadQuiz();
};

function loadQuiz() {
    const currentQuizData = quizData[currentQuiz];
    questionEl.innerText = currentQuizData.question;

    const choices = {a: currentQuizData.a, b: currentQuizData.b, c: currentQuizData.c, d: currentQuizData.d};
    Object.entries(choices).filter(([key, value]) => value !== undefined).forEach(([key, value]) => {
        answersUl.innerHTML += `<li><input type="radio" name="answer" id="${key}" value="${key}"><label for="${key}">${value}</label></li>`;
    });

    submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const answer = document.querySelector('input[name="answer"]:checked');
        if (!answer) return;

        const currentQuizData = quizData[currentQuiz];
        if (answer.value === currentQuizData.correct) score++;

        currentQuiz++;
        answersUl.innerHTML = '';

        if (currentQuiz < quizData.length) {
            loadQuiz();
        } else {
            quiz.innerHTML = `<h2>Vous avez répondu correctement à ${score}/${quizData.length} questions.</h2>
            <button onclick="location.reload()">Recommencer</button>`;
        }
    })

}
