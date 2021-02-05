<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }

    public function index(Request $request) {
        # code...
        $posts = $this->postService->getAllPosts();
        if (gettype($posts) == "boolean") {
            return response()->json(['status'=>false]);
        } else {
            return response()->json(['status'=>true,'posts'=>$posts]);
        }

    }
}
