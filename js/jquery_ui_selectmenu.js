/**
 * @file
 * Contains js for the selectmenu example.
 */

(function ($) {

  'use strict';

  $(function () {
    $( "#speed" ).selectmenu();

    $( "#files" ).selectmenu();

    $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
      .addClass( "overflow" );

    $( "#salutation" ).selectmenu();
  });
})(jQuery);
