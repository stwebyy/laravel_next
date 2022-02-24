<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Domain\Article\ArticleRepository;
use Src\Infra\ArticleRepositoryInfra;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ArticleRepository::class, ArticleRepositoryInfra::class);
    }
}
