<?php

namespace App\Http\Services;
use App\Http\Interfaces\OrderRepositoryInterface;
use App\Http\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class OrderService 
{
    protected $orderRepository;

     /**
     * Initialize ProductService.
     *
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Create order
     * @param int $productId
     * @return App\Models\Order
    */
    public function createOrderByProductId(int $productId)
    {
        return $this->orderRepository->create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'order_date' => now(),
        ]);
    }
}