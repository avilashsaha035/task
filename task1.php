<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritence</title>
</head>
<body>
    <?php
        abstract class shape { 
            abstract public function calculateArea();
        }
        
        class Circle extends shape {
            protected $radius;
            public function __construct($radius) {
                $this->radius = $radius;
            }
            public function calculateArea() {
                return pi() * pow($this->radius, 2); 
            }
        }

        class Rectangle extends shape {
            protected $height, $width;
            public function __construct($height, $width) {
                $this->height = $height;
                $this->width = $width;
            }
            public function calculateArea() {
                return $this->height * $this->width; 
            }
        }

        class Triangle extends shape {
            protected $base, $height;
            public function __construct($base, $height) {
                $this->base = $base;
                $this->height = $height;
            }
            public function calculateArea() {
                return 0.5 * $this->base * $this->height; 
            }
        }
        
        $circle = new Circle(7);
        echo "Circle Area: " . $circle->calculateArea() . "<br>";

        $rectangle = new Rectangle(7,5);
        echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";

        $triangle = new Triangle(5,6);
        echo "Triangle Area: " . $triangle->calculateArea() . "<br>";
    ?>
</body>
</html>