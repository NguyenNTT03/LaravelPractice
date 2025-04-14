<?php

namespace App\Http\Repositories\Order;

use App\Models\Order;
use App\Http\Repositories\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    
}