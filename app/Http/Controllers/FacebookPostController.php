<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ArticlePublished;
use App\Models\Blog;

class FacebookPostController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...

        $blog = Blog::create([
            'title' => "Hello",
            'content' => 'this is my post'
        ]);

        $blog->notify(new ArticlePublished);
    }
}
