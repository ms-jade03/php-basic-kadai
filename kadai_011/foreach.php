<!DCTYPE html>
<html lang="ja">
  <head>
    <mata charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <boby>
    <p>
      <?php
        $commodity_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach ($commodity_data as $key => $value){
          echo "{$key}:{$value}<br>";
        }
      ?>
    </p>
  </body>
</html>