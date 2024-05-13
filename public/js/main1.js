$( document ).ready(function() {
    console.log('anas111')
    tmpval = $('.inp1').val();
    console.log('111')
    if(tmpval == '') {
      $('.lab').addClass('asterisk_input');
    } else {
      $('lab').removeClass('asterisk_input');
    }
});
