<?php

class Art
{
    public function hello(): string
    {
        return 'hello';
    }
}

class Bic extends Art
{
    public function world(): string
    {
        return 'world';
    }
}

$greet = new Bic();
printf("%s %s", $greet->hello(), $greet->world());

?>