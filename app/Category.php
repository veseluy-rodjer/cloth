<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function scopeListing($quest)
    {
        return Category::orderBy('id', 'desc')->get();
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

    public function scopeUp($quest, $id, $picture, $title, $news)
    {
        $up = Category::find($id);
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
        $destroy = Category::find($id);
        if (!empty($destroy->picture)) {
            $path = array_slice(explode('/', $destroy->picture), 4);
            $path = implode('/', $path);
            Storage::disk('public')->delete($path);
         }
         $destroy->delete();         
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
}
