<?php

namespace App\Http\Interfaces;

use App\Http\Interfaces\BaseRepositoryInterface;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Lấy danh sách đơn giản của sản phẩm (chỉ gồm ID và tên)
     *
     * @return \Illuminate\Database\Eloquent\Collection 
     */
    public function getSimpleList();
}