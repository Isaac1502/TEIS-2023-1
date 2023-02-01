<?php

    // passing functions as parameters to other functions
    $reducer = function(?int $carry, int $item): int {
        return $carry+$item;
    };

    function reduce(array $arr, callable $callback, ?int $initial = null): ?int {
        $acc = $initial;
        foreach($arr as $item){
            $acc = $callback($acc, $item);
        }
        return $acc;
    }

    $list = [1,2,3,4];
    $sum = reduce($list, $reducer);
    echo $sum;


?>