<?php

namespace App\Http\Controllers;
use App\Http\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function show()
    {
        $products = $this->productRepo->getSimpleList();
        return view('showProduct', ['products' => $products]);
    }

    public function showDetail($productId)
    {
        $product = $this->productRepo->findById($productId);
        return view('showProductDetail', ['product' => $product]);
    }

    public function delete($productId)
    {
        $deleted = $this->productRepo->delete($productId);
        return redirect()->route('products.show')->with($deleted ? 'success' : 'error', $deleted ? 'Xóa thành công!' : 'Không tồn tại!');
    }

    public function update(Request $request, $productId)
    {
        $data = $request->only(['name', 'price', 'description']);
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $path = 'images/' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $path);
            $data['img_path'] = $path;
        }

        $updated = $this->productRepo->update($productId, $data);
        return redirect()->route('products.show')->with($updated ? 'success' : 'error', $updated ? 'Cập nhật thành công!' : 'Không tồn tại!');
    }

    public function edit($id)
    {
        $product = $this->productRepo->findById($id);
        return view('editProduct', compact('product'));
    }
}