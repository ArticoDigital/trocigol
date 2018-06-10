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
let promise = new Promise(function (resolve, reject) {
  tk.onload = tk.onreadystatechange = function () {
    let rs = this.readyState;
    if (rs && rs != 'complete' && rs != 'loaded') return;
    resolve();
  };
});

promise.then(function () {
  GameMaker_Init();
  document.querySelector('#loader').classList.add('hide');
});
const s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(tk, s);

