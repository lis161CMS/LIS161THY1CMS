<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;
use App\Revision;
use Session;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::all();
        return view('contents.index',compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = Carbon::now()->toDateTimeString();
        $id = \Auth::user()->id;
        $newContent = [
            'contentTitle' => $request->input('contentTitle'),
            'contentType_id' => 1,
            'user_id' => $id,
            'created_at' => $time,
            'updated_at' => $time
        ];

        ##$saveContent = Content::create($newContent);
        $contentid = DB::table('contents')->insertGetId($newContent);

        $newPost = [
            'content' => $request->input('content'),
            'revisionNo' => 1,
            'content_id' => $contentid,
            'user_id' => $id,
            'created_at' => $time,
            'updated_at' => $time
        ];

        $savePost = DB::table('revisions')->insertGetId($newPost);

        if($savePost):
            return redirect('/home');
        else:
            return redirect()->back()->withInput();
        endif;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
