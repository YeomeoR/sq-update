$(document).ready(function () {
  // show card text on hover, change bg-colour, add class active for styling
  $('.project').on('click', function () {
    $(this)
      .addClass('active')
      .find('.description')
      .css({
        opacity: '1',
        'background-color': 'rgb(189, 185, 237)',
        'z-index': '1000',
      })
      .show('slow');
  });
  // hide card text on mouseleave, remove z-index, change bg-colur to indicate 'already visited' this card, remove class active to reset styling
  $('.project').on('mouseleave', function () {
    $(this)
      .removeClass('active')
      .find('.description')
      .css({
        'z-index': '1',
        'background-color': 'rgb(189, 185, 237)',
      })
      .hide('slow');
  });

  /**
   * MODAL
   */

  // Get the modal
  //   var modal = document.getElementById('myModal');
  // Get the button that opens the modal
  //   var btn = document.getElementById('myBtn');

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName('close')[0];

  // When the user clicks the button, open the modal
  //   btn.onclick = function () {
  //     // modal.style.display = 'block';
  //   };
  var modal = $(this).find('#myModal');
  $('#myBtn').on('click', function () {
    $(modal).css({ display: 'block' });
    // $(this).find('#myModal').css({ display: 'block' });
  });
  // When the user clicks on <span> (x), close the modal
  //   span.onclick = function () {
  //     modal.style.display = 'none';
  //   };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    // if (event.target == modal) {
    //   modal.style.display = 'none';
    // }
  };
}); // end document ready
