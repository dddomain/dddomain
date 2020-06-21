<div class="emailsourse" style="display:none;">
<?php

//日本語使用宣言
mb_language("ja");
mb_internal_encoding("UTF-8");

//ソースを全部読み込ませる
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/POP3.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/language/phpmailer.lang-ja.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//タイムゾーン
date_default_timezone_set('Asia/Tokyo');

//インスタンス(送信)
$mailer = new PHPMailer(true);
$mailer->IsSMTP();//SMTPを作成
$mailer->Host = 'smtp.gmail.com';//ホストアドレス
$mailer->CharSet = 'utf-8';
$mailer->SMTPAuth = true;//SMTP認証 
$mailer->Username = 'dddomain.site@gmail.com';
$mailer->Password = 'bskt3B05';
$mailer->SMTPSecure = 'tls';
$mailer->Port = 587;
$mailer->SMTPDebug = 2;

//メール本体

//メール本文
$message = "この度はご依頼くださりまして誠にありがとうございます。下記の内容でご依頼を承りました。\n";
$message .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n\n";
$message .= "氏名：" . $clean['name'] . "様" . "\n";
$message .= "メールアドレス：" . $clean['email'] . "\n\n";
$message .= "ご依頼内容：" . $clean['category'] . "\n\n";
$message .= "ご依頼詳細：" . nl2br($clean['detail']) . "\n\n";
$message .= "Dd";
// $attachfile = $clean['attachment_file']; //添付ファイルパス

$mailer->From     = 'dddomain.site@gmail.com'; //差出人の設定
$mailer->FromName = mb_convert_encoding("Dd","UTF-8","AUTO");
$mailer->Subject  = mb_convert_encoding("ご依頼ありがとうございます！","UTF-8","AUTO");
$mailer->Body     = mb_convert_encoding($message,"UTF-8","AUTO");
// $mailer->AddAttachment($attachfile); //添付ファイル
$mailer->AddAddress($clean['email']); // To宛先
$mailer->AddAddress('xaxa.recruit@icloud.com'); // To宛先 回収

//送信する
if($mailer->Send()){
}
else{
    echo "送信に失敗しました" . $mailer->ErrorInfo;
}

  // // メール送信（返信）
  // mb_send_mail( $clean['email'], $auto_reply_subject, $body, $header);

  // //件名（回収）
  // $auto_reply_subject = "ご依頼を受け付けました";
  // //本文（回収）
  // $admin_reply_text = "下記の内容で受け付けました。\n\n";
  // $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
  // $admin_reply_text .= "氏名：" . $clean['name'] . "\n";
  // $admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n\n";
  // $admin_reply_text .= "ご依頼内容：" . $clean['category'] . "\n\n";
  // $admin_reply_text .= "ご依頼詳細：" . $clean['detail'] . "\n\n";
  // $admin_reply_text .= "Dd";

	// テキストメッセージをセット
	// $body = "--__BOUNDARY__\n";
	// $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
	// $body .= $admin_reply_text . "\n";
	// $body .= "--__BOUNDARY__\n";

  // // メール送信（回収）
  // mb_send_mail( 'xaxa.reira2306@icloud.com', $admin_reply_subject, $body, $header);
  // }
  ?>
  </div>