<?php
final class FizzBuzz
{
    static function printf($n)
    {
        for($x=1;$x<=$n;$x++){
            if($x%3==0 && $x%5!=0){
                echo 'fizz';
            }else if($x%5==0 && $x%3!=0){
                echo 'buzz';
            }else if($x%3==0 && $x%5==0){
                echo 'fizzbuzz';
            }else{
                echo $x;
            }

        }
    }
}
FizzBuzz::printf(5);
?>