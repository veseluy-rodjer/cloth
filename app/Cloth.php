<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Cloth extends Model
{
    protected $table = 'clothes';

    public function scopeListing($quest)
    {
        return MainModel::orderBy('id', 'desc')->get();
    }

    public function scopeStore($quest, $picture, $title, $news)
    {
        $add = new MainModel;
        $add->picture = $picture;
        $add->title = $title;
        $add->news = $news;
        $add->save();
    }
    
    public function scopeEdit($quest, $id)
    {
        return MainModel::find($id);
    }        

    public function scopeUp($quest, $id, $picture, $title, $news)
    {
        $up = MainModel::find($id);
        if (!empty($picture)) {
            if ($up->picture != null) {
                $path = array_slice(explode('/', $up->picture), 4);
                $path = implode('/', $path);
                Storage::disk('public')->delete($path);
            }
            $up->picture = $picture;
        }
        $up->title = $title;
        $up->news = $news;
        $up->save();        
    }    

    public function scopeDestr($quest, $id)
    {
        $destroy = MainModel::find($id);
        if (!empty($destroy->picture)) {
            $path = array_slice(explode('/', $destroy->picture), 4);
            $path = implode('/', $path);
            Storage::disk('public')->delete($path);
         }
         $destroy->delete();         
    }

    public function scopeDelPicture($quest, $id)
    {
        $delPicture = MainModel::find($id);
        if (!empty($delPicture->picture)) {
            $path = array_slice(explode('/', $delPicture->picture), 4);
            $path = implode('/', $path);
            Storage::disk('public')->delete($path);
        $delPicture->picture = null;
        $delPicture->save();
        }
    }
    
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }    
}
