<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ploymorphism</title>
</head>
<body>
    <?php
        class Animal {
            public function sound() {
                return "Specific sound making by specific animals";
            }
        }

        class Lion extends Animal {
            public function sound() {
                return "Roar";
            }
        }
        class Dog extends Animal {
            public function sound() {
                return "Bark";
            }
        }
        class Cat extends Animal {
            public function sound() {
                return "Meoww";
            }
        }
        class Cow extends Animal {
            public function sound() {
                return "Hamba";
            }
        }

        $lion = new Lion();
        echo "Lion makes sound: " .  $lion->sound() . "<br>";
        
        $dog = new Dog();
        echo "Dog makes sound: "  .  $dog->sound() . "<br>";
        
        $cat = new Cat();
        echo "Cat makes sound: "  .  $cat->sound() . "<br>";
        
        $cow = new Cow();
        echo "Cow makes sound: "  .  $cow->sound() . "<br>";
    ?>
</body>
</html>