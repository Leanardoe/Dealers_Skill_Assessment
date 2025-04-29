<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information Form</title>
</head>
<body>
    <h2>Customer Information Form</h2>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <label for="customerName">Customer Name:</label>
        <input type="text" id="customerName" name="customerName"><br>

        <label>Billing Address:</label>
        <input type="text" id="address_1" name="address_1">
        <input type="text" id="address_2" name="address_2">
        <label>City:</label>
        <input type="text" id="city" name="city">
        <label>State:</label>
        <input type="text" id="state" name="state">
        <label>Zip Code:</label>
        <input type="text" id="zip" name="zip"><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="business_type">Type of Business:</label>
        <select id="business_type" name="business_type">
            <option value="Corporation">Corporation</option>
            <option value="LLC">LLC</option>
            <option value="Sole Proprietor">Sole Proprietor</option>
            <option value="Other">Other</option>
        </select><br>

        <p>Preferred Days of Receiving Shipments:</p>
        <label><input type="checkbox" name="preferred_days[]" value="M"> Monday</label>
        <label><input type="checkbox" name="preferred_days[]" value="T"> Tuesday</label>
        <label><input type="checkbox" name="preferred_days[]" value="W"> Wednesday</label>
        <label><input type="checkbox" name="preferred_days[]" value="R"> Thursday</label>
        <label><input type="checkbox" name="preferred_days[]" value="F"> Friday</label><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
