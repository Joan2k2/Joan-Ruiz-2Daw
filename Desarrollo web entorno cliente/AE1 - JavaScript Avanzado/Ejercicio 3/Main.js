let posicion=0;

function mostrarBebidas(){

    let td = document.getElementsByTagName('td')[2];
    let title = document.getElementsByTagName('h1')[0];
    let contents = [
        { title: 'Cafe', path: 'url(src/cafe/1.jpg)' },
        { title: 'Infusiones', path: 'url(src/infusiones/1.jpg)' },
        { title: 'Alcohol', path: 'url(src/alcohol/1.jpg)' }];
    
    
    for (let i = 0; i < contents.length; i++) {
        let h1 = document.createElement('h1');
        h1.style.backgroundImage = contents[i].path;
        h1.style.fontSize="25px"
        h1.style.color = 'white';
        h1.style.height = '300px';
        h1.style.width = '30%';
        h1.style.backgroundSize = 'contain';
        h1.style.backgroundRepeat = 'no-repeat';
        h1.style.display = 'inline-block';
        h1.textContent = contents[i].title;
        td.appendChild(h1);
        
    }
    title.innerHTML="Bebidas"
}

function mostrarPostres(){

    let td = document.getElementsByTagName('td')[2];
    let title = document.getElementsByTagName('h1')[0];
    let contents = [
        { title: 'Tartas', path: 'url(src/tartas/1.jpg)' },
        { title: 'Frutas', path: 'url(src/fruta/1.jpg)' }];
    
    
    for (let i = 0; i < contents.length; i++) {
        let h1 = document.createElement('h1');
        h1.style.backgroundImage = contents[i].path;
        h1.style.fontSize="25px"
        h1.style.color = 'white';
        h1.style.height = '300px';
        h1.style.width = '30%';
        h1.style.backgroundSize = 'contain';
        h1.style.backgroundRepeat = 'no-repeat';
        h1.style.display = 'inline-block';
        h1.textContent = contents[i].title;
        td.appendChild(h1);
        
    }
    title.innerHTML="Postres"
}
function mostrarEntrantes(){

    let td = document.getElementsByTagName('td')[2];
    let title = document.getElementsByTagName('h1')[0];
    let contents = [
        { title: 'Entrantes', path: 'url(src/entrantes/1.jpg)' }];
    
    
    for (let i = 0; i < contents.length; i++) {
        let h1 = document.createElement('h1');
        h1.style.backgroundImage = contents[i].path;
        h1.style.fontSize="25px"
        h1.style.color = 'white';
        h1.style.height = '300px';
        h1.style.width = '30%';
        h1.style.backgroundSize = 'contain';
        h1.style.backgroundRepeat = 'no-repeat';
        h1.style.display = 'inline-block';
        h1.textContent = contents[i].title;
        td.appendChild(h1);
    }
    title.innerHTML="Entrantes"
}
let funciones= [mostrarBebidas,mostrarEntrantes,mostrarPostres];
mostrarPostres();
document.getElementById("anterior")[0].addEventListener("click",()=>{

    if(posicion===0){
        posicion=funciones.length;
        funciones[posicion];

    }else{
        posicion--;
        funciones[posicion];
    }


});

document.getElementById("siguiente")[0].addEventListener("click",()=>{

    if(posicion===funciones.length){
        posicion=0;
        funciones[posicion];

    }else{
        posicion++;
        funciones[posicion];
    }


});


