import MouseParallax from './MouseParallax';
import {isMobile} from './isMobile';
import {audioFunc} from './audio';
import {faceAlert} from './alerts';
import swal from 'sweetalert';
import mobile from "./Mobile";

audioFunc();
faceAlert('Login-face');
let coachImg = document.querySelector('#Coach img');
if (coachImg && mobile.any()) {
    coachImg.src = 'images/como-jugar-mobile.png';
}
if (!isMobile()) {
    new MouseParallax('Face', 'Home', true, false, 40);
    new MouseParallax('Logotipo', 'Home', true, false, 20);
    new MouseParallax('Player', 'Home', true, false, 50);
    new MouseParallax('Coach', 'How', true, false, 50);
}
const gm = document.getElementById('GM4HTML5_loadingscreen');

if (gm) {

    const tk = document.createElement('script');

    if(mobile.iOS()){
        alert('ios13');
        tk.src = 'ios/trocipollo.js';
    }else{
        alert('we13');
        tk.src = 'html5game/trocipollo.js';
    }
    tk.type = 'text/javascript';
    tk.async = true;

    tk.onload = tk.onreadystatechange = function () {
        let rs = this.readyState;
        if (rs && rs != 'complete' && rs != 'loaded') return;


        if (window.innerHeight > window.innerWidth) {
            swal("para mejorar tu experienia al jugar pon tu dispositivo en modo horizontal!", "", "warning");
        }
        window.onresize = function (event) {
            applyOrientation();
        };
        GameMaker_Init();


    };

    const s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(tk, s);


    function applyOrientation() {
        if (window.innerHeight > window.innerWidth) {
            swal("para mejorar tu experienia al jugar pon tu dispositivo en modo horizontal!", "", "warning");
        }
        else {
            swal.close()
        }
    }

}

