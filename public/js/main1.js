$( document ).ready(function() {

    tmpval = $('.inp1').val();

    if(tmpval == '') {
      $('.lab').addClass('asterisk_input');
    } else {
      $('lab').removeClass('asterisk_input');

    }
});
