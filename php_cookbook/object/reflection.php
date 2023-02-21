<?php

class Foo
{
    private int $counter = 0;

    public function increment(): void
    {
        $this->counter += 1;
    }

    public function getCount(): int
    {
        return $this->counter;
    }
}

$inst = new Foo();
$inst->increment();
$inst->increment();

echo $inst->getCount();

$reflected = new ReflectionClass('Foo');
$reflected->getProperty('counter')->setValue($inst, 0);

echo $inst->getCount();

?>