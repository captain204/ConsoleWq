<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\SimpleExcel\SimpleExcelReader;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ParseCSV implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;
    protected $headers;
    protected $chunkSize;
    protected $processCallback;

    /**
     * Create a new job instance.
     *
     * @param string $filePath
     * @param array $headers
     * @param int $chunkSize
     * @param callable $processCallback
     */
    public function __construct(string $filePath, array $headers, int $chunkSize, callable $processCallback)
    {
        $this->filePath = $filePath;
        $this->headers = $headers;
        $this->chunkSize = $chunkSize;
        $this->processCallback = $processCallback;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
     
}
