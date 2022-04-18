$(document).ready(function () {
  // show card text on hover, change bg-colour, add class active for styling
  $('.service-container').on('mouseenter', function () {
    $(this)
      .addClass('active')
      .css({ opacity: '1', 'background-color': 'limegreen', 'z-index': '100' })
      .find('.service-details')
      .show('p');
  });
  // hide card text on mouseleave, remove z-index, change bg-colur to indicate 'already visited' this card, remove class active to reset styling
  $('.service-container').on('mouseleave', function () {
    $(this)
      .removeClass('active')
      .css({ 'z-index': '1', 'background-color': '#ccc' })
      .find('.service-details')
      .hide('p');
  });
}); // end document ready
