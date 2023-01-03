// Create the canvas element and set its width and height
var canvas = document.getElementById("canvas");
var canvas2 = document.getElementById("canvas2");

canvas.width = 500;
canvas.height = 300;
canvas2.width = 500;
canvas2.height = 300;


// Get the drawing context
var ctx = canvas.getContext("2d");
var ctx2 = canvas2.getContext("2d");

// Set the stroke style for the lines
ctx.strokeStyle = "#333";
ctx2.strokeStyle = "#333";

// Stroke the line on the canvas

// Définissez les données du graphique (les valeurs des barres)
var data = [12, 19, 3, 5, 2, 3];
var data2 = [4 ,95, 35, 91, 45, 12, 3];

// Définissez la largeur et la hauteur de chaque barre
var barWidth = 40;
var barHeight;

// Définissez la couleur de chaque barre
var barColor = "#00ff00";

// Create a border for the canvas
ctx.strokeRect(0, 0, canvas.width, canvas.height);
ctx2.strokeRect(0, 0, canvas2.width, canvas2.height);


const maxData = getMaxOfArray(data);
const maxData2 = getMaxOfArray(data2);

// Pour chaque valeur dans les données, dessinez une barre dans le canvas
for (var i = 0; i < data.length; i++) {
    ctx.lineTo((i / (data.length -1) ) * canvas.width, (data[i] / maxData ) * canvas.height );
    ctx.stroke();
}


// function that get max number from array
function getMaxOfArray(numArray) {
    return Math.max.apply(null, numArray);
}


for (var i = 0; i < data2.length; i++) {
    ctx2.lineTo((i / (data2.length -1) ) * canvas2.width, (data2[i] / maxData2 ) * canvas2.height );
    ctx2.stroke();
}