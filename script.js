let bopen = document.querySelector('#contacter');
let bclose = document.querySelector('#croix');


function afficher() {
    document.querySelector('#mail').style.dysplay = "flex";
}

function masquer() {
    document.querySelector('#mail').style.dysplay = "none";
}
  
bopen.addEventListener('click',afficher);
bclose.addEventListener('click',masquer);