<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\File;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function(){
            $files = File::where('status','=',0)->get();
        foreach ($files as $key) {
            $file = file_get_contents($key->url);
            $save = file_put_contents(storage_path().'/file/'.$key->namafile, $file);
            if($save){
                $key->status = 1;
                $key->url = storage_path().'/file/'.$key->namafile;
                $key->save();
            }
        }
        })->everyMinute();
    }


}
