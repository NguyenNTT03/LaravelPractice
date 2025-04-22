<?php

namespace App\Http\Services; 

use App\Http\Interfaces\ProductRepositoryInterface; 
use App\Http\Repositories\ProductRepository; 

class ProductService 
{   
    protected $productRepository; 
    
     /**
     *Initialize ProductService.
     *
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository) 
    { 
        $this->productRepository = $productRepository;
    }

    /**
     * Get product list
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllProducts()
    {
        return $this->productRepository->getSimpleList();
    }

     /**
     * Get product detail information 
     *
     * @param int $productId
     * @return array
     */
    public function getProductDetail(int $productId)
    {
        return $this->productRepository->findById($productId);
    }

    /**
     * Delete product
     *
     * @param int $productId
     * @return bool
     */
    public function deleteProduct(int $productId)
    {
        return $this->productRepository->delete($productId);
    }

     /**
     * Update product information
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