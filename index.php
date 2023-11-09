<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Purchase Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <form class="needs-validation" action="generate.php" method="post" data-toggle="validator" novalidate>
            <!-- Purchaser information -->
            <fieldset class="border p-2 my-4">
                <legend>Purchaser information</legend>
                <div class="row my-3">
                    <div class='col-md-5'>
                        <label class="form-label text-start w-100" for='buyer'>Purchaser</label>
                        <input type='text' class="form-control" id='buyer' name="buyer_name" placeholder='Name of the buyer' required/>
                    </div>
                    <div class='col-md-7'>
                        <label class="form-label text-start w-100" for='address'>Address</label>
                        <input type='text' class="form-control" id='address' name="buyer_address" placeholder='Address of the buyer' required/>
                    </div>
                </div>
                
                <div class="row my-3">
                    <div class='col-md-4'>
                        <label class="form-label text-start w-100" for='city'>City</label>
                        <input type='text' class="form-control" id='city' name="buyer_city" placeholder='Enter city' required/>
                    </div>
                    <div class='col-6'>
                        <label class="form-label text-start w-100" for='province'>Province</label>
                        <select id='select1' class="form-select" name="buyer_province" placeholder='Field Textarea' required>
                            <option value='Alberta'>Alberta</option>
                            <option value='British Colombia'>British Colombia</option>
                            <option value='Manitoba'>Manitoba</option>
                            <option value='New Brunswick'>New Brunswick</option>
                            <option value='Newfoundland and Labrador'>Newfoundland and Labrador</option>
                            <option value="Nova Scotia">Nova Scotia</option>
                            <option value="Ontario">Ontario</option>
                            <option value="Prince Edward Island">Prince Edward Island</option>
                            <option value="Quebec">Quebec</option>
                            <option value="Saskatchewan">Saskatchewan</option>
                            <option value="Northwest Territories">Northwest Territories</option>
                            <option value="Nunavut">Nunavut</option>
                            <option value="Yukon">Yukon</option>
                        </select>
                    </div>
                    <div class='col-md-2'>
                        <label class="form-label text-start w-100" for='postCode'>Postal Code</label>
                        <input type='text' class="form-control" name="buyer_postCode" id='postCode' placeholder='Enter postal code' required/>
                    </div>
                </div>

                <div class="row my-3">
                    <div class='col-12'>
                        <label class="form-label text-start w-100" for='email'>E-mail</label>
                        <input type='email' class="form-control" id='email' name="buyer_email" placeholder='Enter e-mail address' required/>
                    </div>
                    <div class='col-md-4'>
                        <label class="form-label text-start w-100" for='homePhone'>Residence phone</label>
                        <input type='tel' class="form-control" id='homePhone' name="buyer_homePhone" placeholder='Enter home phone number' required/>
                    </div>
                    <div class='col-md-4'>
                        <label class="form-label text-start w-100" for='WorkPhone'>Business phone</label>
                        <input type='tel' class="form-control" id='WorkPhone' name="buyer_WorkPhone" placeholder='Enter business phone number'/>
                    </div>
                    <div class='col-md-4'>
                        <label class="form-label text-start w-100" for='cellPhone'>Cell phone</label>
                        <input type='tel' class="form-control" id='cellPhone' name="buyer_cellPhone" placeholder='Enter cell phone number'/>
                    </div>
                </div>
            </fieldset>

            <!-- Vehicle information -->
            <fieldset class="border p-2 my-4">
                <legend>Vehicle information</legend>

                <div class="row my-3">
                    <div class="col-2">
                        <label class="form-label text-start w-100" for="v-year">Year</label>
                        <input type="number" class="form-control" id='v-year' name="vehicle_year" placeholder='Enter year of the vehicle' required>
                    </div>
                    <div class="col-3 col-md-3">
                        <label class="form-label text-start w-100" for="v-make">Make</label>
                        <input type="text" class="form-control" id='v-make' name="vehicle_make" placeholder='Enter the make of the car' required>
                    </div>

                    <div class="col-7 col-md-3">
                        <label class="form-label text-start w-100" for="v-make">Model</label>
                        <input type="text" class="form-control" id='v-make' name="vehicle_model" placeholder='Enter the make of the car' required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label text-start w-100" for="v-color">Colour</label>
                        <input type="text" class="form-control" id='v-color' name="vehicle_colour" placeholder='Enter the colour of the car' required>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-6">
                        <label class="form-label text-start w-100" for="v-sn">Serial Number</label>
                        <input type="text" class="form-control" id='v-sn' name="vehicle_sn" placeholder='Enter the serial number of the car' required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-start" for="v-stockNb">StockNumber</label>
                        <input type="text" class="form-control" id='v-stockNb' name="vehicle_stock_number" placeholder='Enter vehicle stock number' required>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-4 col-md-3">
                        <label class="form-label text-start w-100" for="odm-unit">Odometer unit</label>
                        <div class="checkbox-container text-start">
                            <div class="checkbox-group w-49 d-inline-block pe-3">
                                <input type="radio" class="form-check-input" id="mile-unit" name="vehichle_unit" value="mi" required>
                                <label for="mile-unit">MI</label>
                            </div>
                            <div class="checkbox-group w-49 d-inline-block">
                                <input type="radio" class="form-check-input" id="km-unit" name="vehichle_unit" value="km" required>
                                <label for="km-unit">KM</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <label class="form-label text-start w-100" for="odm-read">Odometer reading</label>
                        <input type="number" min="0" step="0.01" class="form-control" id='odm-read' name="vehichle_reading" placeholder='Enter odometer reading' required>
                    </div>
                    <div class="col-4 col-md-5">
                        <label class="form-label text-start w-100" for="retail_selling_price">Retail Selling Price</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="retail_selling_price" name="retail_selling_price" placeholder="Enter retail selling price" required>
                    </div>
                </div>
            
            </fieldset>

            <!-- Extended Service Contract -->
            <fieldset class="border p-2 my-4">
                <legend>Extended Service Contract</legend>
                <div class="row checkbox-container text-start w-75 m-auto">
                    <div class="checkbox-group col-md-4 d-inline-block">
                        <input type="checkbox" id="offered" name="offered" value="offered">
                        <label class="form-label text-start" for="offered">Offered</label>
                    </div>
                    <div class="checkbox-group col-md-4 d-inline-block">
                        <input type="checkbox" id="accepted" name="accepted" value="accepted">
                        <label class="form-label text-start"for="accepted">Accepted</label>
                    </div>
                    <div class="checkbox-group col-md-4 d-inline-block">
                        <input type="checkbox" id="refused" name="refused" value="refused">
                        <label class="form-label text-start" for="refused">Refused</label>
                    </div>
                </div>
            </fieldset>

            <!-- Trade-In description and lien disclosure -->
            <fieldset class="border p-2 my-4">
                <legend>Trade-In description and lien disclosure</legend>
                
                <div class="row my-3">
                    <div class="col-2">
                        <label class="form-label text-start w-100" for="ti-year">Year</label>
                        <input id="ti-year" class="form-control" type="number" name="tradein_year" placeholder="Enter trade-in's year">
                    </div>
                    <div class="col-3 col-md-3">
                        <label class="form-label text-start w-100" for="ti-make">Make</label>
                        <input id="ti-make" class="form-control" type="text" name="tradein_make" placeholder="Enter trade-in's make">
                    </div>
                    <div class="col-7 col-md-3">
                        <label class="form-label text-start w-100" for="ti-model">Model</label>
                        <input id="ti-model" class="form-control" type="text" name="tradein_model" placeholder="Enter trade-in's model" >
                    </div>
                    <div class="col-md-4">
                        <label class="form-label text-start w-100" for="ti-color">Colour</label>
                        <input type="text" class="form-control" id='ti-color' name="tradein_colour" placeholder="Enter the trade-in's colour">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label text-start w-100" for="ti-model">Serial</label>
                        <input id="ti-model" class="form-control" type="text" name="tradein_serial" placeholder="Enter trade-in's model">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label text-start w-100" for="odm-unit">Odometer unit</label>
                        <div class="checkbox-container text-start">
                            <div class="checkbox-group w-49 d-inline-block px-3">
                                <input type="radio" class="form-check-input" id="ti-mile-unit" name="tradein_unit" value="mi">
                                <label for="ti-mile-unit">MI</label>
                            </div>
                            <div class="checkbox-group w-49 d-inline-block">
                                <input type="radio" class="form-check-input" id="ti-km-unit" name="tradein_unit" value="km">
                                <label for="ti-km-unit">KM</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-start w-100" for="ti-odm-read">Odometer reading</label>
                        <input type="number" min="0" step="0.01" class="form-control" id='ti-odm-read' name="tradein_reading" placeholder="Enter trade-in's odometer reading">
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label class="form-label text-start w-100" for="ti-lien">Lien payable to</label>
                        <input type="text" class="form-control" id='ti-lien' name="tradein_lien_payable" placeholder="Enter the name of lien creditor">
                    </div>
                    <div class="col-md-7">
                        <label class="form-label text-start w-100" for="ti_lien-creditor-address">Address</label>
                        <input type="text" class="form-control" id='ti_lien-creditor-address' name="tradein_address" placeholder="Enter the address of the lien creditor">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-start w-100" for="tradein_lien_amount">Lien amount</label>
                        <input type="number" min="0" step="0.01" class="form-control" id='tradein_lien_amount' name="tradein_lien_amount" placeholder="Enter the amount due for the lien on the trade vehicle">
                    </div>
                </div>

            </fieldset>

            <!-- Final terms of settlement -->
            <fieldset class="border p-2 my-4">
                <legend>Final terms of settlement</legend>
                
                <div class="row my-3">
                    <div class="col-6 col-md-2">
                        <label class="form-label text-start w-100" for="admin_fee">Admin. fee</label>
                        <input id="admin_fee" class="form-control" type="number" min="0" step="0.01" name="admin_fee" placeholder="Enter amount" required>
                    </div>
                    <div class="col-6 col-md-2">
                        <label class="form-label text-start w-100" for="finance_fee">Finance fee</label>
                        <input id="finance_fee" class="form-control" type="number" min="0" step="0.01" name="finance_fee" placeholder="Enter amount" required>
                    </div>
                    <div class="col-6 col-md-2">
                        <label class="form-label text-start w-100" for="sec_trans">Security trans.</label>
                        <input id="sec_trans" class="form-control" type="number" min="0" step="0.01" name="sec_trans" placeholder="Enter amount"  required>
                    </div>
                    <div class="col-6 col-md-2">
                        <label class="form-label text-start w-100" for="registration_fee">Reg./PPSA</label>
                        <input type="number" min="0" step="0.01" class="form-control" id='registration_fee' name="registration_fee" placeholder="Enter amount" required>
                    </div>
                    <div class="col-12 col-md-2">
                        <label class="form-label text-start w-100" for="eextended_service_contract">Ext. service contract</label>
                        <input type="number" min="0" step="0.01" class="form-control" id='extended_service_contract' name="extended_service_contract" placeholder="Enter amount" required>
                    </div>
                    <div class="col-6 col-md-2">
                        <label class="form-label text-start w-100" for="downpayment">Downpayment</label>
                        <input id="downpayment" min="0" step="0.01" class="form-control" type="number" name="downpayment" placeholder="Enter amount" required>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-12 col-md-2">
                        <label class="form-label text-start w-100" for="payout_lien">Payout lien on trade</label>
                        <input id="payout_lien" class="form-control" type="number" min="0" step="0.01" name="payout_lien" placeholder="Enter amount">
                    </div>
                </div>

            </fieldset>

            <div class="form-submit">
                <input type="submit" class="btn btn-primary" name="Generate PDF" value="Submit" />
            </div>

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>
<!-- https://www.phptutorial.net/php-tutorial/php-sanitize-input/#:~:text=Sanitizing%20input%20means%20removing%20illegal,filter_input() -->


</html>