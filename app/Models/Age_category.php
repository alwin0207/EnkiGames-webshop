<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
