<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Data;
use App\Actions\PurchaseData;
use Illuminate\Support\Facades\Log;

class ProcessData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $paymentId;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Data $data, PurchaseData $purchaseData)
    {
        Log::info("processing data");
        $data  = $data->getSuccessfulDataPaymentAttribute($this->paymentId);
        echo $data;
        $response = $purchaseData->buyData($data);
        echo $response;
    }
}
