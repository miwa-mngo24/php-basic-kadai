<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
        <?php

        // クラスを定義する
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

            //コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
            
            //インスタンス化する
            $food = new Food('potato', 250);

            //インスタンス$foodの各プロパティを出力する
            print_r($food);
            ?>
    </p>

    <p>
        <?php

        // クラスを定義する
        class Animal {
            //プロパティを定義する
            private $name;
            private $height;
            private $weight;

            //コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
            
            //インスタンス化する
            $animal = new Animal('dog', 60 , 5000);

            //インスタンス$foodの各プロパティを出力する
            print_r($animal);
            ?>
    </p>
    
</body>
</html>