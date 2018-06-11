import MouseParallax from './MouseParallax';
import {isMobile} from './isMobile';
import {audioFunc} from './audio';
import {faceAlert} from './alerts';

audioFunc();
faceAlert('Login-face');
if (!isMobile()) {
  new MouseParallax('Face', 'Home', true, false, 40);
  new MouseParallax('Logotipo', 'Home', true, false, 20);
  new MouseParallax('Player', 'Home', true, false, 50);
  new MouseParallax('Coach', 'How', true, false, 50);
}
const tk = document.createElement('script');
tk.src = 'html5game/trocipollo.js?JJYXB=32394876';
tk.type = 'text/javascript';
tk.async = 'true';
import swal from 'sweetalert';

tk.onload = tk.onreadystatechange = function () {
  let rs = this.readyState;
  if (rs && rs != 'complete' && rs != 'loaded') return;

  let promise = new Promise(function (resolve, reject) {

    if (window.innerHeight > window.innerWidth) {
      swal("para mejorar tu experienia al jugar pon tu dispositivo en modo horizontal!", "", "warning");
    }
    window.onresize = function (event) {
      applyOrientation();
    };

    GameMaker_Init();
    resolve();
  });
  promise.then(function () {

  });
};

const s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(tk, s);


function applyOrientation() {
  if (window.innerHeight > window.innerWidth) {
    swal("para mejorar tu experienia al jugar pon tu dispositivo en modo horizontal!", "", "warning");
  }
  else{
    swal.close()
  }
}