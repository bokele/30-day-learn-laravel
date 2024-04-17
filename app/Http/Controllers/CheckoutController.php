<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function checkout(Request $request, string $plan = 'price_1P5VmQEeQ3YObL4scFhKQEUZ')
    {
        return $request->user()
            ->newSubscription('prod_PvMVtarrp34PuC', $plan)
            ->checkout([
                'success_url' => route('success', ['prod' => 'prod_PvMVtarrp34PuC', 'plan' => $plan]),
                'cancel_url' => route('home'),
            ]);
    }

    public function success($plan, $prod)
    {
        $plan = Plan::where('stripe_plan', $plan)->firstOrFail();

        return view('pages.success-payment', compact('plan', 'prod'));
    }
}
