<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repository\CurrencyRepositoryInterface;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(CurrencyRepositoryInterface $currency)
    {
        //Create copies of currency object in order to save multiple values in database
        $second = unserialize(serialize($currency));
        $third = unserialize(serialize($currency));

        $currency->code = 'IRR';
        $currency->name = 'Iranian Rial';
        $currency->country = 'Iran';
        $currency->save();

        $second->code = 'USD';
        $second->name = 'United States Dollar';
        $second->country = 'United States of America';
        $second->save();

        $third->code = 'EUR';
        $third->name = 'Euro';
        $third->country = 'Europa';
        $third->save();
    }
}
