<?php
namespace App\Repositories;

interface PostRepositoryInterface {
    public function create($data);
    public function list();
    public function update($data);
    public function delete($data);
}
