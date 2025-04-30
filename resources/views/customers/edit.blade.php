@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <h2>Edit Customer</h2>

    @include('customers._form', [
        'formAction' => route('customers.update', $customer),
        'customer'   => $customer,
        'isEdit'     => true,
    ])
@endsection
