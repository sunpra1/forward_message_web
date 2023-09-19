<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Stripe;


class MobileApplicationController extends Controller
{
    function getPaymentDetail(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['amount' => 'required|numeric|min:500']
        );

        if ($validator->fails()) {
            return response(
                [
                    'errors' => $validator->errors()
                ],
                400
            );
        } else {
            $stripeSecretKey = env("STRIPE_SECRET_KEY");
            $stripePublishableKey = env("STRIPE_PUBLISHABLE_KEY");


            $stripe = new Stripe\StripeClient($stripeSecretKey);

            // Use an existing Customer ID if this is a returning customer.
            $customer = $stripe->customers->create();
            $ephemeralKey = $stripe->ephemeralKeys->create([
                'customer' => $customer->id,
            ], [
                'stripe_version' => '2022-08-01',
            ]);
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => 500,
                'currency' => 'usd',
                'customer' => $customer->id,
                // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
                'automatic_payment_methods' => [
                    'enabled' => 'true',
                ],
            ]);

            return response(
                [
                    'paymentIntent' => $paymentIntent->client_secret,
                    'ephemeralKey' => $ephemeralKey->secret,
                    'customer' => $customer->id,
                    'publishableKey' => $stripePublishableKey
                ],
                200
            );
        }
    }
}
