<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ＰＨＰ基礎</title>
</head>
<body>
<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];
$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);