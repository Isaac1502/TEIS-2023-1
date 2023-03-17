<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    /**
     * FLIGHT ATTRIBUTES
     * $this->attributes['id'] - int - contains the flight primary key (id)
     * $this->attributes['name'] - string - contains the flight name
     * $this->attributes['type'] - string - contains the flight type
     * $this->attributes['price'] - int - contains the flight price
     */
    protected $fillable = ['name', 'type', 'price'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice($price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType($type): void
    {
        $this->attributes['type'] = $type;
    }

}
