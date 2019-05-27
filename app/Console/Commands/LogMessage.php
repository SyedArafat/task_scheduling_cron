<?php

namespace App\Console\Commands;

use App\Http\Controllers\MessageController;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LogMessage extends Command
{
    protected static $id=0;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:message';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some random log message generates';

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
    public function handle()
    {
        $msg=new MessageController();
        Log::info("Greeting from Sayed Yeamin Arafat @ ".Carbon::now('Asia/Dhaka')->format('h:i:s'));
        $msg->store();
        return 0;
    }
}
