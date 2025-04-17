<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RunPipeline implements ShouldQueue
{
    use Dispatchable, Queueable;

    public function __construct(
        public string $command
    ) {}

    public function handle()
    {
        shell_exec($this->command);
    }
}
