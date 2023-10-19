let posicion = 0;
let h1s = document.getElementsByTagName('h1');
let idBoton = false;
let bebidas =
    console.log(h1s);
let td = document.getElementsByTagName('td')[2];
let contents = [
    { title: 'Cafe', path: 'url(src/cafe/1.jpg)' },
    { title: 'Infusiones', path: 'url(src/infusiones/1.jpg)' },
    { title: 'Alcohol', path: 'url(src/alcohol/1.jpg)' }];
let title = document.getElementsByTagName('h1')[0];


function mostrarBebidas() {


    let contents = [
        { title: 'Cafe', path: 'url(src/cafe/1.jpg)' },
        { title: 'Infusiones', path: 'url(src/infusiones/1.jpg)' },
        { title: 'Alcohol', path: 'url(src/alcohol/1.jpg)' }];


    for (let i = 0; i < contents.length; i++) {
        let h1 = document.createElement('h1');
        h1.style.backgroundImage = contents[i].path;
        h1.style.fontSize = "25px"
        h1.style.color = 'white';
        h1.style.height = '300px';
        h1.style.width = '30%';
        h1.style.backgroundSize = 'contain';
        h1.style.backgroundRepeat = 'no-repeat';
        h1.style.display = 'inline-block';
        h1.textContent = contents[i].title;
        td.appendChild(h1);

    }
    title.innerHTML = "Bebidas";
    document.getElementsByTagName("h1")[1].addEventListener("click", () => {
        deleteCategories();
        cretePhotosBebidas(1);
    
    
    
    });
    document.getElementsByTagName("h1")[2].addEventListener("click", () => {
        deleteCategories();
        cretePhotosBebidas(2);
    
    
    
    });
    
    document.getElementsByTagName("h1")[3].addEventListener("click", () => {
        deleteCategories();
        cretePhotosBebidas(3);
    
    
    
    });
}

function mostrarPostres() {

    let td = document.getElementsByTagName('td')[2];
    let title = document.getElementsByTagName('h1')[0];
    let contents = [
        { title: 'Tartas', path: 'url(src/tartas/1.jpg)' },
        { title: 'Frutas', path: 'url(src/fruta/1.jpg)' }];


    for (let i = 0; i < contents.length; i++) {
        let h1 = document.createElement('h1');
        h1.style.backgroundImage = contents[i].path;
        h1.style.fontSize = "25px"
        h1.style.color = 'white';
        h1.style.height = '300px';
        h1.style.width = '30%';
        h1.style.backgroundSize = 'contain';
        h1.style.backgroundRepeat = 'no-repeat';
        h1.style.display = 'inline-block';
        h1.textContent = contents[i].title;
        td.appendChild(h1);

    }
    title.innerHTML = "Postres";
    document.getElementsByTagName("h1")[1].addEventListener("click", () => {
        deleteCategories();
        cretePhotosBebidas(5);
    
    
    
    });
    document.getElementsByTagName("h1")[2].addEventListener("click", () => {
        deleteCategories();
        cretePhotosBebidas(6);
    
    
    
    });
}
function mostrarEntrantes() {

    let td = document.getElementsByTagName('td')[2];
    let title = document.getElementsByTagName('h1')[0];
    let contents = [
        { title: 'Entrantes', path: 'url(src/entrantes/1.jpg)' }];


    for (let i = 0; i < contents.length; i++) {
        let h1 = document.createElement('h1');
        h1.style.backgroundImage = contents[i].path;
        h1.style.fontSize = "25px"
        h1.style.color = 'white';
        h1.style.height = '300px';
        h1.style.width = '30%';
        h1.style.backgroundSize = 'contain';
        h1.style.backgroundRepeat = 'no-repeat';
        h1.style.display = 'inline-block';
        h1.textContent = contents[i].title;
        td.appendChild(h1);
    }
    title.innerHTML = "Entrantes";
    document.getElementsByTagName("h1")[1].addEventListener("click", () => {
        deleteCategories();
        cretePhotosBebidas(4);
        
    
    
    });
}
let funciones = [mostrarBebidas, mostrarEntrantes, mostrarPostres];


//al darle 2 veces a suguiente y luego una a atras me lleva a bebidas en vez de a entrantes" SOLUCIONAR
mostrarBebidas();
document.getElementById("anterior").addEventListener("click", () => {
    
    console.log("Entra con la posicion " + posicion);
    if (posicion === 2 && idBoton === false) {
        posicion++;
    }
    if (posicion === 1) {
        posicion++;
    }


    posicion--;
    console.log("Sale con la posicion " + posicion);
    deleteCategories();

    if (posicion <= 0) {
        posicion = funciones.length;

        funciones[posicion - 1]();
        console.log(posicion);
    } else {
        // if(idBoton===false){
        //     posicion++;
        // }
        funciones[posicion - 1]();
        if (posicion - 1 === 0) {
            posicion = 0;
        }
    }
    idBoton = true;
    console.log(idBoton);
    deletePhotos();
});

document.getElementById("siguiente").addEventListener("click", () => {
    console.log("Entra con la posicion " + posicion);
    
    posicion++;
    deleteCategories();
    console.log("Sale con la posicion " + posicion);
    if (posicion >= funciones.length) {
        posicion = 0;

        funciones[posicion]();
        console.log(posicion);
    } else {
        funciones[posicion]();
    }
    idBoton = false;
    deletePhotos();
});



function deleteCategories() {
    let a = h1s.length;
    a--;
    for (let i = 0; i < a; i++) {
        h1s[1].remove();
    }
    console.log(h1s);
}
function deletePhotos() {
    let imgs = document.getElementsByTagName('img');
    
    let b = imgs.length;
    console.log("cantidad");
    for (let i = 0; i < b; i++) {
        imgs[1].remove();
    }
}

function cretePhotosBebidas(index) {
    let cosas = ['cafe', 'infusiones', 'alcohol','entrantes','tartas','fruta'];
    for (let i = 1; i < 6; i++) {
        let img = document.createElement('img');
        img.style.width = '20%';
        img.src = `./src/${cosas[index - 1]}/${i}.jpg`;
        td.appendChild(img);
        img.addEventListener('click', () => addPhoto(cosas[index - 1], i));
    }
}

function addPhoto(category, index){
    let images = document.getElementsByTagName('img');
    ocultarFotos();
    let img = document.createElement('img');
    img.src = `./src/${category}/${index}.jpg`;
    td.appendChild(img);
    document.getElementsByTagName("img")[images.length-1].addEventListener("click",()=>{
        images[images.length-1].remove();
        mostrarFotos();
    })
};

function checkImages(){
    let images = document.getElementsByTagName('img');
    if(images.length > 6) {
        images[6].remove();
        
    }
}

function ocultarFotos() {
    let imgs = document.getElementsByTagName('img');
    
    let b = imgs.length;
    console.log("cantidad");
    for (let i = 0; i < b; i++) {
        imgs[i].hidden = true;
    }
}

function mostrarFotos() {
    let imgs = document.getElementsByTagName('img');
    
    let b = imgs.length;
    console.log("cantidad");
    for (let i = 0; i < b; i++) {
        imgs[i].hidden = false;
    }
}
//dar al título 
document.getElementsByTagName("h1")[0].addEventListener("click",()=>{
    deleteCategories();
    funciones[posicion]();

})
