<?php

namespace VaahCms\Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {



        $tags = ['v3', 'v4', 'v10', 'v11'];


        $posts = Post::withAllTags($tags)->get();

        echo "<pre>";
        print_r($posts);
        echo "</pre>";

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function show()
    {
        return view('blog::index');
    }




}
