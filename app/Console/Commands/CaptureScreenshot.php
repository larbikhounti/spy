<?php
// app/Console/Commands/CaptureScreenshot.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class CaptureScreenshot extends Command
{
    protected $signature = 'screenshot:capture {url} {user_id} {country}';
    protected $description = 'Capture a screenshot of a given URL';

    public function handle()
    {
        $url = $this->argument('url');
        $user_id = $this->argument('user_id');
        $country = implode(' ',$this->argument('country')); // $country is an array of country ids separated by space
        $process = new Process([
            'node',
            base_path('scripts/scrapper.js'),
            $url,
            $user_id,
            $country,
        ]);

        try {
            $process->mustRun();
            $this->info($process->getOutput());
        } catch (ProcessFailedException $exception) {
            $this->error('Screenshot capture failed: ' . $exception->getMessage());
        }
    }
}
