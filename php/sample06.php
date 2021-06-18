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
//

//$i = 1;
//while($i <= 365){
  //print($i . "\n");  //処理
  //$i += 1;  //再代入 ($i = $i + 1)と一緒
  //$i++ インクリメント(increment=加算)
  //$i-- デクリメント(decrement=減算)
//}
//初期化処理
//while(繰り返す条件){
  //処理
  //更新処理 ※これがないと無限ループになってしまう
}

for($i=1; $i<=365; $i++){
  print($i . "\n");
}
//for(初期化処理; 繰り返す条件; 更新処理){
  //繰り返したい処理
}
//for構文であれば一箇所にまとめて書くことができる
//複雑な処理は、forではわかりにくくなってしまうので、慣れない内はwhile構文を優先的に使う
?>
</pre>
</main>
</body>    
</html>