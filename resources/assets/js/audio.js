const audio = document.getElementById('Audio'),
  audioEl = document.getElementById('Player');
let cookieValue = 0;
export  function audioFunc() {
if (audio) {
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

  if (document.cookie.split(';').filter((item) => {
      return item.includes('sound=')
    }).length) {
    cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)sound\s*\=\s*([^;]*).*$)|^.*$/, "$1");

    if (cookieValue === '1') {
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
}