<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suboption extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'option_id'
    ];

    public function category()
    {
        //ONE to ONE cardinality
        return $this->hasOne('App\Models\Option', 'id', 'option_id');
    }
}