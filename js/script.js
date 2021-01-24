(function($) {
  
  $(document).on('focusout', 'input', function(e) {
    $('body').css({
      "background-color": "yellow",
      "font-size": "18px"
    });
  });

  $(document).on('focusin', 'input', function(e) {
    $('body').css({
      "background-color": "red",
      "font-size": "18px"
    });
  });

})(jQuery)
