// Widows
// $('p').each(function() {
//   $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
// });



// Glitch
var Glitch = function() {
  function Glitch() {
    this._text = document.querySelector('.heading');
    this._filter = document.querySelector('.svg-filters');
    this._turb = this._filter.querySelector('#filter feTurbulence');
    this._turbVal = {
      val: 0.000001
    };
    this._turbValX = {
      val: 0.000001
    };
    this.createTimeline();
  }
  Glitch.prototype.createTimeline = function() {
    var _this = this;
    this.timeline = new TimelineMax({
      repeat: 9999,
      onUpdate: function() {
        _this._turb.setAttribute('baseFrequency', _this._turbVal.val + ' ' + _this._turbValX.val);
      }
    });

    this.timeline.to(this._turbValX, 0.1, {
      val: 0.3,
      ease: Power0.easeNone
    }, 0.25);


  };
  return Glitch;
}();
new Glitch();



// .portfolio-item background colors
$('figcaption').hover( function() {
    $(this).css({ "background-color" : $(this).attr('data-color') });
});



// Lazy-load backgrounds
function lazyLoadBg(el, imageSource) {
  $('<img/>').attr('src', imageSource).on({
    load: function() {
      $(this).remove();
      $(el).css('backgroundImage', 'url(' + imageSource + ')');
      $(el).css('opacity', '1');
    },
    error: function() {
      $(this).remove();
    }
  });
}

$('.lazy').each(function(index, el) {
  lazyLoadBg(el, $(el).data('src'));
});



// Load/fade in on scroll
function checkElementLocation() {
  var $window = $(window);
  var bottom_of_window = $window.scrollTop() + $window.height();

  $(".elem").each(function(i) {
    var $that = $(this);
    var top_of_object = $that.position().top + 200;

    if (bottom_of_window > top_of_object) {
      $(this).addClass("fade-in");
    }
  });
}
checkElementLocation();

$(window).on("scroll", function() {
  checkElementLocation();
});



// User agent blocks parallax script (add other shit here if/when needed)
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  $('header').removeClass('.parallax');
} else {

  // Simple parallax background
  var cover = document.querySelector('.parallax'),
    coverHeight = Math.round(cover.offsetHeight),
    translate,
    parallaxThreshold = 3;

  function parallax() {
    if (window.scrollY < coverHeight) {
      translate = Math.round(window.scrollY / parallaxThreshold);
      window.requestAnimationFrame(function() {
        cover.style.transform = 'translateY(' + translate + 'px)';
      });
    }
  }

  parallax();

  window.addEventListener('scroll', parallax, false);

  window.addEventListener('resize', debounce(function() {
    coverHeight = Math.round(cover.offsetHeight);
  }, 800));

  function debounce(fn, wait) {
    var timeout;
    return function() {
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        fn.apply(this, arguments)
      }, (wait || 1));
    }
  }
}
