<?php

namespace App\Http\Controllers;
use App\Http\Interfaces\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Services\OrderService;


class OrderController 
{
    protected $orderService;
    
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function buyProduct(Request $request, $productId)
    {
        $this->orderService->buyProduct($productId);
        return redirect()->route('products.show')->with(config('config.type.success'), config('config.message.delete.success'));
    }
}