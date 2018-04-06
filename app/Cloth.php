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

    public function scopeUp($quest, $id, $picture, $request)
    {
        $up = Cloth::find($id);
        if (!empty($picture)) {
            if (!empty($up->picture)) {
                Storage::disk('public')->delete($up->picture);
            }
            $up->picture = $picture;
        }
        $up->name = $request->name;
        $up->description = $request->description;
        $up->price = $request->price;        
        $up->save();        
    }    

    public function scopeDestr($quest, $id)
    {
        $destroy = Cloth::find($id);
        if (!empty($destroy->picture)) {
            Storage::disk('public')->delete($destroy->picture);
        }
        $destroy->delete();      
    }

    public function scopeDelPicture($quest, $id)
    {
        $delPicture = Cloth::find($id);
        if (!empty($delPicture->picture)) {
            Storage::disk('public')->delete($delPicture->picture);
        $delPicture->picture = null;
        $delPicture->save();
        }
    }
    
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }    
}
