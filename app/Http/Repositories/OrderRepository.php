<?php

namespace App\Http\Repositories;

use App\Models\Order;
use App\Http\Repositories\BaseRepository;
use App\Http\Interfaces\OrderRepositoryInterface;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
     /**
     * Initialize rderRepository
     *
     * @param Order $order
     * 
     */
    public function __construct(Order $order)
    {
        parent::__construct($order);
    } 
}