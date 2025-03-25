<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way ($array, $order) {

          // もし引数$order(ソート方向)がtrueなら昇順にし、それ以外なら降順にする
          if ($order === true) {
            // sort(昇順の関数)$arrayソート対象の配列
            sort($array);
            echo '昇順にソートします。<br>';
          } else {
            // rsort(降順の関数)
            rsort($array);
            echo '降順にソートします。<br>';
          }
          
          foreach ($array as $num) {
            echo $num . '<br>';
          } 
        }
        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, true);
        echo "<br>";

        sort_2way($nums, false);
        echo "<br>";
        ?>
    </p>
</body>

</html>