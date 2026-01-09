<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>
<body>
  <?php
$vege = [
  '名前' => '玉ねぎ',
  '値段' => 200,
  '産地' => '北海道'
];
?>
  <pre>
<?php
foreach ($vege as $key => $value) {
  echo $key . ' : ' . $value . PHP_EOL;
}
?>
  </pre>
</body>
</html>
