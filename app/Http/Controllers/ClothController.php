<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use App\Category;
use App\Http\Requests\StoreCloth;

class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $date = ['title' => 'Добавление одежды', 'id' => $id];
        return view('cloth/create', $date);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCloth $request, $id)
    {
        $picture = null;
        if (!empty($request->picture)) {
            $picture = $request->picture->store('picture/cloth', 'public');
        }
        Cloth::store($id, $picture, $request->name, $request->description, $request->price);
        return redirect()->route('index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Cloth::edit($id);
        $date = ['title' => 'Просмотр продукта', 'item' => $item];
        return view('single', $date);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Cloth::edit($id);
        $date = ['title' => 'Переименование продукта', 'edit' => $edit];
        return view('cloth/edit', $date);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCloth $request, $id)
    {
        $picture = null;
        if (!empty($request->picture)) {
            $picture = $request->picture->store('picture/cloth', 'public');
        }
        Cloth::up($id, $picture, $request);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cloth::destr($id);
        return redirect()->route('index');
    }
    
    public function delPicture($id)
    {
        Cloth::delPicture($id);
        return back();
    }    
}
