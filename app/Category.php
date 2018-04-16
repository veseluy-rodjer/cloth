<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $table = 'categories';

    public function scopeListing($quest, $id)
    {
        if ($id == null) {
            return Category::get();
        }
        else {
            return Category::find([$id]);
        }
    }

    public function scopeStore($quest, $category)
    {
        $add = new Category;
        $add->category = $category;
        $add->save();
    }
    
    public function scopeEdit($quest, $id)
    {
        return Category::find($id);
    }        

    public function scopeUp($quest, $category, $id)
    {
        $up = Category::find($id);
        $up->category = $category;
        $up->save();        
    }    

    public function scopeDestr($quest, $id)
    {
        $destroy = Category::find($id)->clothes;
        foreach($destroy as $i) {
            if (!empty($i->picture)) {
                Storage::disk('public')->delete($i->picture);
            }
            $i->delete();
        }
        Category::destroy($id);
    }

    public function scopeDelPicture($quest, $id)
    {
        $delPicture = Category::find($id);
        if (!empty($delPicture->picture)) {
            $path = array_slice(explode('/', $delPicture->picture), 4);
            $path = implode('/', $path);
            Storage::disk('public')->delete($path);
        $delPicture->picture = null;
        $delPicture->save();
        }
    }
    
    public function clothes()
    {
        return $this->hasMany('App\Cloth');
    }
}
