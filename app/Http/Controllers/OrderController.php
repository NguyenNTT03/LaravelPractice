<?php

namespace App\Http\Controllers;
use App\Http\Interfaces\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Services\OrderService;


class OrderController 
{
    protected $orderService;
    
    /**
     * Initialize OrderService.
     * 
     * @param OrderService $orderService Instance of the OrderService.
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Process product purchase.
     *
     * @param Request $request HTTP request containing purchase details.
     * @param int $productId ID of the product to purchase.
     * @return \Illuminate\Http\RedirectResponse Redirects to the product list with a success message.
     */
    public function createOrder(Request $request, $productId)
    {
        $this->orderService->createOrderByProductId($productId);
        return redirect()->route('products.show')->with(config('config.type.success'), config('config.message.delete.success'));
    }
}