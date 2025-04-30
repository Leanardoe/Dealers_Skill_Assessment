@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <h2>Add New Customer</h2>

    @include('customers._form', [
        'formAction' => route('customers.store'),
        'customer'   => null,
        'isEdit'     => false,
    ])
@endsection
