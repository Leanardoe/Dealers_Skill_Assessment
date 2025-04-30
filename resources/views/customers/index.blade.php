@extends('layouts.app')

@section('title', 'All Customers')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Customers</h2>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">+ Add Customer</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>There were some problems with your input:</strong>
        <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Account #</th>
                <th>Name</th>
                <th>Email</th>
                <th>Business Type</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr class="align-middle">
                    <td>{{ $customer->account_number }}</td>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->business_type }}</td>
                    <td>{{ $customer->created_at->format('Y-m-d') }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('customers.show', $customer) }}" class="btn btn-outline-primary btn-sm">View</a>
                            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                            <form action="{{ route('customers.destroy', $customer) }}" method="POST" onsubmit="return confirm('Delete this customer?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No customers yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
