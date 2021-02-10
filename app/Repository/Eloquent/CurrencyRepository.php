<?php

namespace App\Repository\Eloquent;

use App\Models\Currency;
use App\Repository\CurrencyRepositoryInterface;

class CurrencyRepository extends BaseRepository implements CurrencyRepositoryInterface
{

    /**
     * CurrencyRepository constructor.
     *
     * @param Currency $model
     */
    public function __construct(Currency $model)
    {
        parent::__construct($model);
    }

    /**
     * Save model to the database.
     *
     * @return bool
     */
    public function save(): bool
    {
        $this->model->code = $this->code;
        $this->model->name = $this->name;
        $this->model->country = $this->country;

        return $this->model->save();
    }
}
