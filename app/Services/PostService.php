<?php
namespace App\Services;

use App\Repositories\PostRepository;
use DB;

class PostService {

    private $postRepository;
    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts() {
        # code...
        try {
            //code...
            return $this->postRepository->list();
        } catch (\Throwable $th) {
            //throw $th;
            return false;
        }
    }
}
