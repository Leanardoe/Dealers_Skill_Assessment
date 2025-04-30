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

    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
        <div class="d-flex gap-2">
            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('customers.destroy', $customer) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>

        <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">← Back</a>
    </div>
@endsection
