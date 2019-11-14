<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skill Assessment</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        .row {
            margin-bottom: 1rem;
        }

        .pr-0 {
            padding-right: 0 !important;
        }
        fieldset {
            border: 1px solid #cccccc;
            padding: 12px;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        legend {
            border: none;
            width: auto;
            padding: 0px 10px;
            margin: 0px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div id="customer_info">
	
		<h2>Add New Customer</h2>
	
        <fieldset>
            <legend>Customer Info</legend>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">Name</span>
                        <input id="name" class="form-control" type="text" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">Address</span>
                        <input id="address" class="form-control" type="text" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">Address 2</span>
                        <input id="address2" class="form-control" type="text" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">City</span>
                        <input id="city" class="form-control" type="text" />
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">State</span>
                        <input id="state" class="form-control" type="text" />
                    </div>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12 pr-0">
                    <div class="input-group">
                        <span class="input-group-addon">Zip</span>
                        <input id="zip" class="form-control" type="text" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">Phone</span>
                        <input id="phone" type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">Fax</span>
                        <input id="fax" type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">E-mail</span>
                        <input id="email" type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">Contact</span>
                        <input id="contact" type="text" class="form-control" />
                    </div>
                </div>
            </div>
        </fieldset>
    </div> <!-- /#customer_info-->

    <div id="business">
        <fieldset>
            <legend>Business Info</legend>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>Type of Business:</p>
                    <label>
                        <input id="type" type="radio" name="type" value="Corporation" />
                        Corporation
                    </label>
                    <label>
                        <input id="type" type="radio" name="type" value="LLC" />
                        LLC
                    </label>
                    <label>
                        <input id="type" type="radio" name="type" value="Sole Proprietor" />
                        Sole Proprietor
                    </label>
                    <label>
                        <input id="type" type="radio" name="type" value="Other" />
                        Other
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label for="business_description">Brief Description of the Business</label>
                    <input id="business_description" type="text" class="form-control" />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <span>Preferred Days to Receive Shipments</span><br/>
                    <label for="ship_mon">M</label>
                    <input type="checkbox" id="ship_mon" value="1" />

                    <label for="ship_tue">T</label>
                    <input type="checkbox" id="ship_tue" value="1" />

                    <label for="ship_wed">W</label>
                    <input type="checkbox" id="ship_wed" value="1" />

                    <label for="ship_thu">R</label>
                    <input type="checkbox" id="ship_thu" value="1" />

                    <label for="ship_fri">F</label>
                    <input type="checkbox" id="ship_fri" value="1" />


                </div>
            </div>
        </fieldset>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button id="submit" type="button" class="btn btn-primary pull-right">Submit</button>
        </div>
    </div>


</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>