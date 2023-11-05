<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class WebhookController extends Controller
{
    public function handler(Request $request)
    {
        \Midtrans\Config::$isProduction = (bool) env('MIDTRANS_IS_PRODUCTION');
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        $notif = new \Midtrans\Notification();

        $transactionStatus = $notif->transaction_status;
        $transactionCode = $notif->order_id;
        $fraudStatus = $notif->fraud_status;

        $status = '';

        if ($transactionStatus == 'capture'){
            if ($fraudStatus == 'challenge'){
                $status = 'challenge';
            } else if ($fraudStatus == 'accept'){
                $status = 'success';
            }
        } else if ($transactionStatus == 'settlement'){
            $status = 'success';
        } else if ($transactionStatus == 'cancel' ||
          $transactionStatus == 'deny' ||
          $transactionStatus == 'expire'){
          $status = 'failure';
        } else if ($transactionStatus == 'pending'){
          $status = 'pending';
        }

        $transaction = Transaction::with('product')
            ->where('transaction_code', $transactionCode)
            ->first();


        $transaction->update(['status' => $status ]);
    }
}
