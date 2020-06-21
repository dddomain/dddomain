'use strict';
{

// 高さの取得
var c = $('#works');
// c.innerheight()で高さを取得

//work
//420px以上の場合

$(function(){
if (window.matchMedia( "(min-width: 420px)" ).matches) {
  $(function(){
    $('#work1').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css({
        backgroundImage: 'url(img/work1.png)',
        backgroundRepeat: 'no-repeat',
        backgroundSize: c.innerHeight(),
        backgroundPosition: '80%'
      });
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  $(function(){
    $('#work2').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css('background-image', 'url(img/work2.png)')
      .css('background-repeat', 'no-repeat')
      .css('background-size', c.innerHeight() )
      .css('background-position', '80%');
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  $(function(){
    $('#work3').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css('background-image', 'url(img/work3.png)')
      .css('background-repeat', 'no-repeat')
      .css('background-size', c.innerHeight() )
      .css('background-position', '80%');
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  $(function(){
    $('#work4').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css('background-image', 'url(img/work4.png)')
      .css('background-repeat', 'no-repeat')
      .css('background-size', c.innerHeight() )
      .css('background-position', '80%');
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
} else {  
  //420px以下の場合
  $(function(){
    $('#work1').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css({
        backgroundImage: 'url(img/work1.png)',
        backgroundRepeat: 'no-repeat',
        backgroundSize: c.innerHeight(),
        backgroundPosition: '95%'
      });
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  $(function(){
    $('#work2').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css('background-image', 'url(img/work2.png)')
      .css('background-repeat', 'no-repeat')
      .css('background-size', c.innerHeight() )
      .css('background-position', '95%');
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  $(function(){
    $('#work3').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css('background-image', 'url(img/work3.png)')
      .css('background-repeat', 'no-repeat')
      .css('background-size', c.innerHeight() )
      .css('background-position', '95%');
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  $(function(){
    $('#work4').hover(function (){
      $(this).addClass('hoverdGradation');
      $('#works').css('background-image', 'url(img/work4.png)')
      .css('background-repeat', 'no-repeat')
      .css('background-size', c.innerHeight() )
      .css('background-position', '95%');
    },  function(){
      $(this).removeClass('hoverdGradation');
      $('#works').css('background', 'none');
    });
  });
  }
// nav
{
  var navArray = ['#nav1', '#nav2', '#nav3'];
  
  $(navArray).each(function(){
    $(this).hover(function (){
      $(this).addClass('hoverdGradation').css('cursor', 'pointer');
      },  function(){
      $(this).removeClass('hoverdGradation').css('cursor', 'default');
    });
  });
}
});
}