<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function scopeListing($quest)
    {
        return $quest->get();
    }

    public function scopeStore($quest, $category)
    {
        $add = new Category;
        $add->category = $category;
        $add->save();
    }
    
    public function scopeEdit($quest, $id)
    {
        return $quest->find($id);
    }        

    public function scopeUp($quest, $category, $id)
    {
        $up = $quest->find($id);
        $up->category = $category;
        $up->save();        
    }    

    public function scopeDestr($quest, $id)
    {
        $destroy = $quest->find($id);
        if (!empty($destroy->picture)) {
            $path = array_slice(explode('/', $destroy->picture), 4);
            $path = implode('/', $path);
            Storage::disk('public')->delete($path);
         }
         $destroy->delete();         
    }

    public function scopeDelPicture($quest, $id)
    {
        $delPicture = $quest->find($id);
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
