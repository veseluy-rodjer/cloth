<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    protected $table = 'abouts';

    public function scopeListing($quest)
    {
        return About::orderBy('id', 'desc')->get();
    }

    public function scopeStore($quest, $picture, $request)
    {
        $add = new About;
        $add->picture = $picture;
        $add->name = $request->name;
        $add->description = $request->description;
        $add->save();
    }

    public function scopeEdit($quest, $id)
    {
        return About::find($id);
    }

    public function scopeUp($quest, $id, $picture, $request)
    {
        $up = About::find($id);
        if (!empty($picture)) {
            if (!empty($up->picture)) {
                Storage::disk('public')->delete($up->picture);
            }
            $up->picture = $picture;
        }
        $up->name = $request->name;
        $up->description = $request->description;
        $up->save();        
    }

    public function scopeDestr($quest, $id)
    {
        $destroy = About::find($id);
        if (!empty($destroy->picture)) {
            Storage::disk('public')->delete($destroy->picture);
        }
        $destroy->delete();      
    }

    public function scopeDelPicture($quest, $id)
    {
        $delPicture = About::find($id);
        if (!empty($delPicture->picture)) {
            Storage::disk('public')->delete($delPicture->picture);
        $delPicture->picture = null;
        $delPicture->save();
        }
    }
}
