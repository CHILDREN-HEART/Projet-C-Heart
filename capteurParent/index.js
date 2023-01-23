// Create the canvas element and set its width and height
const canvas = document.getElementById("canvas");
const canvas2 = document.getElementById("canvas2");

canvas.width = 500;
canvas.height = 300;
canvas2.width = 500;
canvas2.height = 300;


// Get the drawing context
const ctx = canvas.getContext("2d");
const ctx2 = canvas2.getContext("2d");

// Set the stroke style for the lines
ctx.strokeStyle = "#333";
ctx2.strokeStyle = "#333";


// Définissez les données du graphique (les valeurs des barres)
const data = [12, 19, 3, 5, 2, 3];
const data2 = [4, 95, 35, 91, 45, 12, 3];

// Définissez la largeur et la hauteur de chaque barre
const barWidth = 40;
let barHeight;

// Définissez la couleur de chaque barre
const barColor = "#00ff00";

// Create a border for the canvas
ctx.strokeRect(0, 0, canvas.width, canvas.height);
ctx2.strokeRect(0, 0, canvas2.width, canvas2.height);


const maxData = Math.max(...data);
const maxData2 = Math.max(...data2);

// Pour chaque valeur dans les données, dessinez une barre dans le canvas
for (let i = 0; i < data.length; i++) {
    ctx.lineTo((i / (data.length -1) ) * canvas.width, (data[i] / maxData ) * canvas.height );
    ctx.stroke();
}

for (let i = 0; i < data2.length; i++) {
    ctx2.lineTo((i / (data2.length -1) ) * canvas2.width, (data2[i] / maxData2 ) * canvas2.height );
    ctx2.stroke();
}