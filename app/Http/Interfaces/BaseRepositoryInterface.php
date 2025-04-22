<?php

namespace App\Http\Interfaces;

interface BaseRepositoryInterface
{
    /**
     * Get all record 
     */
    public function getAll();

    /**
     * Find by id
     *
     * @param int $id
     */
    public function findById(int $id);

    /**
     *Delete by id
     *
     * @param int $id 
     */
    public function delete(int $id);

    /**
     * Update information 
     *
     * @param int $id 
     * @param array $data 
     */
    public function update(int $id, array $data);

    /**
     * Create new record
     *
     * @param array $data 
     */
    public function create(array $data);
}