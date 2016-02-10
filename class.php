<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25.01.2016
 * Time: 19:12
 */
class Power
{
    public function powTo($number, $step)
    {
        $result = 1;
        for($x = 0; $x < $step; $x++){
            $result = $result*$number;
        }
        return $result;
    }
}
$a = new Power();

echo $a->powTo(5, 5);
echo '<br>';
echo $a->powTo(6, 6);
echo '<br>';
echo $a->powTo(7, 7);
echo '<br>';

//var_dump($_SERVER);
echo $_SERVER["REQUEST_URI"];