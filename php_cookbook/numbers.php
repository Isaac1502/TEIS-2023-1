<?php
    $number = round(15.31415, 3);
    echo $number;
    //random_int()
    //mt_srand() -- mt_rand()
    //ranodom_bytes()
    //arsort()

    //base_covert() -> function to convert from a base to another.
    $decimal = '240';
    $hex = base_convert($decimal, 10, 16);
    echo $hex;
?>