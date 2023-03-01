<?php

namespace App\Models;

use Faker\Provider\ar_EG\Text;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the computer primary key (id)
     * $this->attributes['name'] - string - contains the computer name
     * $this->attributes['price'] - int - contains the computer price
     * $this->attributes['photo'] - string - contains the computer photo
     * $this->attributes['brand'] - string - contains the computer brand
     * $this->attributes['category'] - string - contains the computer category
     * $this->attributes['keywords'] - text - contains the computer keywords
     * $this->attributes['details'] - string - contains the computer details
     */
    protected $fillable = ['name', 'price', 'photo', 'brand',
        'category', 'keywords', 'details'];

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

    public function getPhoto(): string
    {
        return $this->attributes['photo'];
    }

    public function setPhoto($photo): void
    {
        $this->attributes['photo'] = $photo;
    }

    public function getBrand(): string
    {
        return $this->attributes['brand'];
    }

    public function setBrand($brand): void
    {
        $this->attributes['brand'] = $brand;
    }

    public function getCategory(): string
    {
        return $this->attributes['category'];
    }

    public function setCategory($category): void
    {
        $this->attributes['category'] = $category;
    }

    public function getKeywords(): string
    {
        return $this->attributes['keywords'];
    }

    public function setKeywords($keywords): void
    {
        $this->attributes['keywords'] = $keywords;
    }

    public function getDetails(): string
    {
        return $this->attributes['details'];
    }

    public function setDetails($details): void
    {
        $this->attributes['details'] = $details;
    }
}
