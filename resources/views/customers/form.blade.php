@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Customer Information Form</h2>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customerName" name="customerName">
            </div>

            <div class="mb-3">
                <label class="form-label">Billing Address</label>
                <input type="text" class="form-control mb-2" id="address_1" name="address_1" placeholder="Address 1">
                <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Address 2 (Optional)">
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state">
                </div>
                <div class="col-md-4">
                    <label for="zip" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zip" name="zip">
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="business_type" class="form-label">Type of Business</label>
                <select class="form-select" id="business_type" name="business_type">
                    <option selected disabled>Choose one</option>
                    <option value="Corporation">Corporation</option>
                    <option value="LLC">LLC</option>
                    <option value="Sole Proprietor">Sole Proprietor</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <p class="form-label">Preferred Days of Receiving Shipments</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="preferred_days[]" value="M" id="day_m">
                    <label class="form-check-label" for="day_m">Monday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="preferred_days[]" value="T" id="day_t">
                    <label class="form-check-label" for="day_t">Tuesday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="preferred_days[]" value="W" id="day_w">
                    <label class="form-check-label" for="day_w">Wednesday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="preferred_days[]" value="R" id="day_r">
                    <label class="form-check-label" for="day_r">Thursday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="preferred_days[]" value="F" id="day_f">
                    <label class="form-check-label" for="day_f">Friday</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
