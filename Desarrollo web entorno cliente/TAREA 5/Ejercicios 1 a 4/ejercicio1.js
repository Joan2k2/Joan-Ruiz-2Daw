let divs = document.getElementsByClassName("photo");
let divsArray = Array.from(divs);

crearImagenes();

function crearImagenes(){
  console.log("estoy credando imagenes");
  divsArray.map((div, index) => {
    let img = document.createElement("img");
    img.style.height='300px';
    img.style.width='100%';
    img.src="./images/"+(index+1)+".jpg";
    console.log("Estoy creadno imagen " + index);
    div.appendChild(img);
  });

}

