'use strict';
{
  // その他詳細記述欄
  $(function(){
    $('.other').click(function(){
      $('#otherDetail').toggleClass('vanish');
    }), (function(){
      $('#otherDetail').addClass('vanish');
    })
  });
  // textarea
  $(function() {
    var $textarea = $('#textarea');
    var lineHeight = parseInt($textarea.css('lineHeight'));
    $textarea.on('input', function(e) {
      var lines = ($(this).val() + '\n').match(/\n/g).length;
      $(this).height(lineHeight * lines);
    });
  });
}