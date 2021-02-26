<?php
class Point{

    public int $x;
    public int $y;

    public function __construct(int $x, int $y){

        $this->x = $x;
        $this->y = $y;

    }

    public static function swap_points(object $p1,object $p2): void{

        $x = $p1->x;
        $y = $p1->y;

        $p1->x = $p2->x;
        $p1->y = $p2->y;
        $p2->x = $x;
        $p2->y = $y;



    }
}
$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
Point::swap_points($p1, $p2);
echo "(" . $p1->x . ", " . $p1->y . ")" . PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")" . PHP_EOL;