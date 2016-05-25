$(function () {
    var hide = true;
    $('.burger').click(function () {
        if (hide == true) {
            disableScroll();
            
            $('.croix1').css('transform', 'rotate(45deg)');
            $('.croix2').css('transform', 'rotate(135deg)');
            $('.croix2').css('top', '16px');
            $('.croix3').css('display', 'none');
            $('.nav1').css('display', 'inline-block');
            $('.sombre').css('display', 'inline-block');
            hide = false;
        } else {
            enableScroll();
            $('.croix1').css('transform', 'rotate(0deg)');
            $('.croix2').css('transform', 'rotate(0deg)');
            $('.croix2').css('top', '10px');
            $('.croix3').css('display', 'inline-block');
            $('.nav1').css('display', 'none');
            $('.sombre').css('display', 'none');
            hide = true;
        }
    });
    
    $('.sombre').click(function(){
        enableScroll();
        $('.croix1').css('transform', 'rotate(0deg)');
        $('.croix2').css('transform', 'rotate(0deg)');
        $('.croix2').css('top', '10px');
        $('.croix3').css('display', 'inline-block');
        $('.nav1').css('display', 'none');
        $('.sombre').css('display', 'none');
        hide = true;
    });
    
    
    // left: 37, up: 38, right: 39, down: 40,
    // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    var keys = {37: 1, 38: 1, 39: 1, 40: 1};

    function preventDefault(e) {
      e = e || window.event;
      if (e.preventDefault)
          e.preventDefault();
      e.returnValue = false;  
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    
    function disableScroll() {
      if (window.addEventListener) // older FF
          window.addEventListener('DOMMouseScroll', preventDefault, false);
      window.onwheel = preventDefault; // modern standard
      window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
      window.ontouchmove  = preventDefault; // mobile
      document.onkeydown  = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        if (window.removeEventListener)
            window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.onmousewheel = document.onmousewheel = null; 
        window.onwheel = null; 
        window.ontouchmove = null;  
        document.onkeydown = null;  
    }
});
