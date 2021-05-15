var emojis = (function() {


if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent) )
  {    }else{ 
    twemoji.size = '72x72';
  twemoji.parse(document.body); }





}(window, twemoji));

// Wait for document to finish loading
function ready(cb) {
  if (document.readyState != 'loading') {
    cb();
  } else {
    document.addEventListener('DOMContentLoaded', cb);
  }
}

ready(emojis);