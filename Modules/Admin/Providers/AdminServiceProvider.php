<?php

namespace Admin\Providers;

use Admin\Console\Commands\InstallAdminModule;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Admin';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'admin';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallAdminModule::class,
            ]);
        }
    }


}
