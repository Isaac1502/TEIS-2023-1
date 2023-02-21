<?php

abstract class Base
{
    abstract public function getData(): string;

    public function printData(): void
    {
        echo $this->getData();
    }
}

class Concrete extends Base
{
    public function getData(): string
    {
        return bin2hex(random_bytes(16));
    }
}

$ins = new Concrete;
$ins->printData();


abstract class A
{
    private string $data = 'This is a secret';

    abstract public function viewData(): void;
    
    public function get(): string
    {
        return $this->data;
    }
}

class B extends A
{
    public function viewData(): void
    {
        echo $this->get();
    }
}

$using = new B();
$using->viewData();

?>