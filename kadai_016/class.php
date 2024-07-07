<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>php基礎</title>
    </head>
    <body>
        <p>
            <?php
            // クラスを定義
            class Food {
                // プロパテ定義
                public $name;
                public $price;

                // コンストラクタ
                public function __construct(string $name, int $price, ){
                    $this->name = $name;
                    $this->price = $price;
                }
            } 
            
            // クラス定義
            class Animal {
                // プロパティ
                public $name;
                public $height;
                public $weight;

                // コンストラクタ
                public function __construct(string $name, int $height, int $weight ){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }
            // インスタンス化
            $food = new Food("potato", 250, );
            $animal = new Animal("dog",60,5000);
            print_r($food);
            echo "<br>";
            print_r($animal);
            echo"<br>";

            echo $food->price . "<br>";
            echo $animal->height . "<br>";
            ?>
        </body>
        </html>