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

    public function scopeStore($quest, $id, $picture, $request)
    {
        $category = Category::find($id);
        $add = new Cloth;
        $add->picture = $picture;
        $add->name = $request->name;
        $add->description = $request->description;
        $add->price = $request->price;
        $add->s = $request->s;
        $add->m = $request->m;
        $add->l = $request->l;
        $add->xl = $request->xl;
        $add->xxl = $request->xxl;
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
        $up->s = $request->s;
        $up->m = $request->m;
        $up->l = $request->l;
        $up->xl = $request->xl;
        $up->xxl = $request->xxl;        
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
