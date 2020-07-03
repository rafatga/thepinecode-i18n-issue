<?php

namespace Frontend\Providers;

use Frontend\Console\Commands\InstallFrontendModule;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Frontend';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'frontend';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallFrontendModule::class,
            ]);
        }
    }


}
