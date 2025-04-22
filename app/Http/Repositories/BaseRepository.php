<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Http\Interfaces\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * Initialize Repository.
     * 
     * @param Model $model The model instance.
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all records from the model.
     *
     * @return \Illuminate\Database\Eloquent\Collection 
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Find a record by ID.
     *
     * @param int $id 
     * @return Model|null
     */
    public function findById(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * Delete a record by ID.
     *
     * @param int $id The ID of the record.
     * @return bool 
     */
    public function delete(int $id)
    {
        $item = $this->findById($id);
        return $item ? $item->delete() : false;
    }

    /**
     * Update a record by ID.
     *
     * @param int $id The ID of the record.
     * @param array $data The data to update.
     * @return Model|bool Returns the updated record or false if not found.
     */
    public function update(int $id, array $data)
    {
        $item = $this->findById($id);
        if (!$item) return false;
        $item->update($data);
        return $item;
    }

    /**
     * Create a new record.
     *
     * @param array $data The data to create a record.
     * @return Model Returns the newly created record.
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}