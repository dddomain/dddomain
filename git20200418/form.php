<?php if( $page_flag === 1): ?>
<nav>
  <img id="navLogo" src="img/DdlogoReverse.png" style="position:fixed; margin-top:5px; width: 40px; height: auto; left: 20px;">
</nav>
<!-- 確認ページのHTML -->
<form action="" method="post">
  <!-- 表示用 -->
  <ul>
    <li>
      <label>お名前</label>
      <p><?php echo $clean['name']; ?></p>
    </li>
    <li>
      <label>メールアドレス</label>
      <p><?php echo $clean['email']; ?></p>
    </li>
    <li>
      <label>ご依頼内容</label>
      <p><?php echo $clean['category']; ?></p>
    </li>
    <li>
    <p><?php echo $clean['detail']; ?></p>
    </li>
  </ul>
  <!-- 回収用 -->
  <input type="hidden" name="name" value="<?php echo $clean['name']; ?>">
  <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
  <input type="hidden" name="category" value="<?php echo $clean['category']; ?>">
  <input type="hidden" name="detail" value="<?php echo $clean['detail']; ?>">

  <!-- 送信ボタン -->
  <input type="submit" class="btn prv_dbl" name="btn_back" value="修正する"  style="background: #777">
  <input type="hidden" name="page_flag" value="1">
  <input type="submit" class="btn prv_dbl" name="btn_submit" value="送信">

  </form>

  <?php elseif( $page_flag === 2): ?>
  <!-- 完了ページのHTML -->
  <div style="display:flex; flex-direction: column; justify-content:center;">
  <p style="margin:30% auto;">送信が完了しました。</p>
  <a href="index.php">
  <input type="submit" class="btn prv_dbl" name="back" value="戻る">
  </a>
  <div>
  <?php elseif( $page_flag === 0 ): ?>
  <!-- 入力フォームのHTML -->
  <form action="" method="post"  enctype="multiport/form-data">
  <!-- 入力エラーの表示 -->
  <?php if( !empty($error)): ?>
  <ul class="error_list">
    <?php foreach( $error as $value ): ?>
    <li><?php echo $value; ?></li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
  <!-- 入力フォームのHTML -->
  <ul>
    <li>
      <input type="text" class="formtext" name="name" required placeholder="お名前" value="<?php if( !empty($clean['name']) ){ echo $clean['name']; } ?>"></li>
    <li>
      <input type="text" class="formtext" name="email" required placeholder="メールアドレス" value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>">
    </li>
    <!-- チェックボックス -->
    <li id="checkbox">
      <label><input type="checkbox" class="checkbox" name="category" value="ロゴ" <?php if( !empty($clean['category']) && $clean['category'] === "ロゴ" ){ echo 'checked'; } ?>>ロゴ</label>
      <label><input type="checkbox" class="checkbox" name="category" value="チラシ" <?php if( !empty($clean['category']) && $clean['category'] === "チラシ" ){ echo 'checked'; } ?>>チラシ</label>
      <label><input type="checkbox" class="checkbox" name="category" value="ポスター" <?php if( !empty($clean['category']) && $clean['category'] === "ポスター" ){ echo 'checked'; } ?>>ポスター</label>
      <label><input type="checkbox" class="checkbox" name="category" value="商品ラベル" <?php if( !empty($clean['category']) && $clean['category'] === "商品ラベル" ){ echo 'checked'; } ?>>商品ラベル</label>
      <label><input type="checkbox" class="checkbox" name="category" value="リーフレット" <?php if( !empty($clean['category']) && $clean['category'] === "リーフレット" ){ echo 'checked'; } ?>>リーフレット</label>
      <label><input type="checkbox" class="checkbox" name="category" value="ウェブサイト" <?php if( !empty($clean['category']) && $clean['category'] === "ウェブサイト" ){ echo 'checked'; } ?>>ウェブサイト</label>
      <label><input type="checkbox" class="checkbox other" name="category" value="その他" <?php if( !empty($clean['category']) && $clean['category'] === "その他" ){ echo 'checked'; } ?>>その他</label>
      <br>
    </li>
    <!-- テキストエリア -->
    <textarea id="textarea" placeholder="依頼詳細" name="detail"><?php if( !empty($clean['detail']) ){ echo $clean['detail']; } ?></textarea>
    <!-- textarea.jsで自動改行を制御 -->
    <!-- cssでresize:noneを指定 -->
  </ul>
  <!-- 送信ボタン -->
  <input type="submit" class="btn" id="submit" name="send" value="入力内容を確認する">
</form>
<?php endif; ?>


