<?php
    function capitalize_string($str){
        if(ord($str[0]) >= 97 && ord($str[0]) <= 122){
            $str[0] = chr(ord($str[0])-32);
        }
        return $str;
    }
    echo capitalize_string('john') . PHP_EOL;


    // using ? allows null values
    function say_hello(?string $msg): void
    {
        echo 'Hello, ';
        if($msg === null){
            echo 'World!' . PHP_EOL;
        } else {
            echo $msg . '!' . PHP_EOL;
        }
    }

    say_hello(null);


    // using | allows different arguments's types
    function add_numbers(int|string $a, int|string $b): int
    {
       return $a+$b; 
    }

    echo add_numbers('4', '5');

    // using ... allows set an unknown number of param
    function greatest(int ...$numbers): int
    {
        $great = 0;
        foreach($numbers as $num){
            if($num > $great){
                $great = $num;
            }
        }
        return $great;
    }

    echo greatest(3,4,5,6,2,1);


    // returning more than one value
    function describe(float ...$values): array
    {
        $min = min($values);
        $max = max($values);
        $mean = array_sum($values) / count($values);

        $variance = 0.0;
        foreach($values as $val){
            $variance += pow(($val-$mean), 2);
        }
        $std_dev = (float) sqrt($variance/count($values));
        return [$min, $max, $mean, $variance, $std_dev];
    }

    // $values = [1.0, 9.2, 7.3, 12.0];
    // list($min, $max, $mean, $variance, $std_dev) = describe(...$values);
    // echo $variance;

    // using a static variable to limit recursion depth
    function example(): void
    {
        static $count = 0;
        if($count >= 3){
            $count = 0;
            return ;
        }
        $count += 1;
        echo 'Running for loop number ' . $count . ', ';
        example();
    }

    example();

    // dynamic functions
    $greet = function($name){
        echo 'Hello' . $name;
    };

?>