<?php

// Eksempler til Version2's artikel om nyhederne i PHP 8 https://www.version2.dk/node/1092036

echo htmlspecialchars("æøå", double_encode: false), "\n";

class PostsController
{
    #[Route("/api/posts/{id}", methods: ["GET"])]
    public function get($id) { /* ... */ }
}

class Point {
  public function __construct(
    public float $x = 0.0,
    public float $y = 0.0,
    public float $z = 0.0,
  ) {}
}

new Point();
$point = new Point(1.0, -2.1, 3.2);

echo $point->z;

echo "\n";

class Number {
  public function __construct(
    public int|float $number
  ) {}
}

new Number(1.1); 
new Number(-15);

echo gettype((new Number(1.1))->number), "\n";
echo gettype((new Number(-15))->number), "\n";

echo match (8.0) {
  '8.0' => "Oh no!",
  8.0 => "This is what I expected",
};

echo "\n";

$z1 = $point?->z;
echo $z1, "\n";

$point = null;
$z2 = $point?->z;
echo gettype($z2), "\n";

?>
