<?php
namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\ProjectServices;

use App\Interfaces\Admin\ProjectServiceInterface;
use App\Interfaces\Admin\ProjectInterface;

use App\Repository\Admin\ProjectRepository;

class ProjectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind(ProjectInterface::Class, ProjectRepository::Class);
        $this->app->bind(ProjectServiceInterface::Class, ProjectServices::Class);
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
