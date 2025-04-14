<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Http\Repositories\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        $item = $this->findById($id);
        return $item ? $item->delete() : false;
    }

    public function update($id, array $data)
    {
        $item = $this->findById($id);
        if (!$item) return false;
        $item->update($data);
        return $item;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}