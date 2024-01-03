document.addEventListener('mousemove', function (event) {
    const x = event.clientX; 
    const y = event.clientY; 

    // Verificar en qué zona se encuentra el ratón y cambiar el color
    if (x >= 0 && x <= 500 && y >= 0 && y <= 500) {

        document.getElementsByTagName("h1")[0].style.color="yellow";

    } else if (x >= 0 && x <= 500 && y > 500 && y <= 1000) {

        document.getElementsByTagName("h1")[0].style.color='red';

    } else if (x > 500 && x <= 1000 && y >= 0 && y <= 500) {

        document.getElementsByTagName("h1")[0].style.color='blue';

    } else if (x > 500 && x <= 1000 && y > 500 && y <= 1000) {

        document.getElementsByTagName("h1")[0].style.color='green';
        
    }
});