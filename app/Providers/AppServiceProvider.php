<?php

namespace App\Providers;

use App\Repositories\GithubInterface;
use App\Repositories\GithubRepository;
use App\Repositories\SlackInterface;
use App\Repositories\SlackRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SlackInterface::class, SlackRepository::class);
        $this->app->bind(GithubInterface::class, GithubRepository::class);
    }
}
