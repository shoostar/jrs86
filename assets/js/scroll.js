var $menu = $(".horscroll");

$menu.on("mousewheel", function(e) {

  var scrollSize = e.originalEvent.wheelDelta,
    thisScrollLeft = $(this).scrollLeft();
  $(this).scrollLeft(thisScrollLeft - scrollSize);

  e.preventDefault();
});
