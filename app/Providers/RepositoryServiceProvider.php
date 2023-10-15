<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use Modules\Repository\Implement\UserRepository;
use Modules\Repository\Services\IUserRepository;
use Modules\Repository\Implement\OrderRepository;
use Modules\Repository\Services\IOrderRepository;
use Modules\Repository\Implement\KlientRepository;
use Modules\Repository\Services\IKlientRepository;
use Modules\Repository\Implement\ProjectRepository;
use Modules\Repository\Services\IProjectRepository;
use Modules\Repository\Implement\LanguageRepository;
use Modules\Repository\Services\ILanguageRepository;





class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserRepository::class, UserRepository::class);
        $this->app->singleton(IKlientRepository::class, KlientRepository::class);
        $this->app->singleton(IOrderRepository::class, OrderRepository::class);
        $this->app->singleton(IProjectRepository::class, ProjectRepository::class);
        $this->app->singleton(ILanguageRepository::class, LanguageRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function provides(): array
    {
        return [IUserRepository::class, IKlientRepository::class, IOrderRepository::class, IProjectRepository::class, ILanguageRepository::class];
    }

}