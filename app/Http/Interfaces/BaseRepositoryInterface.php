<?php

namespace App\Http\Interfaces;

interface BaseRepositoryInterface
{
    /**
     * Lấy tất cả sản phẩm.
     */
    public function getAll();

    /**
     * Tìm theo ID.
     *
     * @param int $id
     */
    public function findById(int $id);

    /**
     * Xóa theo ID.
     *
     * @param int $id 
     */
    public function delete(int $id);

    /**
     * Cập nhật thông tin 
     *
     * @param int $id 
     * @param array $data 
     */
    public function update(int $id, array $data);

    /**
     * Tạo mới một bản ghighi
     *
     * @param array $data 
     */
    public function create(array $data);
}