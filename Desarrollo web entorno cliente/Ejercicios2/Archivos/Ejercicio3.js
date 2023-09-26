function hoverTexto(ev){
    if(ev.type=="mouseover")
        ev.currentTarget.innerHTML = "Catnip free?";
    else
        ev.currentTarget.innerHTML = "casa pepe";
}

document.getElementsByTagName("h1")[0].addEventListener('mouseover', hoverTexto);
document.getElementsByTagName("h1")[0].addEventListener('mouseout', hoverTexto);