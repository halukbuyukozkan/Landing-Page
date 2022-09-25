<?php

namespace App\Models;

use App\Enum\TypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['name','type'];
    
    protected $casts = [
        'type' => TypeEnum::class
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
