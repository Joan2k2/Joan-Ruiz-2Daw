let modal = document.getElementsByClassName('modal')[0];

for (let i = 1; i < document.getElementsByTagName("img").length; i++) {


    document.getElementsByTagName("img")[i].addEventListener("mouseenter", (event) => {
        if (event.type === "mouseenter") {
            document.getElementsByTagName("img")[i].style.opacity = 0.5;
        } else {
            document.getElementsByTagName("img")[i].style.opacity = 1;
        }
    });

    document.getElementsByTagName("img")[i].addEventListener("mouseout", (event) => {
        if (event.type === "mouseenter") {
            document.getElementsByTagName("img")[i].style.opacity = 0.5;
        } else {
            document.getElementsByTagName("img")[i].style.opacity = 1;
        }
    });

    document.getElementsByTagName("img")[i].addEventListener("click", function () {
        modal.classList.toggle("show-modal");

        switch (i) {
            case 1:
                document.getElementsByTagName("h1")[1].innerHTML="Chivito";
                break;
    
            case 2:
                document.getElementsByTagName("h1")[1].innerHTML="Blanco y negro";
                break;
    
            case 3:
                document.getElementsByTagName("h1")[1].innerHTML="Brascada";
                break;
    
            case 4:
                document.getElementsByTagName("h1")[1].innerHTML="Almussafes";
                break;
    
            case 5:
                document.getElementsByTagName("h1")[1].innerHTML="Tortilla de patatas";
                break;
    
            case 6:
                document.getElementsByTagName("h1")[1].innerHTML="Calamares en alioli";
                break;
    
        }

    });

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.classList.toggle('show-modal');
        }
    });



}
document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
    modal.classList.toggle("show-modal");
});

