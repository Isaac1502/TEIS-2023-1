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
//array_unshift() --> preprend to the array

//str_split() --> string to array
//join() --> array to string




$array = ['cas' => 'apple', 'b' => 'banana', 25 => 'cola', 'd' => 'donut'];
print_r(array_slice($array, 0, 3));

//sort($nums, SORT_NUMERIC); rsort()
//asort() --> retain the actual keys arsort()
//usort() --> custom sorting

$bonds = [
    ['first' => 'Sean',    'last' => 'Connery'],
    ['first' => 'Daniel',  'last' => 'Craig'],
];

function sorter(array $a, array $b) {
    return [$a['last'], $a['first']] <=> [$b['last'], $b['first']];
}

usort($bonds, 'sorter');


//applying certain function to each element of the array
$values = range(2, 5);

array_walk($values, function(&$value, $key) {
    $value *= $value;
});

//array_reduce() using key-values
function array_reduce_assoc(array $arr, callable $callback, mixed $init = null): mixed {
    
    return array_reduce(
        array_keys($arr),
        function($carry, $item) use ($arr, $callback){
            return $callback($carry, $arr[$item], $item);
        },
        $init
    );
}

$nums = [1 => 10, 2 => 10, 3 => 5];

$mult = array_reduce_assoc(
    $nums,
    function($carry, $item, $key){
        return $carry + ($item * $key);
    },
    0
);

print_r($mult);

?>