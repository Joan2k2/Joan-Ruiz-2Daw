let imgs= document.getElementsByTagName("img");


imgs = Array.from(imgs).map((imagen, index) => {
    imagen.addEventListener('click', () => {
        ocultarFotos();
        console.log(`Se hizo clic en la imagen ${index + 1}`);
        imagen.hidden=false;
    });
});


function ocultarFotos() {
    
    imgs = Array.from(imgs).map((img,index) => {
        img[index].hidden = true;
        
    });
}

function mostrarFotos() {

    imgs = Array.from(imgs).map(img => {
        img.hidden = false;
        return img;
    });
}