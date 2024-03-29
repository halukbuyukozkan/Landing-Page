<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title','titletr','slug','description','descriptiontr','order'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

}
