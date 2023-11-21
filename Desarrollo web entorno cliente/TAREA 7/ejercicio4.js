document.getElementsByName("profiles")[1].addEventListener("click", () => {

    mostarGato2();
  
  
  })
  function mostarGato2() {
  
    let url = "https://api.github.com/search/users?q=JavaScript";
  
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
  
        data.items.forEach(element => {
        
          let usrImagen = element.avatar_url;
          let imagen = document.createElement("img");
          imagen.src = usrImagen;
  
          document.querySelectorAll(".content")[3].appendChild(imagen);
  
        });
      })
  
  
  
  }