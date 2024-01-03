
document.getElementsByName("cats")[0].addEventListener("click", () => {

  mostarGato2();


})
function mostarGato2() {

  let url = "https://api.thecatapi.com/v1/images/search?limit=10";

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

      data.forEach(element => {
        
        let urlImagen = element.url;
        let imagen = document.createElement("img");
        imagen.src = urlImagen;

        document.querySelectorAll(".content")[1].appendChild(imagen);

      });

    })



}