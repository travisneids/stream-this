<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ChangeCustomerRequest;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $customers = $this->customer->all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = $this->customer->create($request->all());
        flash()->overlay('Success!', 'Customer has been created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $customer = $this->customer->findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ChangeCustomerRequest $request)
    {
        $customer = $this->customer->find($request->get('customer_id'))->update($request->except('_token', '_method', 'customer_id'));
        flash()->overlay('Success!', 'Customer has been updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->customer->destroy($id);
        flash()->overlay('Success!', 'Customer has been deleted successfully.');
        return response()->json('Success!', 200);
    }

    /**
     * Search for a customer by their email address
     * @param  Request $request
     * @return Response
     */
    public function search(Request $request)
    {
        $customer = $this->customer->where('email', $request->get('email'))->first();
        return redirect(route('customers.edit', $customer));
    }
}
