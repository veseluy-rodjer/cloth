<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use App\Category;
use App\Http\Requests\StoreCloth;

class ClothController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkId')->except('index', 'store',  'update');
    }
    
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
        $this->authorize('before', Cloth::class);
        session(['oldUrl' => $_SERVER['HTTP_REFERER']]);
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
        $this->authorize('before', Cloth::class);
        $picture = null;
        if (!empty($request->picture)) {
            $picture = $request->picture->store('picture/cloth', 'public');
        }
        Cloth::store($id, $picture, $request);
        return redirect(session('oldUrl')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session(['oldUrl' => $_SERVER['HTTP_REFERER']]);
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
        $this->authorize('before', Cloth::class);
        if (session()->exists('oldUrlEdit') === false) {
            session(['oldUrlEdit' => $_SERVER['HTTP_REFERER']]);
        }
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
        $this->authorize('before', Cloth::class);
        $picture = null;
        if (!empty($request->picture)) {
            $picture = $request->picture->store('picture/cloth', 'public');
        }
        Cloth::up($id, $picture, $request);
        $oldUrlEdit = session('oldUrlEdit');
        session()->forget('oldUrlEdit');
        return redirect($oldUrlEdit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('before', Cloth::class);
        Cloth::destr($id);
        return back();
    }
    
    public function delPicture($id)
    {
        $this->authorize('before', Cloth::class);
        Cloth::delPicture($id);
        return back();
    }    
}
