let pr = document.getElementById("keyboard-cont").innerHTML;
let palabra=[];
borrarTeclado();
teclado();

function teclado() {
  var keyboardCont = document.getElementById("keyboard-cont");
  keyboardCont.innerHTML = pr;
  
  let tecla = document.getElementsByClassName("keyboard-button");
  tecla = Array.from(tecla);
  for (let i = 0; i < tecla.length; i++) {
    console.log("BIAU");
    let p = tecla[i].innerHTML;

    if (p == "Del") {
      tecla[i].addEventListener("click", () => {
        palabra.pop();
        console.log(palabra);
      });
    } else if (p == "Enter") {
      tecla[i].addEventListener("click", () => {
        console.log("PPPPPPPPPP");
      });
    } else {
      tecla[i].addEventListener("click", () => {
        palabra.push(p);
        console.log(palabra);
      });
    }
  }

  document.body.appendChild(keyboardCont);
}

function borrarTeclado() {
  let a = document.getElementsByTagName("form")[0];
  a.remove();
}
