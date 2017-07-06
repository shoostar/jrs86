// Widows
$('article > p').each(function() {
  $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
});



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



// SO MUCH ROOM FOR ACTIVITIES!!!
function Quote(text, author) {
  this.text = text;
  this.author = author;
}

var quotes = [];
quotes.push(new Quote("thinking about what to eat for lunch", "Will work for homemade apple pie"));
quotes.push(new Quote("keeping his suey chopped", "He doesn't really care for Chinese food"));
quotes.push(new Quote("listening to obnoxiously loud music", "Very metalhead, but listens to anything"));

var getNewRandomQuote = function() {
  return quotes[Math.floor(Math.random() * quotes.length)];
};

$(document).ready(function() {
  var displayNewQuote = function() {
    var newQuote = getNewRandomQuote();

    $("#text").html(newQuote.text);
    $("#author").html(newQuote.author);
  };

  displayNewQuote();
});



// Lazy load backgrounds
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



// PARALLAX
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  $('header').removeClass('.parallax');
  $('section').removeClass('.parallax');
} else {
  // PARALLAX
  // Add parallax scrolling to all images in .paralax-image container
  $('.parallax').each(function(){
    // only put top value if the window scroll has gone beyond the top of the image
	    if ($(this).offset().top = $(window).scrollTop()) {
			// Get ammount of pixels the image is above the top of the window
			var difference = $(window).scrollTop() - $(this).offset().top;
      // Top value of image is set to half the amount scrolled
      // (this gives the illusion of the image scrolling slower than the rest of the page)
      var half = (difference / 2) + 'px',
          transform = 'translate3d( 0, ' + half + ',0)';

      $(this).find('.cover-image').css('transform', transform);
		} else {
      // if image is below the top of the window set top to 0
			$(this).find('.cover-image').css('transform', 'translate3d(0,0,0)');
    }
  });
};
