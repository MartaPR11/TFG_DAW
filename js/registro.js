
//VALIDACION COLORES
let con1 =document.getElementById('contrasena')

con1.addEventListener('input',validateCon)
function validateCon(){
    if(con1.value.length < 8){
        con1.style.color='red'
    }
    else{
        con1.style.color='green'
    }
}

//contraseña se vea o no
const contra = document.getElementById('contrasena');
const toggle = document.getElementById('toggle');

toggle.addEventListener('click',function(e){

    if (contra.type ==='password'){
        contra.setAttribute('type','text');
        toggle.classList.add('hide')
    }
    else{
        contra.setAttribute('type','password');
        toggle.classList.remove('hide')
    }
});

//validaciones formulario
function validarRegistro() {

        var patronNombre = /^(?=.*[a-z]).{1,}$/;
        var patronEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var patronCon = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

        var nombre = document.getElementById("nombre_usuario").value;
        var email = document.getElementById("email").value;
        var con = document.getElementById("contrasena").value;

        // Realizar validación del formulario
        if (!nombre || !email || !con) {
            alert("Por favor, complete todos los campos requeridos.");
            window.open("http://3.11.140.242/karma/registro.php");
            return false;
        }

        if (!patronNombre.test(nombre)) {
            alert("El nombre de usuario solo puede letras");
            window.open("http://3.11.140.242/karma/registro.php");
            return false;
        }

        if (!patronEmail.test(email)) {
            alert("El email no es correcto. Vuelva a intentarlo");
            window.open("http://3.11.140.242/karma/registro.php");
            return false;
        }

        if (!patronCon.test(con)) {
            alert("La contraseña debe contener una mayúscula, una minúsculas y un número, al menos");
            window.open("http://3.11.140.242/karma/registro.php");
            return false;
        }

        else {
            alert("El formulario se ha enviado correctamente");
        }
       // e.preventDefault()
    return true;
    };

