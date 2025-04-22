<?php

namespace App\Http\Repositories;

use App\Models\Product;
use App\Http\Repositories\BaseRepository;
use App\Http\Interfaces\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{   
     /**
     * Khởi tạo ProductRepository
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }
    
    /**
     * Lấy danh sách đơn giản của sản phẩm (chỉ gồm ID và tên)
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getSimpleList()
    {
        return Product::select('id', 'name')->get();
    }
}