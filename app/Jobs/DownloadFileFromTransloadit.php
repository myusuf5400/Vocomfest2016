<?php

namespace App\Jobs;

use App\File;
use App\Jobs\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DownloadFileFromTransloadit extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        exec("wget --limit-rate=400k ".$this->file->url." -O 'storage/file/".$this->file->tipe."/".$this->file->namafile."'", $output, $return);
        if(!$return){
	    $this->file->status = 1;
	    $this->file->url    = 'storage/file/'.$this->file->tipe.'/'.$this->file->namafile;
	    $this->file->save();
	}
    }
}