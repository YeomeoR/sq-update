$(document).ready(function () {
  // show card text on hover, change bg-colour, add class active for styling
  $('.service-container').on('mouseenter', function () {
    $(this)
      .addClass('active')
      .css({
        opacity: '1',
        'background-color': 'rgba(189, 185, 237)',
        'z-index': '100',
      })
      .find('.service-details')
      .show('slow');
  });
  // hide card text on mouseleave, remove z-index, change bg-colur to indicate 'already visited' this card, remove class active to reset styling
  $('.service-container').on('mouseleave', function () {
    $(this)
      .removeClass('active')
      .css({ 'z-index': '1', 'background-color': 'rgba(189, 185, 237)' })
      .find('.service-details')
      .hide('slow');
  });
}); // end document ready
