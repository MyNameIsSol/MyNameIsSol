if (!window.fxe_gaS) {
  window.fxe_gaS = document.createElement('script');
  window.fxe_gaS.src = 'https://widgets.fxempire.com/gaScript.js';
  document.head.appendChild(window.fxe_gaS);
}

if (!window.fxe_s) {
  window.fxe_s = document.createElement('script');
  window.fxe_s.src = 'https://widgets.fxempire.com/main.66251f28.js';
  document.head.appendChild(window.fxe_s);
}

if (!window.fxe_css) {
  window.fxe_css = document.createElement('link');
  window.fxe_css.href =
    'https://use.fontawesome.com/releases/v5.2.0/css/all.css';
  window.fxe_css.rel = 'stylesheet';
  window.fxe_css.type = 'text/css';
  document.getElementsByTagName('head')[0].appendChild(window.fxe_css);
}
