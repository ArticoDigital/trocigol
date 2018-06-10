import MouseParallax from './MouseParallax';
import swal from 'sweetalert';


if (!isMobile()) {
  new MouseParallax('Face', 'Home', true, false, 40);
  new MouseParallax('Logotipo', 'Home', true, false, 20);
  new MouseParallax('Player', 'Home', true, false, 50);

}


new MouseParallax('Coach', 'How', true, false, 50);

const face = document.getElementById('Login-face');
if (face) {
  face.addEventListener('click', function (e) {
    if (!document.getElementById('check1').checked) {
      e.preventDefault();
      swal("Debes aceptar los términos y condiciones !", "", "error");
    }
  });
}
const audio = document.getElementById('Audio'),
  audioEl = document.getElementById('Player');
let cookieValue = 0;
audioEl.addEventListener('click', function () {
  this.classList.toggle('pauseButton');

  if (audio.paused) {
    audio.play();
    document.cookie = "sound=1";
  } else {
    audio.pause();
    document.cookie = "sound=0";
  }
});
if (audio) {
  if (document.cookie.split(';').filter((item) => {
      return item.includes('sound=')
    }).length) {
    cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)sound\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    console.log(cookieValue)
    if (cookieValue == 1) {
      audio.play();
    }
    else {
      audioEl.classList.toggle('pauseButton');
    }
  } else {
    audio.play();
    document.cookie = "sound=1";
  }
}


function isMobile() {
  if (navigator.userAgent.match(/Mobi/)) {
    return true;
  }

  if ('screen' in window && window.screen.width < 1366) {
    return true;
  }

  let connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;

  return !!(connection && connection.type === 'cellular')
}

