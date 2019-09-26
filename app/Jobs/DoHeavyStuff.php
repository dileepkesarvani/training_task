<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class DoHeavyStuff implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $image = Image::make(public_path($this->file));
        $image = $request->file->move(public_path('img'));
    }
}
