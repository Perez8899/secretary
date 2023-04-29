<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function options()
    {
        //ONE to MANY cardinality
        return $this->hasMany('App\Models\Option', 'category_id', 'id');
    }
}