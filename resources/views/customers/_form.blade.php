<form action="{{ $formAction }}" method="POST">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="customerName" class="form-label">Customer Name</label>
        <input type="text" class="form-control" id="customerName" name="customerName"
               value="{{ old('customerName', $customer->customer_name ?? '') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Billing Address</label>
        <input type="text" class="form-control mb-2" id="address_1" name="address_1"
               value="{{ old('address_1', $customer->address_1 ?? '') }}" placeholder="Address 1">
        <input type="text" class="form-control" id="address_2" name="address_2"
               value="{{ old('address_2', $customer->address_2 ?? '') }}" placeholder="Address 2">
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city"
                   value="{{ old('city', $customer->city ?? '') }}">
        </div>
        <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" id="state" name="state"
                   value="{{ old('state', $customer->state ?? '') }}">
        </div>
        <div class="col-md-4">
            <label for="zip" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="zip" name="zip"
                   value="{{ old('zip', $customer->zip ?? '') }}">
        </div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="phone" name="phone"
               value="{{ old('phone', $customer->phone ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"
               value="{{ old('email', $customer->email ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="business_type" class="form-label">Type of Business</label>
        <select class="form-select" id="business_type" name="business_type">
            <option disabled {{ old('business_type', $customer->business_type ?? '') ? '' : 'selected' }}>Choose...</option>
            @foreach (['Corporation', 'LLC', 'Sole Proprietor', 'Other'] as $type)
                <option value="{{ $type }}" @selected(old('business_type', $customer->business_type ?? '') == $type)>
                    {{ $type }}
                </option>
            @endforeach
        </select>

    </div>

    <div class="mb-3">
        <p class="form-label">Preferred Days</p>
        @foreach (['M' => 'Mon', 'T' => 'Tue', 'W' => 'Wed', 'R' => 'Thu', 'F' => 'Fri'] as $val => $label)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="preferred_days[]" value="{{ $val }}"
                       @checked(in_array($val, old('preferred_days', $customer->preferred_days ?? [])))>
                <label class="form-check-label">{{ $label }}</label>
            </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">{{ $isEdit ? 'Update' : 'Submit' }}</button>
</form>
