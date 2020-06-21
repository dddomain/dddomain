<?php

//変数の初期化
$page_flag = 0;

$clean = array();
$error = array();

include('error.php');

//サニタイズ 値の無害化
if( !empty($_POST)){
    foreach( $_POST as $key => $value){
        $clean[$key]  = htmlspecialchars( $value, ENT_QUOTES);
        //サニタイズされたPOSTパラメータを配列cleanに格納
    }
}
if( !empty($clean['send']) ){
    $error = validation($clean);
    //エラー（空欄・異常値）がなければ確認ページへ進める
    //エラーがあればスクロール指定で0に止まる
    if( empty($error)){
        $page_flag = 1;
        }else{
            echo <<<EOM
            <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', function(e){
            location.hash="requesttitle";
            })
            </script>
            EOM;
            $page_flag = 0;
        }
}elseif( !empty($clean['btn_submit']) ){
    include('email.php');
    $page_flag = 2;
}elseif( !empty($clean['btn_back'])){
    // 表示内容は0と同じだが、「修正する」のあとなのでスクロールを指定する
    echo <<<EOM
    <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function(e){
    location.hash="requesttitle";
    })
    </script>
    EOM;
    $page_flag = 0;
}else{
    $page_flag = 0;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1, viewport-fit=cover" >
<title>dddomain</title>
<link rel="icon" href="img/Ddlogo.png" type="image/png">
<!-- スタイルシート -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/animation.css" rel="stylesheet">
<link href="css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<!--font -->
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<!-- オープニング〜WORKS -->
<?php if( $page_flag === 0 || $page_flag === 3):
include('main.php');
?>
<?php endif; ?>

<!-- REQUEST -->
<h1 id="requesttitle">REQUEST</h1>
<section class="marin" id="request">
<?php 
include('form.php');
?>
</section>
<footer>
<p>dddomain</p>
</footer>

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/scroll.js"></script>
<script src="js/form.js"></script>
<script src="js/gradation.js"></script>
<script src="js/lightbox.js"></script>
<script type="text/javascript">
{
//チェックボックスの複数選択不可設定
$(".checkbox").on("click", function(){
$('.checkbox').prop('checked', false);  //  全部のチェックを外す
$(this).prop('checked', true);  //  押したやつだけチェックつける
});

//flush
$(function(){
// 配列
var images = [
'url(img/gbimg1.jpg)',
'url(img/gbimg2.jpg)',
'url(img/gbimg3.jpg)',
'url(img/gbimg4.jpg)',
];

// flash関数を定義
function flush() {
    // 乱数
    var randImg = images[Math.floor(Math.random() * images.length)];

    $('#logo').attr('src', 'img/DdlogoReverse.png');

    $('.greeting')
    .css('background-image', randImg )
    .css('background-position', 'center')
    .css('background-size', '150%')
    .css('background-repeat', 'no-repeat');

    $('#greeting').addClass('reverseColor');
};

//スクロールレベルの取得
var top = $('#scrollsign').offset().top; //初期値を取得

$(window).scroll(function(){
var value = $(window).scrollTop(); //スクロールの値を取得

//デバイスの条件分岐

// //420px以上の場合
if (window.matchMedia( "(min-width: 420px)" ).matches) {
    //呼び出しのタイミング
    $('.greeting').hover(function(){
    flush();
    });
    $('#logo').mousemove(function(){
    flush();
    $(this).attr('src', 'img/DdlogoPink.png');
    $('#DdColor').css('color', '#fff');
    });
    $('#logo').mouseout(function(){
    $(this).attr('src', 'img/DdlogoReverse.png');
    $('#DdColor').css('color', 'palevioletred'); 
    });

    //mouseleave
    $('.greeting').mouseleave(function () {
    $('#logo').attr('src', 'img/Ddlogo.png');
    $(this).css('background-image', 'none');
    $('#greeting').removeClass('reverseColor'); 
    });
    
    //420px以下の場合
} else {
    if(value < 700 || value >= 1000 && value < 1200){
        flush();
    }
}
});
});
}
// モバイル用ハンバーガメニュー
(function(){
    const show = document.getElementById('show');
    const hide = document.getElementById('hide');

    show.addEventListener('click', function(){
        document.body.classList.add("m_menu-open");
    });
    hide.addEventListener('click', function(){
        document.body.className = '';
    });
    $('.m_nav, #cover').click(function(){
        hide.click();
    });
})();
</script>
</body>
</html>