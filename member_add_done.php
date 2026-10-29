<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>下記の内容で登録しました。</title>
    </head>
    <body>
        <?php
            $kaiinmei=$_POST['kaiinmei'];
            $ps=$_POST['ps'];
            $email=$_POST['email'];
            $juusho=$_POST['juusho'];
            $kaiinmei= htmlspecialchars($kaiinmei);
            $ps= htmlspecialchars($ps);
            $email= htmlspecialchars($email);
            $juusho= htmlspecialchars($juusho);
            
            print $kaiinmei;
            print ']<br>';
            print $ps;
            print ']<br>';
            print $email;
            print ']<br>';
            print $juusho;
            print ']<br>';
        ?>
    </body>
</html>