document.querySelector(".photo").addEventListener("click", () => {
  for (let index = 1; index <= 6; index++) {
      createCard();
      document.getElementsByClassName("photo")[index].style.display = "none";

      let url = "https://swapi.dev/api/films/" + index;
      console.log(index);
      fetch(url)
          .then((response) => {
              // Check if the response is successful (status code 200-299)
              if (!response.ok) {
                  throw new Error("Error making the request: " + response.status);
              }

              // Parse the JSON response
              return response.json();
          })
          .then((data) => {
              let title = data.title;
              let openingCrawl = data.opening_crawl;

              document.getElementsByClassName("caption")[index].innerHTML = title;
              document.getElementsByTagName("p")[index - 1].innerHTML = openingCrawl;
              document.getElementsByClassName("photo")[index].style.display = "block";
          });
  }
});

function createCard() {
  // Create the main container
  var photoDiv = document.createElement("div");
  photoDiv.className = "photo";

  // Create the image container
  var imageContainerDiv = document.createElement("div");
  imageContainerDiv.className = "image-container";

  // Create the image
  var imgElement = document.createElement("img");
  imgElement.src =
      "https://www.lavanguardia.com/files/image_948_465/uploads/2020/05/04/5fa922920d3b5.png";

  // Create the caption
  var captionSpan = document.createElement("span");
  captionSpan.className = "caption";
  captionSpan.textContent = "Star Wars";

  // Create the paragraph
  var paragraph = document.createElement("p");
  paragraph.textContent =
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

  // Add the image to the image container
  imageContainerDiv.appendChild(imgElement);

  // Add the image container to the main container
  photoDiv.appendChild(imageContainerDiv);

  // Add the caption and paragraph to the main container
  photoDiv.appendChild(captionSpan);
  photoDiv.appendChild(paragraph);

  // Add the main container to the document body
  document.body.appendChild(photoDiv);
}
