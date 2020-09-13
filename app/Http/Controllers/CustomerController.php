<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view("customers/customer-add");
    }
    public function create(Request $request)
    {
        $customer = new Customer([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $customer->save();
        return redirect('/customers/customerlist');
    }
    public function list()
    {
        $customers = Customer::all();
        return view('customers/customer-list', compact('customers'));
    }
    public function detail($id)
    {
        $customer = Customer::find($id);
        return view('customers/customer-detail', compact('customer'));
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view("customers/customer-update", compact('customer'));
    }
    public function update(Request $request)
    {
        $customer = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        Customer::find($request->get('id'))->update($customer);
        return redirect('/customers/customerlist');
    }
    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect('/customers/customerlist');
    }
}
