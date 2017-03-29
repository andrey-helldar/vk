<?php

namespace Helldar\Vk\Commands;

use Carbon\Carbon;
use Helldar\Vk\Models\VkRequest;
use Illuminate\Console\Command;

class VkRequestsClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vk:queue-clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear old data';

    /**
     * Create a new command instance.
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
    public function handle()
    {
        VkRequest::onlyTrashed()->where('deleted_at', '<', Carbon::now()->addHours(2))->delete();
    }
}