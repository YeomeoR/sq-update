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
  var modal1 = document.getElementById('myModal1');
  var modal2 = document.getElementById('myModal2');
  var modal3 = document.getElementById('myModal3');
  var modal4 = document.getElementById('myModal4');
  var modal5 = document.getElementById('myModal5');
  var modal6 = document.getElementById('myModal6');
  var modal7 = document.getElementById('myModal7');
  var modal8 = document.getElementById('myModal8');
  var modal9 = document.getElementById('myModal9');
  var modal10 = document.getElementById('myModal10');
  var modal11 = document.getElementById('myModal11');
  var modal12 = document.getElementById('myModal12');
  var modal13 = document.getElementById('myModal13');
  var modal14 = document.getElementById('myModal14');
  var modal15 = document.getElementById('myModal15');
  var modal16 = document.getElementById('myModal16');
  var modal17 = document.getElementById('myModal17');
  var modal18 = document.getElementById('myModal18');
  // Get the button that opens the modal
  var btn1 = document.getElementById('btn1');
  var btn2 = document.getElementById('btn2');
  var btn3 = document.getElementById('btn3');
  var btn4 = document.getElementById('btn4');
  var btn5 = document.getElementById('btn5');
  var btn6 = document.getElementById('btn6');
  var btn7 = document.getElementById('btn7');
  var btn8 = document.getElementById('btn8');
  var btn9 = document.getElementById('btn9');
  var btn10 = document.getElementById('btn10');
  var btn11 = document.getElementById('btn11');
  var btn12 = document.getElementById('btn12');
  var btn13 = document.getElementById('btn13');
  var btn14 = document.getElementById('btn14');
  var btn15 = document.getElementById('btn15');
  var btn16 = document.getElementById('btn16');
  var btn17 = document.getElementById('btn17');
  var btn18 = document.getElementById('btn18');
  // Get the <span> element that closes the modal
  var span1 = document.getElementsByClassName('close')[0];
  var span2 = document.getElementsByClassName('close')[1];
  var span3 = document.getElementsByClassName('close')[2];
  var span4 = document.getElementsByClassName('close')[3];
  var span5 = document.getElementsByClassName('close')[4];
  var span6 = document.getElementsByClassName('close')[5];
  var span7 = document.getElementsByClassName('close')[6];
  var span8 = document.getElementsByClassName('close')[7];
  var span9 = document.getElementsByClassName('close')[8];
  var span10 = document.getElementsByClassName('close')[9];
  var span11 = document.getElementsByClassName('close')[10];
  var span12 = document.getElementsByClassName('close')[11];
  var span13 = document.getElementsByClassName('close')[12];
  var span14 = document.getElementsByClassName('close')[13];
  var span15 = document.getElementsByClassName('close')[14];
  var span16 = document.getElementsByClassName('close')[15];
  var span17 = document.getElementsByClassName('close')[16];
  var span18 = document.getElementsByClassName('close')[17];
  // When the user clicks the button, open the modal
  btn1.onclick = function () {
    modal1.style.display = 'block';
  };
  btn2.onclick = function () {
    modal2.style.display = 'block';
  };
  btn3.onclick = function () {
    modal3.style.display = 'block';
  };
  btn4.onclick = function () {
    modal4.style.display = 'block';
  };
  btn5.onclick = function () {
    modal5.style.display = 'block';
  };
  btn6.onclick = function () {
    modal6.style.display = 'block';
  };
  btn7.onclick = function () {
    modal7.style.display = 'block';
  };
  btn8.onclick = function () {
    modal8.style.display = 'block';
  };
  btn8.onclick = function () {
    modal8.style.display = 'block';
  };
  btn9.onclick = function () {
    modal9.style.display = 'block';
  };
  btn10.onclick = function () {
    modal10.style.display = 'block';
  };
  btn11.onclick = function () {
    modal11.style.display = 'block';
  };
  btn12.onclick = function () {
    modal12.style.display = 'block';
  };
  btn13.onclick = function () {
    modal13.style.display = 'block';
  };
  btn14.onclick = function () {
    modal14.style.display = 'block';
  };
  btn15.onclick = function () {
    modal15.style.display = 'block';
  };
  btn16.onclick = function () {
    modal16.style.display = 'block';
  };
  btn17.onclick = function () {
    modal17.style.display = 'block';
  };
  btn18.onclick = function () {
    modal18.style.display = 'block';
  };
  //   var modal = $(this).find('.myModal');
  //   console.log(modal);
  //   $('.myBtn').on('click', function () {
  //     $(modal).css({ display: 'block' });
  //     // $(this).find('#myModal').css({ display: 'block' });
  //   });
  // When the user clicks on <span> (x), close the modal
  span1.onclick = function () {
      modal1.style.display = 'none';
    };
    span2.onclick = function () {
        modal2.style.display = 'none';
  };
  span3.onclick = function () {
    modal3.style.display = 'none';
  };
  span4.onclick = function () {
    modal4.style.display = 'none';
  };
  span5.onclick = function () {
    modal5.style.display = 'none';
  };
  span6.onclick = function () {
      modal6.style.display = 'none';
  };
  span7.onclick = function () {
    modal7.style.display = 'none';
};
span8.onclick = function () {
    modal8.style.display = 'none';
  };
  span9.onclick = function () {
    modal9.style.display = 'none';
  };
  span10.onclick = function () {
    modal10.style.display = 'none';
};
  span11.onclick = function () {
    modal11.style.display = 'none';
  };
  span12.onclick = function () {
    modal12.style.display = 'none';
  };
  span13.onclick = function () {
    modal13.style.display = 'none';
};
  span14.onclick = function () {
    modal14.style.display = 'none';
  };
  span15.onclick = function () {
    modal15.style.display = 'none';
  };
  span16.onclick = function () {
    modal16.style.display = 'none';
  };
  span17.onclick = function () {
    modal17.style.display = 'none';
  };
  span18.onclick = function () {
    modal18.style.display = 'none';
  };

//   window.onclick = function (event) {
//     if (event.target == modal1) {
//       modal.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal2) {
//       modal2.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal3) {
//       modal3.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal4) {
//       modal4.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal5) {
//       modal5.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal6) {
//       modal6.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal7) {
//       modal7.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal8) {
//       modal8.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal9) {
//       modal9.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal10) {
//       modal10.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal11) {
//       modal11.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal12) {
//       modal12.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal13) {
//       modal13.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal14) {
//       modal14.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal15) {
//       modal15.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal16) {
//       modal16.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal17) {
//       modal17.style.display = 'none';
//     }
//   };
//   window.onclick = function (event) {
//     if (event.target == modal18) {
//       modal18.style.display = 'none';
//     }
//   };
}); // end document ready
