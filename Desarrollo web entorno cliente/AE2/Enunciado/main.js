let cantMostrar = 3;
mostrarPersonajes(cantMostrar);

function openModel(imagen,personajeName) {
  let miModal = document.querySelector(".modal")
  miModal.classList.add("show-modal");
  let modalContenido= document.querySelector(".modal-content");
  modalContenido.style.backgroundImage=imagen;
  modalContenido.style.backgroundSize="cover";
  modalContenido.style.backgroundSize = 'contain';
  modalContenido.style.backgroundRepeat = 'no-repeat';
  document.getElementsByTagName("h1")[1].innerHTML=personajeName;
}

function mostrarPersonajes() {
  // URL de la API a la que deseas acceder
  const url = "https://rickandmortyapi.com/api/character/";

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
      let a = document.getElementsByClassName("card")[0];
      a.remove();
      for (let index = 0; index < cantMostrar; index++) {
        crearcartas();
        

        let imagen = document.getElementsByClassName("item-0")[index];
        imagen.style.backgroundImage = "url(" + personajes[index].image + ")";
        let a="url(" + personajes[index].image + ")";
        let nombre=personajes[index].name;
        document.getElementsByClassName("item-1")[index].innerHTML =
          personajes[index].gender;
        document.getElementsByClassName("item-2")[index].innerHTML =
          personajes[index].species;
        document.getElementsByClassName("item-3")[index].innerHTML =
          personajes[index].name;
        document.getElementsByClassName("item-4")[index].innerHTML =
          personajes[index].status;
          document.querySelectorAll("#trigger")[index].addEventListener("click",()=>{

            openModel(a,nombre);
          });
      }
      console.log(personajes);
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

  // Construir la estructura
  cardFooterDiv.appendChild(textContainer);
  botoneraDiv.appendChild(triggerDiv);
  cardFooterDiv.appendChild(botoneraDiv);
  cardDiv.appendChild(thumbnailDiv);
  cardDiv.appendChild(cardFooterDiv);

  // Agregar la estructura al "grid-container"
  gridContainerDiv.appendChild(cardDiv);
}
