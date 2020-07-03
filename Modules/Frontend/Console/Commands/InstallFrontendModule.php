<?php

namespace Frontend\Console\Commands;

use Illuminate\Console\Command;

class InstallFrontendModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'frontend:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install required data for frontend module';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $this->info('Install Frontend seeders');
    }
}
