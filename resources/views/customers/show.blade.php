@extends('layouts.app')

@section('content')
    <h2>{{ $customer->customer_name }} <small class="text-muted">({{ $customer->account_number }})</small></h2>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Email:</strong> {{ $customer->email }}</li>
        <li class="list-group-item"><strong>Phone:</strong> {{ $customer->phone }}</li>
        <li class="list-group-item"><strong>Address:</strong> {{ $customer->address_1 }} {{ $customer->address_2 }}</li>
        <li class="list-group-item"><strong>City/State/Zip:</strong> {{ $customer->city }}, {{ $customer->state }} {{ $customer->zip }}</li>
        <li class="list-group-item"><strong>Business Type:</strong> {{ $customer->business_type }}</li>
        <li class="list-group-item"><strong>Preferred Days:</strong> {{ implode(', ', $customer->preferred_days ?? []) }}</li>
    </ul>

    <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
