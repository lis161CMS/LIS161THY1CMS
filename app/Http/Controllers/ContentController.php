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
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentController extends Controller
{
    use SoftDeletes;
    /*
     ** Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$revisions=Revision::where('content_id', 13)->latest()->first();
        $revisions = Revision::orderBy('revisionNo','desc')->get();
        //$revisions = DB::table('revisions')->groupBy('content_id')
        return view('contents.index',compact('revisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = Carbon::now(8)->toDateTimeString();
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
        $content= Revision::findOrFail($id);
        return view('contents.edit', compact('content'));
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
        $time = Carbon::now(8)->toDateTimeString();
        $uid = \Auth::user()->id;
        $data = [
            'contentTitle'=> $request->input('contentTitle'),
            'updated_at' => $time,
            'user_id' => $uid
        ];
        $contentid = DB::table('revisions')->where('id',$id)->value('content_id');
        $findRecord = Content::findOrFail ($contentid);
        $update = $findRecord->update($data);
        $newrev = DB::table('revisions')->where('content_id',$contentid)->latest()->value('revisionNo');
        $newPost = [
            'content' => $request->input('content'),
            'revisionNo' => ++$newrev,
            'content_id' => $contentid,
            'user_id' => $uid,
            'created_at' => $time,
            'updated_at' => $time
        ];
        $savePost = DB::table('revisions')->insertGetId($newPost);
        return redirect(route('contents.index'));
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
