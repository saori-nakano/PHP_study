<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>対応表を作るー連想配列</h2>
<pre>
<select>
<?php
$platforms = ['win'=>'WIndows', 'mac'=>'Machintosh', 'iphone'=>'iPhone', 'ipad'=>'iPad', 'android'=>'Android'];
foreach($platforms as $platformId => $platformValue) :
?>
<option value="<?php echo $platformId; ?>"><?php echo $platformValue; ?></option>
<?php
endforeach;
?>
</select>
</pre>
</main>
</body>    
</html>