<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2025-01-25 19:23:42
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Commands\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Commands:install';

    protected $description = 'Install Commands an app';

    public function getAppVer() {
        return config("Commands.ver");
    }

    public function getAppName() {
        return config("Commands.name");
    }

    public function handle()
    {
        $this->info("Install app: Commands");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Commands Install cannelled");
            return false;
        }
    }
}