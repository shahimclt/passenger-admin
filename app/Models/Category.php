<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function photos() {
        return $this->hasMany('App\Models\Photo');
    }
}
