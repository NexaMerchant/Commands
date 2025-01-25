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

class UnInstall extends CommandInterface 

{
    protected $signature = 'Commands:uninstall';

    protected $description = 'Uninstall Commands an app';

    public function getAppVer() {
        return config("Commands.ver");
    }

    public function getAppName() {
        return config("Commands.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Commands UnInstall cannelled");
            return false;
        }
    }
}