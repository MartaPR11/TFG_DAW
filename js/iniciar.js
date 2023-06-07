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

//CONTRASELA SE VE O NO
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
function validarInicio() {

  var patronEmail= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  var email= document.getElementById('email').value;
  var con = document.getElementById("contrasena").value;

  // Realizar validación del formulario
  if (!email || !con) {
    alert("Por favor, complete todos los campos requeridos.");
    window.open("http://3.11.140.242/karma/iniciar.php");
    return false;
  }
  if(!patronEmail.test(email)){
    alert("El email no es correcto");
    email.style.color='red'
    return false;
  }else{
    console.log("hola");
  }
  return true;
};