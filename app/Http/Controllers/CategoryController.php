<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkId')->except('index', 'create', 'store', 'update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=null;
        $listing = Category::listing($id);
        $date = ['title' => 'Главная', 'listing' => $listing];
        return view('main', $date);
    }
    
    public function indexCategory($id)
    {
        $listing = Category::listing($id);
        $date = ['title' => 'Главная', 'listing' => $listing];
        return view('main', $date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('before', Category::class);
        session(['oldUrl' => $_SERVER['HTTP_REFERER']]);
        $date = ['title' => 'Добавление категории'];
        return view('category/create', $date);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $this->authorize('before', Category::class);
        Category::store($request->category);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('before', Category::class);
        session(['oldUrl' => $_SERVER['HTTP_REFERER']]);
        $edit = Category::edit($id);
        $date = ['title' => 'Переименование категории', 'edit' => $edit];
        return view('category/edit', $date);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('before', Category::class);
        Category::up($request->category, $id);
        return redirect(session('oldUrl'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('before', Category::class);
        Category::destr($id);
        return back();
    }
}
