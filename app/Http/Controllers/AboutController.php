<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Http\Requests\StoreAbout;

class AboutController extends Controller
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
        $listing = About::listing();
        $date = ['title' => 'О нас', 'listing' => $listing];
        return view('about', $date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('before', About::class);
        $date = ['title' => 'О нас'];
        return view('about/create', $date);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbout $request)
    {
        $this->authorize('before', About::class);
        $picture = null;
        if (!empty($request->picture)) {
            $picture = $request->picture->store('picture/about', 'public');
        }
        About::store($picture, $request);
        return redirect()->route('about.index');
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
        $this->authorize('before', About::class);
        $edit = About::edit($id);
        $date = ['title' => 'О нас', 'edit' => $edit];
        return view('about/edit', $date);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAbout $request, $id)
    {
        $this->authorize('before', About::class);
        $picture = null;
        if (!empty($request->picture)) {
            $picture = $request->picture->store('picture/about', 'public');
        }
        About::up($id, $picture, $request);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('before', About::class);
        About::destr($id);
        return back();
    }

    public function delPicture($id)
    {
        $this->authorize('before', About::class);
        About::delPicture($id);
        return back();
    }
}
