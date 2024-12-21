<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

 return [
     'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can be 'sandbox' or 'live'
     'sandbox' => [
         'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
         'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
     ],
     'live' => [
         'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', ''),
         'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
     ],
     'currency'       => env('PAYPAL_CURRENCY', 'USD'),
     'validate_ssl'   => true,
 ];
 