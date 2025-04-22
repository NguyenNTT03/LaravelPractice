<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController 
{
    protected $productService;

    /**
     * Khởi tạo ProductService
     * @param ProductService $productServiceproductService
    */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Hiển thị danh sách sản phẩm.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $products = $this->productService->getAllProducts();
        return view('showProduct', ['products' => $products]);
    }

    /**
     * Hiển thị chi tiết  sản phẩm.
     * @param int $productId
     * @return \Illuminate\View\View
     */
    public function showDetail(int $productId)
    {
        $product = $this->productService->getProductDetail($productId);
        return view('showProductDetail', ['product' => $product]);
    }

    /**
     * Xóa sản phẩm.
     *@param int $productId
     * @return bool
     */
    public function delete(int $productId)
    {
        $deleted = $this->productService->deleteProduct($productId);
        return redirect()->route('products.show')->with(
            $deleted ? config('config.type.success') : config('config.type.error'),
            $deleted ? config('config.message.delete.success') : config('config.message.delete.error')
        );
    }

    /**
     * Cập nhật sản phẩm.
     *
     * @param Request $request 
     * @param int $productId
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request, int $productId)
    {
        $data = $request->only(['name', 'price', 'description']);
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $path = 'images/' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $path);
            $data['img_path'] = $path;
        }

        $updated = $this->productService->updateProduct($productId, $data);
        return redirect()->route('products.show')->with(
            $updated ? config('config.type.success') : config('config.type.error'),
            $updated ? config('config.message.update.success') : config('config.message.update.error')
        );
    }

    /**
     * Hiển thị giao diện chỉnh sửa sản phẩm.
     *
     * @param int $id 
     * @return \Illuminate\View\View 
     */
    public function edit(int $id)
    {
        $product = $this->productService->getProductDetail($id);
        return view('editProduct', compact('product'));
    }
}