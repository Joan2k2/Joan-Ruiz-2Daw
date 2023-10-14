let serie1 = 
    {
        nombre: "Hunter x Hunter",
        imagen: "https://areajugones.sport.es/wp-content/uploads/2020/04/hunter-x-hunter.jpg",
        personajes: [
            "Gon Freecss",
            "Killua Zoldyck",
            "Isaac Netero"
        ],
        casting: [
            "Junko Takeuchi"
            ,

            "Kanako Mitsuhashi"
            ,

            "Ichirō Nagai"

        ]
    }
;


let serie2 = 
    {
        nombre: "Goblin Slayer",
        imagen: "https://i.pinimg.com/originals/e9/34/5a/e9345a0ad6cc037770a8e936f07d9f33.jpg",
        personajes: [
            "Orcbolg",
            "Sacerdote Lagarto",
            "Elfa Arquera"
        ],
        casting: [

            "Yūichirō Umehara"
            ,

            "Tomokazu Sugita"
            ,

            "Nao Tōyama"

        ]
    }
;
let serie3 = 
    {
        nombre: "Shin Chan",
        imagen: "https://2.bp.blogspot.com/-ua6BJG_hVQM/UladYk51gEI/AAAAAAAAAEQ/xCnQvFCC4tQ/s1600/shin-chan.jpg",
        personajes: [
            "Sinosuke Nohara",
            "Misae Nohara",
            "Hiroshi Nohara"
        ],
        casting: [

            "Yumiko Kobayashi "
            ,

            "Keiji Fujiwara"
            ,

            "Miki Narahashi"

        ]
    }
;
let series = [serie1, serie2, serie3];

let pelicula1 = 
    {
        nombre: "Shin Chan Las Bolas Perdidas",
        imagen: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.SKVI-5cl_adEbv2maH_sbQHaEl%26pid%3DApi&f=1&ipt=15982e77f3cb86419db71060004fb2b37de18b06a40ed875c5ee380e14611a25&ipo=images",
        personajes: [
            "Rosa",
            "Lavanda",
            "Lima"
        ],
        casting: [

            "Daisuke Gôri",
            "Kaneto Shiozawa",
            "Shinya Ôtaki"

        ]
    }
;

let pelicula2 = 
    {
        nombre: "El señor de los anillos",
        imagen: "http://4.bp.blogspot.com/-mAow1ZsLCVs/T7FBFbqBdVI/AAAAAAAACIw/v4JeYPiBiRk/w1200-h630-p-k-no-nu/g3ikqKOf.jpg",
        personajes: [
            "Frodo",
            "Sam",
            "Gandalf"
        ],
        casting: [
            "ELIJAH WOOD", "SEAN ASTIN", "IAN MCKELLEN"
        ]
    }
;

let pelicula3 = 
    {
        nombre: "Elemental",
        imagen: "https://media.telemetro.com/p/d67759e1eb005b91b9cae8a1a1a69086/adjuntos/311/imagenes/018/292/0018292854/855x0/smart/imagepng.png",
        personajes: [
            "Candela Lumen",
            "Nilo",
            "Lucio Lumen"
        ],
        casting: [

            "Leah Lewis"
            ,

            "Mamoudou Athie"
            ,

            "Ronnie del Carmen"

        ]
    }
;

let peliculas = [pelicula1, pelicula2, pelicula3];

let cargar = false;
let posicion1 = 0;
let posicion2 = 0;

function cargarSeries() {
    cargar = false;
     
    document.getElementsByTagName("h1")[1].innerHTML = series[posicion1].nombre;
    document.getElementsByTagName("h3")[0].innerHTML = series[posicion1].casting[posicion2];
    document.getElementsByTagName("h2")[0].innerHTML = series[posicion1].personajes[posicion2];
    document.getElementsByTagName("img")[0].src = series[posicion1].imagen;

}
function cargarPeliculas() {
    cargar = true;
     
    document.getElementsByTagName("h1")[1].innerHTML = peliculas[posicion1].nombre;
    document.getElementsByTagName("h3")[0].innerHTML = peliculas[posicion1].casting[posicion2];
    document.getElementsByTagName("h2")[0].innerHTML = peliculas[posicion1].personajes[posicion2];
    document.getElementsByTagName("img")[0].src = peliculas[posicion1].imagen;

}

function actorAlante() {
    if(cargar===false){
        if (posicion2 === 2) {
            posicion2 = 0;
            cargarSeries();
        } else {
            posicion2++;
            cargarSeries();
        }
    }else{
        if (posicion2 === 2) {
            posicion2 = 0;
            cargarPeliculas();
        } else {
            posicion2++;
            cargarPeliculas();
        }
    }
    

}

function actorAtras() {
    if(cargar===false){
        if (posicion2 === 0) {
            posicion2 = 2;
            cargarSeries();
        } else {
            posicion2--;
            cargarSeries();
        }
    }else{
        if (posicion2 === 0) {
            posicion2 = 2;
            cargarPeliculas();
        } else {
            posicion2--;
            cargarPeliculas();
        }
    }
}
function serieAlante() {
    if(cargar===false){
        if (posicion1 === 2) {
            posicion1 = 0;
            cargarSeries();
        } else {
            posicion1++;
            cargarSeries();
        }
    }else{
        if (posicion1 === 2) {
            posicion1 = 0;
            cargarPeliculas();
        } else {
            posicion1++;
            cargarPeliculas();
        }
    }
}

function serieAtras() {
    if(cargar===false){
        if (posicion1 === 0) {
            posicion1 = 2;
            cargarSeries();
        } else {
            posicion1--;
            cargarSeries();
        }
    }else{
        if (posicion1 === 0) {
            posicion1 = 2;
            cargarPeliculas();
        } else {
            posicion1--;
            cargarPeliculas();
        }
    }
}
cargarSeries();
document.getElementsByClassName("nutrition")[0].addEventListener("click", cargarSeries);
document.getElementsByClassName("nutrition")[1].addEventListener("click", cargarPeliculas);
document.getElementsByTagName("a")[1].addEventListener("click", actorAlante);
document.getElementsByTagName("a")[0].addEventListener("click", actorAtras);
document.getElementsByTagName("a")[3].addEventListener("click", serieAlante);
document.getElementsByTagName("a")[2].addEventListener("click", serieAtras);
