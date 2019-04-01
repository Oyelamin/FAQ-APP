<?php

namespace App\Http\Controllers;

use App\customer_prefer_numbers;
use Illuminate\Http\Request;
use App\customer_prefer_international_numbers;

class CustomerPreferContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function free_number()
    {
        return view('Administrator.CustomerPreferContact.free_number');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_free_number()
    {
        request()->validate([
            'toll_free_number'=>['required','min:5']
        ]);
        customer_prefer_numbers::create([
            'number' => request('toll_free_number')
        ]);
        return back()->with('success','Changes Saved!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function international_number(Request $request)
    {
        return view('Administrator.CustomerPreferContact.international_number');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer_prefer_numbers  $customer_prefer_numbers
     * @return \Illuminate\Http\Response
     */
    public function store_international_number()
    {
        request()->validate([
            'international_number' => ['required','min:5']
        ]);
        customer_prefer_international_numbers::create([
            'number' => request('international_number')
        ]);
        return back()->with('success','Changes Saved!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer_prefer_numbers  $customer_prefer_numbers
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_prefer_numbers $customer_prefer_numbers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer_prefer_numbers  $customer_prefer_numbers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer_prefer_numbers $customer_prefer_numbers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer_prefer_numbers  $customer_prefer_numbers
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_prefer_numbers $customer_prefer_numbers)
    {
        //
    }
}
