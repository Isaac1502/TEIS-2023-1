<?php

$cars = [
    'fast' => ['ferrari', 'lamborghini'],
    'electric' => ['rivian', 'tesla'],
    'mechanic' => 'honda'
];

function nestedArray(array $arr): void {
    foreach($arr  as $key => $value){
        if(is_array($value)){
            echo "{$key} => [" . PHP_EOL;
            foreach($value as $item){
                echo "\t{$item}";
            }
            echo "]" . PHP_EOL;

        } else{
            echo "{$key}: {$value}" . PHP_EOL;
        }
    }
}

$flarr = range(1, 5, 0.5);
//print_r($flarr);

//nestedArray($cars);

//unset() --> delete from an array (retain the numeric index)
//array_splice() --> similar to unset() (doen't retain the index, shift the entire array)
//array_values() --> reindex the given array



$array = ['cas' => 'apple', 'b' => 'banana', 25 => 'cola', 'd' => 'donut'];
print_r(array_slice($array, 0, 3));

?>