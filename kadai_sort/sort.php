<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPマニュアルを参照してソート関数を実装してみよう編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];


        // 独自のソート関数を宣言
        function sort_2way($array, $order = TRUE) {

            //昇順にソート
            if ($order) {
                echo "昇順にソートします。<br>";
                asort($array); 

            //降順にソート
            } else {
                echo "降順にソートします。<br>";
                arsort($array); 
            }
            
            // ソート後の配列を表示
            foreach ($array as $nums) {
            echo $nums . "<br>";
            }
        }

        //昇順でソート
        sort_2way($nums, TRUE);  

        //降順でソート
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>