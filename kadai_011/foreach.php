<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>繰り返し処理のforeach文を理解しよう</title>
</head>
<body>
   <p>
    <?php
    $vegetable_date = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // $vegetable_dataのキーと値を出力する
foreach ($vegetable_date as $key => $value) {
    echo $key . "：" . $value . "<br>";
}

?>
   </p> 
    
</body>
</html>