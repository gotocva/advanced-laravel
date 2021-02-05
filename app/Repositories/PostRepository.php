<?php
namespace App\Repositories;

use App\Repositories\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface {

    private $post;

    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function create($data) {
        # code...
        return $this->post->create($data);
    }

    public function list() {
        # code...
        return $this->post->get();
    }

    public function update($data) {
        # code...
        return $this->post->where('id',$data['id'])->update($data);
    }

    public function delete($data) {
        # code...
        return $this->post->where('id', $data['id'])->delete();
    }
}
