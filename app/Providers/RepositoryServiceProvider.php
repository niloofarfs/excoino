<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\UserRepositoryInterface;
use App\Repository\CurrencyRepositoryInterface;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\UserRepository;
use App\Repository\Eloquent\CurrencyRepository;


/** 
 * Class RepositoryServiceProvider 
 * @package App\Providers 
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /** 
     * Register services. 
     * 
     * @return void  
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CurrencyRepositoryInterface::class, CurrencyRepository::class);
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
    }
}
