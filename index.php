<!DOCTYPE html>
<html>

<head>


    <style>
    .form-group>.row1 {
        grid-column: 1/span2;
    }

    .form-group>.row2 {
        grid-column: 1 / span2;
    }
    </style>
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container m-auto">
        <div class="form-container">

            <h2 class="text-center p-3">Customer Details</h2>
            <form action="insert.php" method="POST">
                <div class="form-group">
                    <label for="first_name">Full name:</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="first_name" placeholder="First" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="last_name" placeholder="Last" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address_line1">Address:</label>
                    <input type="text" class="form-control" name="address_line1" placeholder="Address line 1" required>
                    <input type="text" class="form-control mt-2" name="address_line2" placeholder="Address line 2">
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="region" placeholder="Region" required>
                        </div>
                    </div>
                    <input type="text" class="form-control mt-2" name="postal_code" placeholder="Postal / Zip Code"
                        required>
                    <select class="form-control mt-2" name="country" required>
                        <option value="United States">United States</option>
                        <option value="Bangladesh">Bangladesh</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" pattern="^\d{11}$"
                        title="Phone number must be 11 digits" required>
                </div>

                <div class="form-group">
                    <label for="found_us">Where did you find us?</label>
                    <select class="form-control" name="found_us">
                        <option value="facebook">Facebook</option>
                        <option value="reference">Reference</option>>
                    </select>
                </div>

                <div class="form-group">
                    <label for="feedback">Give us some feedback:</label>
                    <textarea class="form-control" name="feedback" required></textarea>
                </div>

                <div class="form-group">
                    <label>Will you be willing to recommend us?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="recommend_us" value="1" required>
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="recommend_us" value="0" required>
                        <label class="form-check-label">No</label>
                    </div>
                </div>






                <h3 class="mt-4">Please give reference of any two people</h3>
                <div class="form-group">
                    <label for="ref1_first_name">Reference 1 Name:</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="ref1_first_name" placeholder="First">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="ref1_last_name" placeholder="Last">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control mt-2" name="ref1_email"
                                placeholder="Reference 1 email">
                        </div>
                        <div class="col"><input type="text" class="form-control mt-2" name="ref1_phone"
                                placeholder="Reference 1 phone">
                        </div>


                    </div>





                    <div class="form-group">
                        <label for="ref2_first_name">Reference 2 Name:</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="ref2_first_name" placeholder="First">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="ref2_last_name" placeholder="Last">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col"><input type="email" class="form-control mt-2" name="ref2_email"
                                    placeholder="Reference 2 email"></div>
                            <div class="col"> <input type="text" class="form-control mt-2" name="ref2_phone"
                                    placeholder="Reference 2 phone"></div>

                            <br><br>


                        </div>
                    </div>








                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    <br>
                    <br>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>