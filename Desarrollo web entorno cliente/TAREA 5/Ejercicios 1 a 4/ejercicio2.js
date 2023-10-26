let divs = document.getElementsByClassName("photo");
let divsArray = Array.from(divs);

let posQuit=divs.length
divsArray.map((div, index) => {
    let img = document.createElement("img");
    img.style.height='300px';
    img.style.width='100%';
    img.src="./images/"+(index+1)+".jpg";
    div.appendChild(img);
  });
  bajarOpacidad();

  setInterval(anadirOpcadidad,600) ;

  //setInterval(bajarOpacidad,2000) ;

  
  function bajarOpacidad() {
    let counter = 0;
  
    const interval = setInterval(() => {
        divs[counter].style.opacity = "60%";
        if (counter === 5) {
            clearInterval(interval);
        }
        counter++;
    }, 100);
}

  function anadirOpcadidad(){
    let counter = 5;
    const interval = setInterval(() => {
        divs[counter].style.opacity = "100%";
        if (counter === 0) {
            clearInterval(interval);
        }
        counter--;
    }, 100);
        
    

  }