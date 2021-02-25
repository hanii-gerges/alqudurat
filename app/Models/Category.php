<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;



class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    protected $fillable = [
        'name',
        'image',
        'description'
    ];

    function Products()
    {
        return $this->hasMany(Product::class);
    }


    function Types()
    {
        return $this->hasMany(Type::class);
    }
}
