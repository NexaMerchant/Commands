<?php

namespace NexaMerchant\Commands\Console\Commands\CartRules;

use Illuminate\Console\Command;

class CartRulesFix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Commands:cart-rules:fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix cart rules';

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
     * @return int
     */
    public function handle()
    {
        // add confirm message for do it? or not
        if (!$this->confirm(trans('Commands::message.create.confirm'))) {
            // ...
            $this->error(trans('Commands::message.create.cancel'));
            return false;
        }

        $items = app('Webkul\CartRule\Repositories\CartRuleRepository')->all();

        foreach ($items as $item) {
            var_dump($item->conditions);
            $newConditions = [];
            foreach ($item->conditions as $condition) {
                var_dump($condition);
                if ($condition['attribute'] == 'cart_item|quantity') {
                    $condition['attribute'] = 'cart_item|qty';
                }
                
                if($condition['attribute'] == 'product|attribute_family_id') {
                    $condition['attribute_type'] = 'select';
                }

                $newConditions[] = $condition;
            }
            if ($newConditions) {
                $this->error('New Conditions');
                $this->error('-----------------');
                var_dump($newConditions);
            }
            
            //exit;


        }


    }
}