<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information Form</title>
</head>
<body>
    <h2>Customer Information Form</h2>

    <form action="" method="post">
        <label for="customerName">Customer Name:</label>
        <input type="text" id="customerName" name="customerName">

        <br>

        <label>Billing Address:</label>
        <input type="text" id="address_1" name="address_1">
        <input type="text" id="address_2" name="address_2">
        <label>City:</label>
        <input type="text" id="city" name="city">
        <label>State:</label>
        <input type="text" id="state" name="state">
        <label>Zip Code:</label>
        <input type="text" id="zip" name="zip">
        
        <br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <br>

        <label for="business_type">Type of Business (choose one of the following):</label>
        <select id="business_type" name="business_type">
            <option value="">Corporation</option>
            <option value="">LLC</option>
            <option value="">Sole Proprietor</option>
            <option value="">Other</option>
        </select>

        <br>

        <p>Preferred Days of Receiving Shipments (Choose one *or* more of the following):</p>
        <input type="checkbox" value="M"> <label>Monday</label>
        <input type="checkbox" value="T"> <label>Tuesday</label>
        <input type="checkbox" value="W"> <label>Wednesday</label>
        <input type="checkbox" value="R"> <label>Thursday</label>
        <input type="checkbox" value="F"> <label>Friday</label>

        <br>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>
