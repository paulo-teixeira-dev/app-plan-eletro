<?php

namespace App\Providers;

use App\Interfaces\EletroRepositoryInterface;
use App\Repositories\EletroRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EletroRepositoryInterface::class, EletroRepository::class);
    }

    public function boot()
    {
        //
    }
}
