<?php

namespace App\Http\Services;
use App\Http\Interfaces\OrderRepositoryInterface;
use App\Http\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class OrderService 
{
    protected $orderRepository;

     /**
     * Khởi tạo ProductService.
     *
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Mua sản phẩm
     * @param int $productId
     * @return App\Models\Order
    */
    public function buyProduct(int $productId)
    {
        return $this->orderRepository->create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'order_date' => now(),
        ]);
    }
}