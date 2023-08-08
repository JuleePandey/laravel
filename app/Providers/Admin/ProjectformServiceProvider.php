<?php
namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;
use App\Services\Admin\ProjectformServices;

use App\Interfaces\Admin\ProjectformServiceInterface;
use App\Interfaces\Admin\ProjectformInterface;

use App\Repository\Admin\ProjectformRepository;

class ProjectformServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind(ProjectformInterface::Class, ProjectformRepository::Class);
        $this->app->bind(ProjectformServiceInterface::Class, ProjectformServices::Class);
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
