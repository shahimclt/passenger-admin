<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'category_id',
        'url',
        'width',
        'height',
        'title',
        'description',
        'date',
        'location'
    ];

    public function room() {
        return $this->belongsTo('App\Models\Category');
    }
}
