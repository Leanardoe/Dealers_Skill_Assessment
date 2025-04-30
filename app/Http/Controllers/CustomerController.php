<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerController extends Controller
{   
    //validate and store form information
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customerName'     => 'required|string|max:255',
            'address_1'        => 'required|string|max:255',
            'address_2'        => 'nullable|string|max:255',
            'city'             => 'required|string|max:100',
            'state'            => 'required|string|max:50',
            'zip'              => 'required|string|max:20',
            'phone'            => 'required|string|max:20',
            'email'            => 'required|email|max:255|unique:customers,email',
            'business_type'    => 'required|string',
            'preferred_days'   => 'nullable|array',
            'preferred_days.*' => 'in:M,T,W,R,F', 
        ]);

        $accountNumber = 'ACCT-' . strtoupper(Str::random(6));

        $customer = Customer::create([
            'account_number'  => $accountNumber,
            'customer_name'   => $validated['customerName'],
            'address_1'       => $validated['address_1'],
            'address_2'       => $validated['address_2'],
            'city'            => $validated['city'],
            'state'           => $validated['state'],
            'zip'             => $validated['zip'],
            'phone'           => $validated['phone'],
            'email'           => $validated['email'],
            'business_type'   => $validated['business_type'],
            'preferred_days'  => implode(',', $validated['preferred_days'] ?? []),
        ]);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Customer created successfully!');
    }

    public function create()
    {
        return view('customers.create', ['customer' => null]);
    }

    public function show(Customer $customer)
    {
        $customer->preferred_days = explode(',', $customer->preferred_days ?? '');
        return view('customers.show', compact('customer'));
    }

    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->get();

        return view('customers.index', compact('customers'));
    }

    public function edit(Customer $customer)
    {
        $customer->preferred_days = explode(',', $customer->preferred_days ?? '');
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'customerName'     => 'required|string|max:255',
            'address_1'        => 'required|string|max:255',
            'address_2'        => 'nullable|string|max:255',
            'city'             => 'required|string|max:100',
            'state'            => 'required|string|max:50',
            'zip'              => 'required|string|max:20',
            'phone'            => 'required|string|max:20',
            'email'            => 'required|email|max:255|unique:customers,email,' . $customer->id,
            'business_type'    => 'required|string',
            'preferred_days'   => 'nullable|array',
            'preferred_days.*' => 'in:M,T,W,R,F',
        ]);

        $customer->update([
            'customer_name'   => $validated['customerName'],
            'address_1'       => $validated['address_1'],
            'address_2'       => $validated['address_2'],
            'city'            => $validated['city'],
            'state'           => $validated['state'],
            'zip'             => $validated['zip'],
            'phone'           => $validated['phone'],
            'email'           => $validated['email'],
            'business_type'   => $validated['business_type'],
            'preferred_days'  => implode(',', $validated['preferred_days'] ?? []),
        ]);

        return redirect()->route('customers.show', $customer)->with('success', 'Customer updated!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted.');
    }

}
