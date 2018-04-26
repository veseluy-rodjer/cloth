<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $table = 'pays';

    public function scopeStore($quest, $name, $surname, $tel, $description)
    {
        $add = new Pay;
        $add->name = $name;
        $add->surname = $surname;
        $add->tel = $tel;
        $add->description = $description;
        $add->sum = session('total');
        $add->save();
        return $add->id;
    }
}
