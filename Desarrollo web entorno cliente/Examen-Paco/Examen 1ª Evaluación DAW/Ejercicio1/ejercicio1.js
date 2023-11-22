guardarDatos();
async function guardarDatos(){
let characters=[];

for (let index = 0; index <= 826; index++) {

   let url="https://rickandmortyapi.com/api/character/"+index+1;
    await fetch(url)
      .then((response) => {
        // Comprobar si la respuesta tiene un estado exitoso (código de estado 200-299)
        if (!response.ok) {
          throw new Error("Error al hacer la solicitud: " + response.status);
        }

        // Parsear la respuesta JSON
        return response.json();
      })
      .then((data) => {
        var characterData = {
            "id": data.id,
            "name": data.name,
            "status": data.status,
            "species": data.species,
            "type": data.type,
            "gender": data.gender,
            "origin": {
              "name": data.origin.name,
              "url": data.origin.url
            },
            "location": {
              "name": data.location.name,
              "url": data.location.url
            },
            "image": data.image,
            "episode": data.episode,
            "url": data.url,
            "created": data.created
          };
      
          // Hacer push del objeto al array
          characters.push(characterData);
      
          // Convertir el array a una cadena JSON
          var charactersString = JSON.stringify(characters);
      
          // Almacenar la cadena JSON en el localStorage
          localStorage.setItem('characters', charactersString);
      });
    
}
// Obtener la cadena JSON del localStorage
var storedCharactersString = localStorage.getItem('characters');

// Convertir la cadena JSON a un array JavaScript
var storedCharacters = JSON.parse(storedCharactersString);

// Ahora, storedCharacters contiene tu array de personajes recuperado del localStorage
console.log(storedCharacters);

}