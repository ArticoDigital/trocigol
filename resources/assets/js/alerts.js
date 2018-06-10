import swal from 'sweetalert';

export function faceAlert(name) {
  const face = document.getElementById(name);
  if (face) {
    face.addEventListener('click', function (e) {
      if (!document.getElementById('check1').checked) {
        e.preventDefault();
        swal("Debes aceptar los términos y condiciones !", "", "error");
      }
    });
  }
}

