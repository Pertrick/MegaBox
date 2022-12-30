<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Airtime;
use App\Actions\PurchaseAirtime;
use Illuminate\Support\Facades\Log;

class ProcessAirtime implements ShouldQueue
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
    public function handle(Airtime $airtime,PurchaseAirtime $purchaseAirtime)
    {
        //Log::info("processing airtime");
        $airtimes = $airtime->getSuccessfulAirtimePaymentIdAttribute($this->paymentId);
        echo $airtimes;
        //Log::info("airtime Processing");
        $response = $purchaseAirtime->buyAirtime($airtimes);
        echo $response;
    }
}
