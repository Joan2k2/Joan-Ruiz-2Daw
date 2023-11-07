let cantMostrar = 3;
let numpag = 1;
mostrarPersonajes();

document.querySelector("#render-more").addEventListener("click", () => {
  let cantpersonajes = mostrarPersonajes(cantMostrar);
  console.log(cantpersonajes);
  cantMostrar = cantpersonajes.length;
  console.log(cantMostrar);
  borrarCartas();
  mostrarPersonajes();
  document.getElementById("render-more").remove();
  if (cantpersonajes[cantpersonajes.length - 1].id === 20) {
    crearSiguiente();
  }else if(cantpersonajes[cantpersonajes.length - 1].id === 826){
    document.getElementById("render-more").remove();
    crearAtras();
  }



});

function openModel(imagen, personajeName) {
  let miModal = document.querySelector(".modal")
  miModal.classList.add("show-modal");
  let modalContenido = document.querySelector(".modal-content");
  modalContenido.style.backgroundImage = imagen;
  modalContenido.style.backgroundSize = "cover";
  modalContenido.style.backgroundPosition = "center"
  modalContenido.style.backgroundRepeat = 'no-repeat';
  document.getElementsByTagName("h1")[1].innerHTML = personajeName;
}

function closeModal() {
  let miModal = document.querySelector(".modal")
  miModal.classList.remove("show-modal");
}

function mostrarPersonajes() {
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
      let personajes = data.results;

      borrarCartas();

      personajes.slice(0, cantMostrar).forEach((personaje, index) => {
        crearcartas();

        let imagen = document.getElementsByClassName("item-0")[index];
        imagen.style.backgroundImage = "url(" + personaje.image + ")";
        let a = "url(" + personaje.image + ")";
        let nombre = personaje.name;
        document.getElementsByClassName("item-1")[index].innerHTML = personaje.gender;
        document.getElementsByClassName("item-2")[index].innerHTML = personaje.species;
        document.getElementsByClassName("item-3")[index].innerHTML = personaje.name;
        document.getElementsByClassName("item-4")[index].innerHTML = personaje.status;

        document.querySelectorAll("#trigger")[index].addEventListener("click", () => {
          openModel(a, nombre);
        });

        document.querySelector(".close-button").addEventListener("click", () => {
          closeModal();
        });
      });

      console.log(personajes);
      return personajes;
    })
    .catch((error) => {
      // Manejar cualquier error que ocurra durante la solicitud
      console.error("Error:", error);
    });

}
function crearcartas() {
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

function borrarCartas() {
  let cartas = document.getElementsByClassName("card");

  // Eliminar todos los elementos con la clase "card"
  while (cartas.length > 0) {
    cartas[0].remove();
  }

}
function crearSiguiente() {
  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.createElement("div");
  div.setAttribute("id", "render-more");

  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "SIGUIENTES";

  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);

}
function crearAtras() {
  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.createElement("div");
  div.setAttribute("id", "render-more");

  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "ANTERIORES";

  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);

}
function crearMostrarMas() {

  // Crear el elemento div con el atributo id
  let divcont = document.querySelector(".content");
  let div = document.createElement("div");
  div.setAttribute("id", "render-more");

  // Crear el elemento de botón y establecer su texto
  let button = document.createElement("button");
  button.textContent = "MOSTRAR MÁS";

  // Agregar el botón como hijo del div
  div.appendChild(button);

  // Agregar el div al cuerpo del documento (o a otro elemento deseado)
  divcont.appendChild(div);
}
