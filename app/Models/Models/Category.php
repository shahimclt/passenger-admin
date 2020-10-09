<?php

namespace App\Models\Models;

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

    public function rooms() {
        return $this->hasMany('App\Models\Photo');
    }
}
