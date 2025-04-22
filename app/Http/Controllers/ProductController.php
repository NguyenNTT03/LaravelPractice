<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController 
{
    protected $productService;

    /**
     * Initialize ProductService.
     * 
     * @param ProductService $productService Instance of the ProductService.
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display the list of products.
     *
     * @return \Illuminate\View\View View displaying the list of products.
     */
    public function getAllProducts()
    {
        $products = $this->productService->getAllProducts();
        return view('showProduct', ['products' => $products]);
    }

    /**
     * Display product details.
     * 
     * @param int $productId Product ID.
     * @return \Illuminate\View\View View displaying product details.
     */
    public function getProductDetail(int $productId)
    {
        $product = $this->productService->getProductDetailById($productId);
        return view('showProductDetail', ['product' => $product]);
    }

    /**
     * Delete a product.
     * 
     * @param int $productId Product ID.
     * @return bool Returns true if deletion is successful, otherwise false.
     */
    public function deleteProduct(int $productId)
    {
        $deleted = $this->productService->deleteProductById($productId);
        return redirect()->route('products.show')->with(
            $deleted ? config('config.type.success') : config('config.type.error'),
            $deleted ? config('config.message.delete.success') : config('config.message.delete.error')
        );
    }

    /**
     * Update product information.
     * 
     * @param Request $request HTTP request containing update data.
     * @param int $productId Product ID.
     * @return \Illuminate\Http\RedirectResponse Redirects after updating the product.
     */
    public function updateProducT(Request $request, int $productId)
    {
        $data = $request->only(['name', 'price', 'description']);
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $path = 'images/' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $path);
            $data['img_path'] = $path;
        }

        $updated = $this->productService->updateProductById($productId, $data);
        return redirect()->route('products.show')->with(
            $updated ? config('config.type.success') : config('config.type.error'),
            $updated ? config('config.message.update.success') : config('config.message.update.error')
        );
    }

    /**
     * Display the product edit interface.
     * 
     * @param int $id Product ID.
     * @return \Illuminate\View\View View for editing the product.
     */
    public function editProduct(int $id)
    {
        $product = $this->productService->getProductDetailById($id);
        return view('editProduct', compact('product'));
    }
}