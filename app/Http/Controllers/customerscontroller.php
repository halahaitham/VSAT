<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=customers::all();
        return view('customers.customers',compact('customer'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('customers.addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'customer_name'=>'required',
            'customer_email' =>'required',
            'customer_phone' =>'required',
            'city' =>'required',
            'details' =>'required',
            'balance' =>'required'
        ]);
        customers::create($request->all());
        return redirect()->route('customer.index');
        //return view ('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=customers::find($id);
        $name = $customer->customer_name;
        $email = $customer->customer_email;
        $phone = $customer->customer_phone;
        $city = $customer->city;
        $details = $customer->details;
        $balance = $customer->balance;
        return view('customers.editCustomer',compact('customer','name','email','phone','city','details','balance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*  $this->validate($request,[
              'customer_name'=>'required',
              'customer_email' =>'required',
              'customer_phone' =>'required',
              'city' =>'required',
              'details' =>'required',
              'balance' =>'required'
          ]);*/
        customers::find($id)->update($request->all());
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customers::destroy($id);
        return back();
    }
}
