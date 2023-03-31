<?php

namespace App\Console;

use App\Http\Middleware\EnvironmentConnection;
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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->command('active:BlockedUsers')->timezone('America/Guayaquil')->at('01:00');
        $schedule->command('set:missedMeetings')->timezone('America/Guayaquil')->at('00:01');
        //$schedule->command('set:missedMeetings')->everyMinute();
        $schedule->command('sendmail:bienvenida "'.config('constants.comand_api_key').'"')->timezone('America/Guayaquil')->at('05:10');
        $schedule->command('sendmail:recordatorio "'.config('constants.comand_api_key').'"')->timezone('America/Guayaquil')->at('05:00');
        //$schedule->command('set:Reprocesos')->everyMinute();
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
