<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      class Food {
        private $name;
        private $price;
       

        public function __construct(string $name, int $price) {
          $this -> name = $name;
          $this -> price = $price;
        }
        public function show_price(int $price){
          echo $this -> price = $price;
        }
      }
        
      class Animal {
        private $name;
        private $height;
        private $weight;
       

        public function __construct(string $name, int $height, int $weight) {
          $this -> name = $name;
          $this -> height = $height;
          $this -> weight = $weight;
        }
        public function show_height(int $height){
          echo $this -> height = $height;
        }
      }
      $food = new Food ('potato',250);
      $animal = new Animal ('dog',60,5000);

      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';
      $food ->show_price(250);
      echo '<br>';
      $animal ->show_height(60);
      ?>
      </P>
      
</body>

</html>
