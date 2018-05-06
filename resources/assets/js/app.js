import MouseParallax from './MouseParallax';
import swal from 'sweetalert';



new MouseParallax('Face','Home', true, false, 40);
new MouseParallax('Logotipo','Home', true, false, 20);
new MouseParallax('Player','Home', true, false, 50);

new MouseParallax('Coach','How', true, false, 50);

document.getElementById('Login-face').addEventListener('click',function (e) {
   if (!document.getElementById('check1').checked){
      e.preventDefault();
       swal("Debes aceptar los términos y condiciones !", "", "error");
   }
});



