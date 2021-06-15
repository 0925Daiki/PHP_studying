<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
//頭に0をつけた形に書式を整える → sprintf
//数字の後ろの [d] = 数字という意味
//文字を出したい場合は、[s]=stringを使う
$date = sprintf('%04d年 % 2d月 % 2d日', 2018, 11, 2);
print($date);
//パラメーターの値の数は一緒でなければいけない
?>
</pre>
</main>
</body>    
</html>