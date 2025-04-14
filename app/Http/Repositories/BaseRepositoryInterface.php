<?php

namespace App\Http\Repositories;

interface BaseRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function delete($id);
    public function update($id, array $data);
    public function create(array $data);
}