/**
 * @file
 * Contains js for the button example.
 */

(function ($) {

  'use strict';

  $(function () {
    $( ".widget input[type=submit] .widget a, .widget button" )
      .button()
      .click( function( event ) {
        event.preventDefault();
      });

    $( "#radio" ).buttonset();
  });
})(jQuery);
