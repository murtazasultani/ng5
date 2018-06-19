<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Jobs\Customer\CreateCustomerJob;
use App\Jobs\Customer\UpdateCustomerJob;
use App\Jobs\Customer\DeleteCustomerJob;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $customers = Customer::get();
        $cust = Customer::select('fees')->sum('fees');
        $count = Customer::select('name')->count();
        return view('customer' ,compact('customers','cust','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = $this->dispatchNow(new CreateCustomerJob($request));

        flash(trans('messages.customer.created'))->success()->important();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Customer $customer, CustomerRequest $request)
    {   
        $this->dispatchNow(new UpdateCustomerJob($customer, $request));

        flash(trans('messages.customer.updated'))->success()->important();

        return redirect()->route('home');
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->dispatchNow(new DeleteCustomerJob(Customer::getCustomer($id)));

        flash(trans('messages.customer.deleted.' . $data))->$data()->important();

        return redirect()->route('home');
    }
}
