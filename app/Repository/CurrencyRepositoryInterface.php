<?php

namespace App\Repository;

interface CurrencyRepositoryInterface
{
    /**
     * Save model to the database.
     *
     * @return bool
     */
    public function save(): bool;
}
