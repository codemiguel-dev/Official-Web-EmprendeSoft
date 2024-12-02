<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'category_id',
        'software_id',
        'device_id',
        'image',
        'price',
        'status',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    public function software()
    {
        return $this->belongsTo(Software::class, 'software_id','id');
    }
    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id','id');
    }
}
