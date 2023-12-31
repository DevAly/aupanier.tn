<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('package:expire')
            ->daily();

        $schedule->command('account:remove')
            ->daily();

        $schedule->command('package:auto-renew')
            ->everyMinute();

        if (!strstr(shell_exec('ps xfauxwww'), 'queue:listen --queue=default --timeout=900'))
        {
            $schedule->command('queue:listen --queue=default --timeout=900')->everyMinute()->withoutOverlapping(9999999);
        }

        if (!strstr(shell_exec('ps xfauxwww'), 'queue:listen --queue=listeners --timeout=900'))
        {
            $schedule->command('queue:listen --queue=listeners --timeout=900')->everyMinute()->withoutOverlapping(9999999);
        }
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
