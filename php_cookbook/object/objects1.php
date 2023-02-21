<?php

class pet
{
    public string $name;
    public string $species;
    public int $happiness = 0;

    public function __construct(string $name, string $species)
    {
        $this->name = $name;
        $this->species = $species;
    }

    public function pet()
    {
        $this->happiness += 1;
    }
}

$dog = new pet('Frido','golden retriever');
for($i = 0; $i<8; $i++)
{
    $dog->pet();
}
echo $dog->happiness;

?>
