<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContentResource;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * @param Content $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return new ContentResource($content);
    }
}
