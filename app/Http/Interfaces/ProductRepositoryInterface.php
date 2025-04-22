<?php

namespace App\Http\Interfaces;

use App\Http\Interfaces\BaseRepositoryInterface;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get simple product list
     *
     * @return \Illuminate\Database\Eloquent\Collection 
     */
    public function getSimpleList();
}