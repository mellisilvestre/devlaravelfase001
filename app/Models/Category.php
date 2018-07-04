<?php
declare(strict_types=1);  //  php 7 em diante pode retornar uma array de uma função direto no return
                          // aqui está sendo utilizado na function sluggable
namespace CodeShopping\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;
    protected $fillable = ['name', 'active'];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
                ]
            ];
    }    
    
}
