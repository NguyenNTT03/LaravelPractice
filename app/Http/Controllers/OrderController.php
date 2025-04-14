<?php

namespace App\Http\Controllers;
use App\Http\Repositories\Order\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Services\OrderService;


class OrderController extends Controller
{
    protected $orderRepo;
    protected $orderService;
    public function __construct(OrderRepositoryInterface $orderRepo, OrderService $orderService)
    {
        $this->orderRepo = $orderRepo;
        $this->orderService = $orderService;
    }

    public function buyProduct(Request $request, $productId)
    {
        $this->orderService->buyProduct($productId);
        return redirect()->route('products.show')->with('success', 'Mua hàng thành công!');
    }
}