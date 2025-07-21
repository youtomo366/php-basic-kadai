<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP クラスの課題</title>
</head>
<body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo "価格は {$this->price} 円です<br>";
            }
        }

        class Animal {
            public $name;
            public $height;
            public $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo "{$this->name} の身長は {$this->height} cmです<br>";
            }
        }

        // インスタンス作成＆表示
        $apple = new Food("りんご", 150);
        $tiger = new Animal("トラ", 120, 200);

        print_r($apple);
        echo "<br>";
        print_r($tiger);
        echo "<br><br>";

        // メソッド呼び出し
        $apple->show_price();
        $tiger->show_height();
        ?>
    </p>
</body>
</html>