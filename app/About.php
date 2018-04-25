<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    protected $table = 'abouts';

    public function scopeListing($quest)
    {
        return Category::orderBy('id', 'desc')->get();
    }





}
