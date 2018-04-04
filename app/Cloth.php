<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Category;

class Cloth extends Model
{
    protected $table = 'clothes';

    public function scopeListing($quest)
    {
        //
    }

    public function scopeStore($quest, $id, $picture, $name, $description, $price)
    {
        $category = Category::find($id);
        $add = new Cloth;
        $add->picture = $picture;
        $add->name = $name;
        $add->description = $description;
        $add->price = $price;
        $category->clothes()->save($add);
    }
    
    public function scopeEdit($quest, $id)
    {
        return Cloth::find($id);
    }        

    public function scopeUp($quest, $id, $picture, $title, $news)
    {
        $up = Cloth::find($id);
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
        $destroy = Cloth::find($id);
        if (!empty($destroy->picture)) {
            $path = array_slice(explode('/', $destroy->picture), 4);
            $path = implode('/', $path);
            Storage::disk('public')->delete($path);
         }
         $destroy->delete();         
    }

    public function scopeDelPicture($quest, $id)
    {
        $delPicture = Cloth::find($id);
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
