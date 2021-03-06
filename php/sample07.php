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
//print(time() + 60 * 60 * 24);
//time()+60*60*24で「次の日の日付」が出るようになる

//string to timestampを使用する
for($i = 1; $i <= 365; $i++){
  $date = strtotime('+' . $i . 'day');
  print(date('n/j(D)', $date));
  print("\n");
}
//閉じカッコと同じ使用の方法(endforを使う),endforの方がわかりやすい
//for($i = 1; $i <= 365; $i++): //ダブルコロンをつける
  //$date = strtotime('+' . $i . 'day');
  //print(date('n/j(D)', $date));
  //print("\n");
//endfor;

?>
</pre>
</main>
</body>    
</html>