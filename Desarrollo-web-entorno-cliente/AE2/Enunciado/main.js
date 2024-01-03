let showCant = 3;
let numpag = 1;
let arrayIdentificator = [];
let showButtons = 1;
showCharacters();
createBack();
createNext();
createGoBack();
setTimeout(() => {
  if (arrayIdentificator[arrayIdentificator.length - 1].id === 20) {

    showButtons = 1;
  } else if (arrayIdentificator[arrayIdentificator.length - 1].id === 826) {

    showButtons = 2;
  } else {

    showButtons = 3;
  }
}, 1000);

//mostrarmas
document.getElementsByTagName("button")[0].addEventListener("click", () => {

  if (arrayIdentificator[arrayIdentificator.length - 1].id === 20) {
    showButtons = 1;
  } else if (arrayIdentificator[arrayIdentificator.length - 1].id === 826) {
    showButtons = 2;
  } else {
    showButtons = 3;
  }

  //showCharacters();
    showCant = arrayIdentificator.length;
  deleteCards();
  showCharacters();
  if (showButtons === 1) {
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "inline";
  } else if (showButtons === 3) {
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[1].style.display = "inline";
    document.getElementsByTagName("button")[2].style.display = "inline";
  } else {
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[1].style.display = "inline";
  }

});
//atras
document.getElementsByTagName("button")[1].addEventListener("click", () => {
  showButtons = 0;
  if (showButtons === 0) {
    document.getElementsByTagName("button")[0].style.display = "inline";
    document.getElementsByTagName("button")[1].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "none";
  } else {
    if (arrayIdentificator[arrayIdentificator.length - 1].id === 20) {
      showButtons = 1;
    } else if (arrayIdentificator[arrayIdentificator.length - 1].id === 826) {
      showButtons = 2;
    } else {
      showButtons = 3;
    }
  }
  showCant = 3;
  numpag = 1;
  //showButtons=1;
  deleteCards();
  showCharacters();


});
//siguiente
document.getElementsByTagName("button")[2].addEventListener("click", () => {
  showButtons = 0;
  if (showButtons === 0) {
    document.getElementsByTagName("button")[0].style.display = "inline";
    document.getElementsByTagName("button")[1].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "none";
  } else {
    if (arrayIdentificator[arrayIdentificator.length - 1].id === 20) {
      showButtons = 1;
    } else if (arrayIdentificator[arrayIdentificator.length - 1].id === 826) {
      showButtons = 2;
    } else {
      showButtons = 3;
    }
  }


  //showCharacters();
  showCant = 3;
  numpag++;
  deleteCards();
  showCharacters();

  if (showButtons === 1) {
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "inline";
  } else if (showButtons === 3) {
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[1].style.display = "inline";
    document.getElementsByTagName("button")[2].style.display = "inline";
  } else if (showButtons === 2) {
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[1].style.display = "inline";
  }


});
document.getElementsByTagName("button")[3].addEventListener("click", () => {

  showCant = 3;
  numpag = 1;
  //showButtons=1;
  deleteCards();
  showCharacters();
    document.getElementsByTagName("button")[0].style.display = "inline";
    document.getElementsByTagName("button")[1].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "none";
    document.getElementsByTagName("button")[3].style.display = "none";

});
document.getElementsByTagName("h1")[0].addEventListener("click",()=>{
 showFavouriteCharacters();
    document.querySelector("#number-page").innerHTML = "Favoritos";
    document.getElementsByTagName("button")[0].style.display = "none";
    document.getElementsByTagName("button")[1].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "none";
    document.getElementsByTagName("button")[3].style.display = "inline";

});


function openModel(image, charactName) {
  let miModal = document.querySelector(".modal")
  miModal.classList.add("show-modal");
  let modalContenido = document.querySelector(".modal-content");
  modalContenido.style.backgroundImage = image;
  modalContenido.style.backgroundSize = "cover";
  modalContenido.style.backgroundPosition = "center"
  modalContenido.style.backgroundRepeat = 'no-repeat';
  document.getElementsByTagName("h1")[1].innerHTML = charactName;
}

function closeModal() {
  let miModal = document.querySelector(".modal")
  miModal.classList.remove("show-modal");
}

function showCharacters() {
  // URL de la API a la que deseas acceder
  let url = "https://rickandmortyapi.com/api/character/?page=" + numpag;

  // Realizar la solicitud GET usando Fetch
  fetch(url)
    .then((response) => {

      // Comprobar si la respuesta tiene un estado exitoso (código de estado 200-299)
      if (!response.ok) {
        throw new Error("Error al hacer la solicitud: " + response.status);
      }

      // Parsear la respuesta JSON
      return response.json();
    })
    .then((data) => {
      // Aquí puedes trabajar con los datos de la respuesta
      document.querySelector("#number-page").innerHTML = numpag;
      let characters = data.results;
      deleteCards();

      characters.slice(0, showCant).forEach((charact, index) => {
        createCards();

        let image = document.getElementsByClassName("item-0")[index];
        image.style.backgroundImage = "url(" + charact.image + ")";
        let a = "url(" + charact.image + ")";
        let name1 = charact.name;
        document.getElementsByClassName("item-1")[index].innerHTML = charact.gender;
        document.getElementsByClassName("item-2")[index].innerHTML = charact.species;
        document.getElementsByClassName("item-4")[index].innerHTML = charact.status;
        if (showCant >= 4) {
          if (index >= 3) {
            animateName(charact.name, index);
          } else {
            document.getElementsByClassName("item-3")[index].innerHTML = charact.name;
          }
        } else {
          animateName(charact.name, index);
        }
        //guardar en el local storage
        document.getElementsByClassName("item-3")[index].addEventListener("click", () => {
          let dataSaved = JSON.parse(localStorage.getItem('characters')) || [];
          let name = charact.name;
          let gender = charact.gender;
          let species = charact.species;
          let status = charact.status;
          let image=charact.image;
          dataSaved.push({ name, gender, species, status,image});
          localStorage.setItem('characters', JSON.stringify(dataSaved));

        });



        document.querySelectorAll("#trigger")[index].addEventListener("click", () => {
          openModel(a, name1);
        });

        document.querySelector(".close-button").addEventListener("click", () => {
          closeModal();
        });
      });

      arrayIdentificator = characters;
    })
    .catch((error) => {
      // Manejar cualquier error que ocurra durante la solicitud
    console.log("Error", error);
    });

}
function createCards() {
  // Crear el elemento div con la clase "grid-container"
  var gridContainerDiv = document.getElementsByClassName("grid-container")[0];

  // Crear el elemento div con la clase "card"
  var cardDiv = document.createElement("div");
  cardDiv.className = "card";

  // Crear el elemento div con la clase "thumbnail"
  var thumbnailDiv = document.createElement("div");
  thumbnailDiv.className = "thumbnail";

  // Crear el elemento div con la clase "item-0" dentro de "thumbnail"
  var item0Div = document.createElement("div");
  item0Div.className = "item-0";
  thumbnailDiv.appendChild(item0Div);

  // Crear el elemento div con la clase "card-footer"
  var cardFooterDiv = document.createElement("div");
  cardFooterDiv.className = "card-footer";

  // Crear el primer conjunto de elementos h3 dentro de "card-footer"
  var h3Item1 = document.createElement("h3");
  h3Item1.className = "item-1";
  var h3Item2 = document.createElement("h3");
  h3Item2.className = "item-2";
  var h2Item3 = document.createElement("h2");
  h2Item3.className = "item-3";
  var h3Item4 = document.createElement("h3");
  h3Item4.className = "item-4";

  // Añadir los elementos h3 al contenedor
  var textContainer = document.createElement("div");
  textContainer.appendChild(h3Item1);
  textContainer.appendChild(h3Item2);
  textContainer.appendChild(h2Item3);
  textContainer.appendChild(h3Item4);

  // Crear el elemento div con la clase "botonera"
  var botoneraDiv = document.createElement("div");
  botoneraDiv.className = "botonera";

  // Crear el elemento div con el id "trigger" dentro de "botonera"
  var triggerDiv = document.createElement("div");
  triggerDiv.id = "trigger";
  triggerDiv.textContent = "Ampliar";

  // letruir la estructura
  cardFooterDiv.appendChild(textContainer);
  botoneraDiv.appendChild(triggerDiv);
  cardFooterDiv.appendChild(botoneraDiv);
  cardDiv.appendChild(thumbnailDiv);
  cardDiv.appendChild(cardFooterDiv);

  // Agregar la estructura al "grid-container"
  gridContainerDiv.appendChild(cardDiv);
}

function deleteCards() {
  let cartas = document.getElementsByClassName("card");

  // Eliminar todos los elementos con la clase "card"
  while (cartas.length > 0) {
    cartas[0].remove();
  }

}
function createNext() {
  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.querySelector("#render-more");

  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "SIGUIENTES";
  button.style.display = "none";

  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);

}
function createBack() {
  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.querySelector("#render-more");


  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "ANTERIORES";
  button.style.display = "none";
  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);

}
function createGoBack() {
  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.querySelector("#render-more");


  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "VOLVER";
  button.style.display = "none";
  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);

}
function createShowMore() {
  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.querySelector("#render-more");


  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "MOSTRAR MAS";

  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);
}

function animateName(name1, index) {
  let contenedor = document.getElementsByClassName("item-3")[index];
  let i = 0;
  let posiletra = 0;
  let letra = "";

  const intervalo = setInterval(function () {
    if (i < 5 && posiletra < name1.length) {
      // Muestra letras aleatorias para los primeros 5 ciclos
      let letraAleatoria = generateRandomLetter();
      contenedor.textContent = letra + letraAleatoria;
    } else if (posiletra < name1.length) {
      // Muestra la letra real después de los primeros 5 ciclos
      i = 0;
      letra += name1[posiletra];
      contenedor.textContent = letra;
      posiletra++;
    } else {
      // Si ya se mostraron todas las letras del name1, detén la animación
      clearInterval(intervalo);
    }

    i++;

  }, 30); // Ajusta el intervalo según tus preferencias
}

function generateRandomLetter() {
  const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  const longitud = caracteres.length;
  return caracteres.charAt(Math.floor(Math.random() * longitud));
}
function showFavouriteCharacters() {
  // Obtener los datos almacenados en localStorage
  deleteCards();
  let dataSaved = JSON.parse(localStorage.getItem('characters')) || [];

  // Verificar si hay datos guardados
  if (dataSaved.length > 0) {
    // Recorrer los datos utilizando forEach
    dataSaved.forEach((charact, index) => {
      // Acceder a cada propiedad del charact
      createCards();

      let image = document.getElementsByClassName("item-0")[index];
      image.style.backgroundImage = "url(" + charact.image + ")";

      let a = "url(" + charact.image + ")";

      let name1 = charact.name;
      document.getElementsByClassName("item-1")[index].innerHTML = charact.gender;
      document.getElementsByClassName("item-2")[index].innerHTML = charact.species;
      document.getElementsByClassName("item-4")[index].innerHTML = charact.status;
      if (showCant >= 4) {
        if (index >= 3) {
          animateName(charact.name, index);
        } else {
          animateName(charact.name, index);
        }
      } else {
        animateName(charact.name, index);
      }
     
      document.querySelectorAll("#trigger")[index].addEventListener("click", () => {
        openModel(a, name1);
      });

      document.querySelector(".close-button").addEventListener("click", () => {
        closeModal();
      });
  



    });
  } else {
     
  }

}

