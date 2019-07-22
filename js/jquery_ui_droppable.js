/**
 * @file
 * Contains js for the droppable example.
 */

(function ($) {

  'use strict';

  $(function () {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
          .html( "Dropped!" );
      }
    });
  });
})(jQuery);
