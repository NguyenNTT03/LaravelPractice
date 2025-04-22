<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Http\Interfaces\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * Khởi tạo Repository
     * 
     * @param Model $model
    */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

      /**
     * Lấy tất cả bản ghi từ Model.
     *
     * @return \Illuminate\Database\Eloquent\Collection Danh sách bản ghi.
     */

    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Tìm bản ghi theo id
     *
     * @param int $id 
     * @return Model
     */
    public function findById(int $id)
    {
        return $this->model->find($id);
    }
    
    /**
     * Tìm bản ghi theo id
     *
     * @param int $id 
     * @return bool
     */
    public function delete(int $id)
    {
        $item = $this->findById($id);
        return $item ? $item->delete() : false;
    }

     /**
     * Cập nhật bản ghi theo id
     *
     * @param int $id 
     * @param array $data 
     * @return Model|bool 
     */
    public function update(int $id, array $data)
    {
        $item = $this->findById($id);
        if (!$item) return false;
        $item->update($data);
        return $item;
    }

     /**
     *Tạo mới một bản ghi
     *
     * @param array $data
     * @return Model 
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}