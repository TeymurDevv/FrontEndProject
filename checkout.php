<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/header2.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <link rel="stylesheet" href="./assets/css/flash-products.css">
    <title>Document</title>
</head>

<body>

    <?php 
    require("./layouts/header.php");
    require("./layouts/header1.php");
    require("./layouts/sidebar.php");
    ?>

    <main>

        <div class="container custom-container">
            <div class="col-lg-8">

                <div class="stage">
                    <div class="stage-passed">
                        1. Cart
                    </div>

                    <div class="passed-line">

                    </div>

                    <div class="stage-passed">
                        2. Details
                    </div>

                    <div class="un-passed-line">

                    </div>

                    <div class="stage-unpassed">
                        3. Payment
                    </div>

                    <div class="un-passed-line">

                    </div>

                    <div class="stage-unpassed">
                        4. Renew
                    </div>
                </div>

                <div class="form-box form-padding">
                    <div class="shipping-form form-design">
                        <div class="form-inbox ">
                            <div class="form-title">
                                Shipping Address
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-input-box">
                                        <label for="full-name" class="form-label">Full Name</label>
                                        <input class="form-input" type="text" name="full-name" id="full-name">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="phone-number" class="form-label">Phone Number</label>
                                        <input class="form-input" type="text" name="phone-number" id="phone-number">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="zip-code" class="form-label">Zip Code</label>
                                        <input class="form-input" type="text" name="zip-code" id="zip-code">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="address" class="form-label">Address 1</label>
                                        <input class="form-input" type="text" name="address" id="address">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-input-box">
                                        <label for="e-mail" class="form-label">Email Address</label>
                                        <input class="form-input" type="text" name="e-mail" id="e-mail">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="company" class="form-label">Company</label>
                                        <input class="form-input" type="text" name="company" id="company">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="country" class="form-label">Country</label>
                                        <input class="form-input" type="text" name="country" id="country">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="address2" class="form-label">Address 2</label>
                                        <input class="form-input" type="text" name="address2" id="address2">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-box form-padding">
                    <div class="shipping-form form-design">
                        <div class="form-inbox ">
                            <div class="form-title">
                                Billing Address
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-input-box">
                                        <label for="full-name" class="form-label">Full Name</label>
                                        <input class="form-input" type="text" name="full-name" id="full-name">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="phone-number" class="form-label">Phone Number</label>
                                        <input class="form-input" type="text" name="phone-number" id="phone-number">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="zip-code" class="form-label">Zip Code</label>
                                        <input class="form-input" type="text" name="zip-code" id="zip-code">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="address" class="form-label">Address 1</label>
                                        <input class="form-input" type="text" name="address" id="address">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-input-box">
                                        <label for="e-mail" class="form-label">Email Address</label>
                                        <input class="form-input" type="text" name="e-mail" id="e-mail">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="company" class="form-label">Company</label>
                                        <input class="form-input" type="text" name="company" id="company">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="country" class="form-label">Country</label>
                                        <input class="form-input" type="text" name="country" id="country">
                                    </div>

                                    <div class="form-input-box">
                                        <label for="address2" class="form-label">Address 2</label>
                                        <input class="form-input" type="text" name="address2" id="address2">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">

            </div>
        </div>

    </main>

    <?php require("./layouts/footer.php"); ?>

    <style>
        .CategoriesPart {
            display: none;
        }
    </style>

</body>

</html>