

let cambiar1=()=>{
    document.getElementsByTagName("p")[0].style.fontWeight="bold";
    document.getElementsByTagName("p")[0].style.fontSize="20px";
    document.getElementsByTagName("p")[0].style.color="red  ";
}

let cambiar2=()=>{
    document.getElementsByTagName("p")[1].style.fontWeight="bold";
    document.getElementsByTagName("p")[1].style.fontSize="30px";
    document.getElementsByTagName("p")[1].style.color="green  ";

}

let cambiar3=()=>{
    document.getElementsByTagName("p")[2].style.fontWeight="bold";
    document.getElementsByTagName("p")[2].style.fontSize="40px";
    document.getElementsByTagName("p")[2].style.color="orange ";



}
let cambiar4=()=>{
    document.getElementsByTagName("p")[3].style.fontWeight="bold";
    document.getElementsByTagName("p")[3].style.fontSize="50px";
    document.getElementsByTagName("p")[3].style.color="yellow  ";



}
document.getElementsByTagName("p")[0].addEventListener('click', cambiar1);
document.getElementsByTagName("p")[1].addEventListener('click', cambiar2);
document.getElementsByTagName("p")[2].addEventListener('click', cambiar3);
document.getElementsByTagName("p")[3].addEventListener('click', cambiar4);