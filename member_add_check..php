<!doctype html">
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
</head>
<body>
<?php
    $kaiinmei=$_POST['kaiinmei'];
    $ps=$_POST['ps'];
    $email=$_POST['email'];
    $juusho=$_POST['juusho'];
    
    $kaiinmei= htmlspecialchars($kaiinmei);
    $email= htmlspecialchars($email);
    $juusho= htmlspecialchars($juusho);

    if($kaiinmei=='') {
        print '会員名が入力されていません。<br>';
    } else {
        print 'ようこそ';
        print $kaiinmei;
        print '様'; print '<br>';
    }
    if($ps=='') {
        print 'パスワードが入力されていません。<br>';
    } else {
         print 'パスワード:';
        print $ps;
        print  '<br>';
    }
    if($email=='') {
        print 'メールアドレスが入力されていません。<br>';
    } else {
        print 'メールアドレス:';
        print $email;
        print '<br>';
    }
    
    if($juusho=='') {
        print '住所が入力されていません。<br>';
    } else {
        print '住所:';
        print $juusho;
        print '<br>';
    }
  
    if($kaiinmei==''||$ps==''||$email==''||$juusho=='') {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
    } else {
        print'<form method="post" action="member_add_done.php">';
        print'<input name="nickname" type="hidden" value="'.$kaiinmei.'">';
        print'<input name="ps" type="hidden" value="'.$email.'">';
        print'<input name="ps" type="hidden" value="'.$ps.'">';
        print'<input name="juusho" type="hidden" value="'.$juusho.'">';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="OK">';
        print'</form>';
    }    
?>
</body>
</html>
