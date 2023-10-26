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

  
  function bajarOpacidad() {
    let counter = 0;
  
    const interval = setInterval(() => {
        divs[counter].style.opacity = 0.6;
        if (counter === 5) {
            clearInterval(interval);
        }
        counter++;
    }, 100);
}

  function anadirOpcadidad(){
    
        document.getElementsByTagName("img")[posQuit].style.opacity="0%"
        posQuit--;
    

  }