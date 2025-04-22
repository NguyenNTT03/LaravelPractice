<?php

namespace App\Http\Services; 

use App\Http\Interfaces\ProductRepositoryInterface; 
use App\Http\Repositories\ProductRepository; 

class ProductService 
{   
    protected $productRepository; 
    
     /**
     * Khởi tạo ProductService.
     *
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository) 
    { 
        $this->productRepository = $productRepository;
    }

    /**
     * Lấy danh sách sản phẩm.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllProducts()
    {
        return $this->productRepository->getSimpleList();
    }

     /**
     * Lấy thông tin chi tiết của một sản phẩm.
     *
     * @param int $productId
     * @return array
     */
    public function getProductDetail(int $productId)
    {
        return $this->productRepository->findById($productId);
    }

    /**
     * Xóa sản phẩm.
     *
     * @param int $productId
     * @return bool
     */
    public function deleteProduct(int $productId)
    {
        return $this->productRepository->delete($productId);
    }

     /**
     * Cập nhật thông tin sản phẩm.
     *
     * @param int $productId
     * @param array $data
     * @return bool
     */
    public function updateProduct(int $productId, array $data)
    {
        return $this->productRepository->update($productId, $data);
    }
}