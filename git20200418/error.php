<!-- エラー条件・詳細 -->
<?php
function validation($data){

// エラー時に表示するメッセージを格納する配列の内容を決める
$error = array();

//氏名のバリデーション
if( empty($data['name'])){
  $error[]= "「氏名」は必ず入力してください。";
}else if(20 < mb_strlen($data['name'])){
  $error[] = "「氏名」は20文字以内で入力してください。";
}
//メールアドレスのバリデーション
if( empty($data['email'])){
  $error[]= "「メールアドレス」は必ず入力してください。";
} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
  $error[] = "「メールアドレス」は正しい形式で入力してください。";
  }
  //カテゴリーのバリデーション
  if( empty($data['category'])){
    $error[] = "依頼内容を選択してください。";
  } 
  // elseif((int)$data['category'] !==1){
  // $error[] = "依頼内容を選択してください。";
  // }
//詳細のバリデーション
if( empty($data['detail'])){
  $error[]= "「依頼詳細」は必ず入力してください。";
}

return $error;
}
?>