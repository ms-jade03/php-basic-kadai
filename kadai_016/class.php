<!DCTYPE html>
<html lang="ja">
  <head>
    <mata charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <boby>
    <p>
      <?php
        class Food {
          private $name;
          private $price;

          public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
          }

          public function show_price(){
            return $this->price;
          }
        }

        class Animal{
          private $name;
          private $height;
          private $weight;

          public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          public function show_height(){
            return $this->height;
          }
        }

        $food = new Food('potato', 250);

        $animal = new Animal('dog', 60, 5000);

        print_r($food);

        echo '<br>';

        print_r($animal);

        echo '<br>';

        echo $food->show_price();

        echo '<br>';

        echo $animal->show_height();
      ?>
    </p>
  </body>
</html>