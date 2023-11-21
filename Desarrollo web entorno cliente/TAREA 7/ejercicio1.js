
document.getElementsByName("cat")[0].addEventListener("click",()=>{

    mostarGato();


})
function mostarGato(){

    let url="https://api.thecatapi.com/v1/images/search";

    fetch(url)
    .then((response) => {

        // Comprobar si la respuesta tiene un estado exitoso (código de estado 200-299)
        if (!response.ok) {
          throw new Error("Error al hacer la solicitud: " + response.status);
        }
  
        // Parsear la respuesta JSON
        return response.json();
      })
      .then((data)=>{

        let urlImagen=data[0].url;
        let imagen=document.createElement("img");
            imagen.src=urlImagen;

            document.querySelectorAll(".content")[0].appendChild(imagen);

      })



}