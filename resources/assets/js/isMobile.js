
export function isMobile() {
  if (navigator.userAgent.match(/Mobi/)) {
    return true;
  }

  if ('screen' in window && window.screen.width < 1366) {
    return true;
  }

  let connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;

  return !!(connection && connection.type === 'cellular')
}
