'use strict';
{  
  $(function(){

  var top = $('#scrollsign').offset().top; //初期値を取得

  $(window).scroll(function(){
  //スクロールレベル
  var value = $(this).scrollTop(); //スクロールの値を取得
  //スクロールレベル表示
  $('#scrollValue').text(value);
  
  if(value > 900){
    $('.num').fadeIn("slow");
  }else{
    $('.num').fadeOut("slow");
  }
  
  //scrollsignのパララックス
  $('#scrollsign').css('top' , top - value / 2);

  //scrollとscrollsignのフェードアウト スクロール後に再読み込みしても表示されなくなる
  {
    var signs = ['#scroll', '#scrollsign'];

    $(function(){
      $(signs).each(function(){
        if(value > 400){
          $(this).css('display', 'none');
        }else{
          $(this).css('display', 'block');
        }
      });
    });
  }

  //openingのバックグラウンド
  if(value > 400){
    $('#opening').css('background-color', 'rgba(0,0,0,0)');
  }else{
    $('#opening').css('background-color', 'rgba(0,0,0,1)');
  }
  
  //Back to the TOP の表示
  if(value > 900){
    $('#pageTop').fadeIn("slow");
  }else{
    $('#pageTop').fadeOut("slow");
  }
  //navの表示
  if(value > 900){
    $('.nav_container').fadeIn("slow")
    .css('display', 'flex')
    .css('justify-content','center');
  }else{
    $('.nav_container').fadeOut("slow");
  }
  //navのカラーチェンジ
  $(function(){
    if(value>=1800 && value<2450){
      $('#nav1').addClass('changeColor');
      $('#nav2').removeClass('changeColor');
      $('#nav3').removeClass('changeColor');
    }else if(value>=2450 && value<3090){
      $('#nav1').removeClass('changeColor');
      $('#nav2').addClass('changeColor');
      $('#nav3').removeClass('changeColor');
    }else if(value>=3090){
      $('#nav1').removeClass('changeColor');
      $('#nav2').removeClass('changeColor');
      $('#nav3').addClass('changeColor');
    }else{
      $('.nav').removeClass('changeColor');
    }
  });
});
}); 
}

