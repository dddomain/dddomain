<div id="opening">
  <!-- スクロールレベル -->
  <p class="num" >Level <span id="scrollValue" >0</span></p>
  <!-- スクロールサイン -->
  <div id="scrollsign"></div>
  <p id="scroll">Scroll</p>
</div>
<!-- モバイルでのnav表示時に出す透過カバー -->
<div id="cover"></div>
<!-- nav PC用-->
<nav class="nav_container">
  <a href="#greeting_div"><img id="navLogo" src="img/DdlogoReverse.png" style="position:fixed; margin-top:5px; width: 40px; height: auto; left: 20px;"></a>
  <a class="nav" id="nav1" href="#introduction">
  INTRODUCTION</a>
  <a class="nav" id="nav2" href="#work_h1">
  WORKS</a>
  <a class="nav" id="nav3" href="#requesttitle">
  REQUEST</a>
  <!-- nav モバイル用 表示アイコン-->
  <i class="fa fa-bars" id="show"></i>
</nav>
<!-- nav モバイル用-->
<div id="m_menu">
  <i class="fa fa-times" id="hide"></i>
  <nav id="m_nav_container">
    <a class="m_nav" id="m_nav1" href="#introduction">
    INTRODUCTION</a>
    <a class="m_nav" id="m_nav2" href="#work_h1">
    WORKS</a>
    <a class="m_nav" id="m_nav3" href="#requesttitle">
    REQUEST</a>
  </nav>
</div>
<main id="maintop">
  <!-- あいさつ -->
  <div class="greeting" id="greeting_div">
    <img id="logo" src="img/Ddlogo.png">
    <p id="greeting">Thank you for your visist!<br>
    Here is <span id="DdColor" style="color: palevioletred;">Dd</span>'s portfolio site.
    </p>
  </div>
  <!-- 自己紹介 -->
  <section class="introduction" id="introduction">
    <!-- プロフィール画像 -->
    <img src="img/プロフィール.png" alt="アイコン" style="width: 100px; height: 100px; border-radius: 50%; margin: 200px calc(50% - 50px) 0">
    <!-- ロゴ -->
    <img src="img/Ddlogo.png" style="width: 70px;
    height: auto;
    margin-left: calc(50% - 35px);">
    <!-- プロフィール -->
    <p class="profile">1998 Tokushima(JPN)<br>
    Ehime Univ.<br>
    <span id="skills">
      HTML・CSS/Javascript(jQuery)/
      <span><!-- モバイルではここで改行 -->Illustrator/Photoshop/XD...</span>
    </span></p>
    <!-- SNSリンク -->
    <div style="display:flex; justify-content: center; ">
      <a href="https://twitter.com/d_chtw"><img class="SNSLink" src="img/Twitter_Social_Icon_Rounded_Square_Color.png" alt="twitter"></a>
      <a href="https://www.instagram.com/daisuke_design_domain/"><img class="SNSLink" src="img/instaIcon.png" alt="instagram"></a>
    </div>
  </section>
  <!-- WORKS -->
  <h1 id="work_h1">WORKS</h1>
  <section class="marin" id="works">
    <ul id="worklist">
    <li><a href="img/w_11.png" data-lightbox="image">
    <img class="workimg" src="img/work_1.png"></a>
    <a href="img/w_12.png" data-lightbox="image"></a>
    <a href="img/w_13.png" data-lightbox="image"></a>
    </li>
    <li>
    <a href="img/w_21.png" data-lightbox="image">
    <img class="workimg" src="img/work_2.png"></a>
    </li>
    <li>
    <a href="img/w_31.png" data-lightbox="image">
    <img class="workimg" src="img/work_3.png"></a>
    </li>
    <li>
    <a href="img/w_41.png" data-lightbox="image">
    <img class="workimg" src="img/work_4.png"></a>
    </li>
    <li>
    <a href="img/w_51.png" data-lightbox="image">
    <img class="workimg" src="img/work_5.png"></a>
    <a href="img/w_52.png" data-lightbox="image"></a>
    <a href="img/w_53.png" data-lightbox="image"></a>
    </li>
    </ul>
  </section>
  <!-- REQUEST -->
</main>
