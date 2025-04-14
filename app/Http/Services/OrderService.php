<?php

namespace App\Http\Services;
use App\Http\Repositories\Order\OrderRepositoryInterface;
use App\Http\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class OrderService 
{
    protected $orderRepo;

    public function __construct(OrderRepositoryInterface $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function buyProduct($productId)
    {
        return $this->orderRepo->create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'order_date' => now(),
        ]);
    }
}