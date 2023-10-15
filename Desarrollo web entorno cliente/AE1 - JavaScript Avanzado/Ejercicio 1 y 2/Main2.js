const footerh1 = document.createElement("div");
footerh1.classList.add("header");
footerh1.innerHTML = "<h1>Contacto</h1>";
document.body.appendChild(footerh1);


    // Crear un formulario en JavaScript
    const formulario = document.createElement("form");
    formulario.id = "miFormulario";



    const inputNombre = document.createElement("input");
    inputNombre.type = "text";
    inputNombre.id = "name";
    inputNombre.name = "name";
    inputNombre.placeholder="Nombre";
    inputNombre.classList.add("input");
    inputNombre.required = true;
    formulario.appendChild(inputNombre);

    

    const inputPrimerApellido = document.createElement("input");
    inputPrimerApellido.type = "text";
    inputPrimerApellido.id = "first-surname";
    inputPrimerApellido.name = "first-surname";
    inputPrimerApellido.placeholder="Primer Apellido";
    inputPrimerApellido.classList.add("input");
    inputPrimerApellido.required = true;
    formulario.appendChild(inputPrimerApellido);

    
    

    const cerrarButton = document.createElement("span");
    cerrarButton.classList.add("close-button");
    cerrarButton.innerHTML=('<span>×</span>');
    formulario.appendChild(cerrarButton);

    const inputSegundoApellido = document.createElement("input");
    inputSegundoApellido.type = "text";
    inputSegundoApellido.id = "second-surname";
    inputSegundoApellido.name = "second-surname";
    inputSegundoApellido.placeholder="Segundo Apellido";
    inputSegundoApellido.classList.add("input");
    inputSegundoApellido.required = true;
    formulario.appendChild(inputSegundoApellido);



    const inputTelefono = document.createElement("input");
    inputTelefono.type = "tel";
    inputTelefono.id = "telefono";
    inputTelefono.name = "telefono";
    inputTelefono.placeholder="Telefono";
    inputTelefono.classList.add("input");
    inputTelefono.required = true;
    formulario.appendChild(inputTelefono);

    // Crear el botón de envío
    const submitButton = document.createElement("input");
    submitButton.type = "submit";
    submitButton.value = "Enviar";
    submitButton.classList.add("send");
    formulario.appendChild(submitButton);

    formulario.addEventListener("submit", function(event) {
        event.preventDefault();
        let nombre = document.getElementById("name").value;
        let apellido1 = document.getElementById("first-surname").value;
        let apellido2 = document.getElementById("second-surname").value;
        let telefono = document.getElementById("telefono").value;
    
    
        if (noContieneNumeros(nombre) === true) {
            if (noContieneNumeros(apellido1) === true) {
                if (noContieneNumeros(apellido2) === true) {
                    if (esSoloNumeros(telefono) === true) {
                        alert("todo ok");
                        
                    }else{
                        document.getElementById("telefono").value="";
                    }
                } else {
                    alert("Solo pueden haber letras en el 2 apellido");
                    document.getElementById("second-surname").value="";
    
                }
            } else {
                alert("Solo pueden haber letras en el 1 apellido");
                document.getElementById("first-surname").value="";
            }
        } else {
            alert("Solo pueden haber letras en el nombre");
            document.getElementById("name").value="";
        }

      });

    


const divmodal = document.createElement("div");
divmodal.classList.add("modal");

const divmodalContent = document.createElement("div");
divmodalContent.classList.add("modal-content");
divmodalContent.appendChild(formulario) ;
divmodal.appendChild(divmodalContent);
document.body.appendChild(divmodal);

const modal = document.getElementsByClassName('modal')[0];

document.getElementsByClassName("header")[1].addEventListener("click", function () {

    modal.classList.toggle('show-modal');

});

window.addEventListener("click", function (event) {
    if (event.target === modal) {
        modal.classList.toggle("show-modal");
    }
});

document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
    modal.classList.toggle("show-modal");
});
function noContieneNumeros(texto) {
    
    if (/^\D+$/.test(texto)) {
        return true; 
    } else {
        return false; 
    }
}

function esSoloNumeros(valor) {
    if(valor.length<9 || valor.length>9){
        alert("El telefono tiene que tener 9 numeros");
        document.getElementById("telefono").value="";
    }else{
        return /^\d+$/.test(valor);
    }
    
  }

