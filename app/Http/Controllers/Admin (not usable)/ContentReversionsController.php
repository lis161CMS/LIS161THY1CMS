<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Revision;
use App\Content;

class ContentReversionsController extends Controller
{
    public function store(Revision $revision) {
        $content = Content::find($revision->content_id);
        $content->update($revision->before);
        $revision->delete();

        return redirect("/admin/content/{$content->id}/edit");
    }

}