<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'status',
        'created_at',
        'updated_at'
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}