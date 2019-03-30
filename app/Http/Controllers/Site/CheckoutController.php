<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Checkout as CheckoutRequest;
use App\Models\Purchasedgoods;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::count() == 0) {
            return redirect()->route('site.new');
        }

        return view('site.pages.checkout');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug . ', ' . $item->qty;
        })->values()->toJson();

        Stripe::charges()->create([
            'amount' => Cart::subtotal(),
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Order',
            'receipt_email' => $request->email,
            'metadata' => [
                'contents' => $contents,
                'quantity' => Cart::instance('default')->count(),
            ],
        ]);

        foreach (Cart::content() as $item){
            Purchasedgoods::create([
                'user_id' => Auth::user()->id,
                'product_id' => $item->id,
            ]);
        }

        Cart::destroy();

        return redirect()->route('cart.index')->with('success', __('site.checkout-payment-success'));
    }
}