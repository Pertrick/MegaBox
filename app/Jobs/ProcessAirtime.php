<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Airtime;
use App\Models\Payment;
use App\Actions\PurchaseAirtime;

class ProcessAirtime implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $payment;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PurchaseAirtime $purchaseAirtime)
    {
        $payment_id = Payment::successAirtimePaymentId()->first();
        $airtimes  = Airtime::pendingAirtimeStatus($payment_id)->get(['id','phone_number','network','amount']);
        $response = $purchaseAirtime->buyAirtime($airtimes);
    }
}
