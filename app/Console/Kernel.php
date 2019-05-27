<?php

namespace App\Console;

use App\Console\Commands;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\LogMessage::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
//        $schedule->command('log:message')->everyMinute();
        $schedule->command('log:message')->hourly();

        /**For ubuntu local write below command on crontab pressing crontab -e
         * * * * * php /opt/lampp/htdocs/Scheduling_With_CronJob/artisan schedule:run >> /dev/null 2>&1

        And this one for server
        /usr/local/bin/ea-php72 -q /home/shikhaonet/shikhao_data/artisan schedule:run >> /dev/null 2>&1

        **/
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
