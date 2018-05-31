<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenttype;

class ContenttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $contenttypes = Contenttype::all();
        return view('welcome', compact('contenttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contenttype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contenttypes = new Contenttype;
        $contenttypes->title = request('contentType');
        $contenttypes->author = request('contentTypeDesc');
        $contenttypes->save();
        return redirect('/');
    }
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
        $contentypes = Contenttype::find($id);
        
        
        return view('contenttypes.edit', compact('contenttypes'));
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
          $contenttypes = Contenttype::find($id);
        $contenttypes->title = request('contentType');
        $contenttypes->author = request('contentDesc');
        $book->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contenttypes = Contenttype::find($id);
        $contenttypes->delete();
        
        return redirect('/');
    }
}
