<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Data;
use App\Models\Payment;
use App\Actions\PurchaseData;

class ProcessData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PurchaseData $purchaseData)
    {
        $payment_id = Payment::successDataPaymentId()->first();
        $data  = Data::pendingDataStatus($payment_id)->get(['id','phone_number','network_code']);

        $response = $purchaseData->buyData($data);
    }
}
