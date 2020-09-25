<?php

namespace App\Providers;

use App\Repositories\PDFRepository;
use App\Repositories\Interfaces\PDFRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class PDFServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PDFRepositoryInterface::class,
            PDFRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
