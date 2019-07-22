/**
 * @file
 * Contains js for the controlgroup example.
 */

(function ($) {

  'use strict';

  $(function () {
    $( ".controlgroup" ).controlgroup();
    $( ".controlgroup-vertical" ).controlgroup({
      "direction": "vertical"
    });
  });
})(jQuery);
