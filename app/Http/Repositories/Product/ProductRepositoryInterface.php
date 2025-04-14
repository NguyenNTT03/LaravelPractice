<?php

namespace App\Http\Repositories\Product;

use App\Http\Repositories\BaseRepositoryInterface;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    public function getSimpleList(); 

}