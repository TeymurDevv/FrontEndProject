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
                        <div spacing="6" class="sc-f9f87792-0 iDcdHF"><div spacing="6" class="sc-f9f87792-0 gUQLfL"><form><div class="sc-446d69a0-0 sc-47afe257-0 sc-be99ec58-0 jjGOCv dUsPBd dTVsOw"><div font-weight="600" class="sc-a7fb2b58-0 dyFJTH">Shipping Address</div><div spacing="7" class="sc-f9f87792-0 jXxPLz"><div spacing="7" class="sc-f9f87792-0 cGkqeB"><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.7169895577521057">Full Name</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="shipping_name" value="" id="0.7169895577521057"></div></div><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.8267482674134758">Phone Number</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="shipping_contact" value="" id="0.8267482674134758"></div></div><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.282364389103098">Zip Code</label><div class="sc-446d69a0-0 iJVDGS"><input type="number" class="sc-59ed7ff3-0 hbeBfW" name="shipping_zip" value="" id="0.282364389103098"></div></div><div color="default" class="sc-59ed7ff3-1 fDGkem"><label for="0.7347089238344444">Address 1</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="shipping_address1" value="" id="0.7347089238344444"></div></div></div><div spacing="7" class="sc-f9f87792-0 cGkqeB"><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.525437646952049">Email Address</label><div class="sc-446d69a0-0 iJVDGS"><input type="email" class="sc-59ed7ff3-0 hbeBfW" name="shipping_email" value="" id="0.525437646952049"></div></div><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.1504533421593235">Company</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="shipping_company" value="" id="0.1504533421593235"></div></div><div class="sc-446d69a0-0 kHuoBk"><div font-size="0.875rem" class="sc-a7fb2b58-0 fCxSFH">Country</div><div class=" css-b62m3t-container"><span id="react-select-2-live-region" class="css-7pg0cj-a11yText"></span><span aria-live="polite" aria-atomic="false" aria-relevant="additions text" role="log" class="css-7pg0cj-a11yText"></span><div class=" css-1g9kk8x-control"><div class=" css-hlgwow"><div class=" css-1jqq78o-placeholder" id="react-select-2-placeholder">Select...</div><div class=" css-1v861sj" data-value=""><input class="" style="label:input;color:inherit;background:0;opacity:1;width:100%;grid-area:1 / 2;font:inherit;min-width:2px;border:0;margin:0;outline:0;padding:0" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-2-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" role="combobox" aria-activedescendant="" aria-describedby="react-select-2-placeholder" value=""></div></div><div class=" css-1wy0on6"><span class=" css-1jo998o-indicatorSeparator"></span><div class=" css-ta4ch-indicatorContainer" aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div><div color="default" class="sc-59ed7ff3-1 fDGkem"><label for="0.4961107815729904">Address 2</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="shipping_address2" value="" id="0.4961107815729904"></div></div></div></div></div><div class="sc-446d69a0-0 sc-47afe257-0 sc-be99ec58-0 jjGOCv dUsPBd dTVsOw"><div font-weight="600" class="sc-a7fb2b58-0 dyFJTH">Billing Address</div><div size="18" color="secondary.main" class="sc-e82b8807-1 hUqeJt"><input type="checkbox" color="secondary" class="sc-e82b8807-0 joWiVZ" id="0.03407160250532093"><label for="0.03407160250532093">Same as shipping address</label></div><div spacing="7" class="sc-f9f87792-0 jXxPLz"><div spacing="7" class="sc-f9f87792-0 cGkqeB"><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.6382696427689283">Full Name</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="billing_name" value="" id="0.6382696427689283"></div></div><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.04697724052618568">Phone Number</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="billing_contact" value="" id="0.04697724052618568"></div></div><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.8161051867337197">Zip Code</label><div class="sc-446d69a0-0 iJVDGS"><input type="number" class="sc-59ed7ff3-0 hbeBfW" name="billing_zip" value="" id="0.8161051867337197"></div></div><div color="default" class="sc-59ed7ff3-1 fDGkem"><label for="0.2691994421199464">Address 1</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="billing_address1" value="" id="0.2691994421199464"></div></div></div><div spacing="7" class="sc-f9f87792-0 cGkqeB"><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.48792146562144034">Email Address</label><div class="sc-446d69a0-0 iJVDGS"><input type="email" class="sc-59ed7ff3-0 hbeBfW" name="billing_email" value="" id="0.48792146562144034"></div></div><div color="default" class="sc-59ed7ff3-1 iepmos"><label for="0.3904262017182296">Company</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="billing_company" value="" id="0.3904262017182296"></div></div><div class="sc-446d69a0-0 kHuoBk"><div font-size="0.875rem" class="sc-a7fb2b58-0 fCxSFH">Country</div><div class=" css-b62m3t-container"><span id="react-select-3-live-region" class="css-7pg0cj-a11yText"></span><span aria-live="polite" aria-atomic="false" aria-relevant="additions text" role="log" class="css-7pg0cj-a11yText"></span><div class=" css-1g9kk8x-control"><div class=" css-hlgwow"><div class=" css-1jqq78o-placeholder" id="react-select-3-placeholder">Select...</div><div class=" css-1v861sj" data-value=""><input class="" style="label:input;color:inherit;background:0;opacity:1;width:100%;grid-area:1 / 2;font:inherit;min-width:2px;border:0;margin:0;outline:0;padding:0" autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-3-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" role="combobox" aria-activedescendant="" aria-describedby="react-select-3-placeholder" value=""></div></div><div class=" css-1wy0on6"><span class=" css-1jo998o-indicatorSeparator"></span><div class=" css-ta4ch-indicatorContainer" aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg"><path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path></svg></div></div></div></div></div><div color="default" class="sc-59ed7ff3-1 fDGkem"><label for="0.7426846778144642">Address 2</label><div class="sc-446d69a0-0 iJVDGS"><input class="sc-59ed7ff3-0 hbeBfW" name="billing_address2" value="" id="0.7426846778144642"></div></div></div></div></div><div spacing="7" class="sc-f9f87792-0 jXxPLz"><div spacing="7" class="sc-f9f87792-0 cGkqeB"><a href="/cart"><button color="primary" type="button" class="sc-abdb40c5-0 gTpigT">Back to Cart</button></a></div><div spacing="7" class="sc-f9f87792-0 cGkqeB"><button color="primary" type="submit" class="sc-abdb40c5-0 bKGuCZ">Proceed to Payment</button></div></div></form></div><div spacing="6" class="sc-f9f87792-0 rLALv"><div class="sc-446d69a0-0 sc-47afe257-0 sc-be99ec58-0 kPjLuq gRAUNU dTVsOw"><div class="sc-446d69a0-0 sc-f21d0562-0 eQLTii jlXztF"><div color="text.hint" class="sc-a7fb2b58-0 eiyUWt">Subtotal:</div><div class="sc-446d69a0-0 sc-f21d0562-0 dZoEOI kqMzCX"><div font-size="18px" font-weight="600" class="sc-a7fb2b58-0 ioiIeK">$2610.</div><div font-weight="600" font-size="14px" class="sc-a7fb2b58-0 bsTDju">00</div></div></div><div class="sc-446d69a0-0 sc-f21d0562-0 eQLTii jlXztF"><div color="text.hint" class="sc-a7fb2b58-0 eiyUWt">Shipping:</div><div class="sc-446d69a0-0 sc-f21d0562-0 dZoEOI kqMzCX"><div font-size="18px" font-weight="600" class="sc-a7fb2b58-0 ioiIeK">-</div></div></div><div class="sc-446d69a0-0 sc-f21d0562-0 eQLTii jlXztF"><div color="text.hint" class="sc-a7fb2b58-0 eiyUWt">Tax:</div><div class="sc-446d69a0-0 sc-f21d0562-0 dZoEOI kqMzCX"><div font-size="18px" font-weight="600" class="sc-a7fb2b58-0 ioiIeK">$40.</div><div font-weight="600" font-size="14px" class="sc-a7fb2b58-0 bsTDju">00</div></div></div><div class="sc-446d69a0-0 sc-f21d0562-0 itQAHo dyrtjn"><div color="text.hint" class="sc-a7fb2b58-0 eiyUWt">Discount:</div><div class="sc-446d69a0-0 sc-f21d0562-0 dZoEOI kqMzCX"><div font-size="18px" font-weight="600" class="sc-a7fb2b58-0 ioiIeK">-</div></div></div><div class="sc-cef2b1bb-0 bolEeN"></div><div font-size="25px" font-weight="600" class="sc-a7fb2b58-0 JJLkt">$2610.00</div><div color="default" placeholder="Voucher" class="sc-59ed7ff3-1 fDGkem"><div class="sc-446d69a0-0 iJVDGS"><input placeholder="Voucher" class="sc-59ed7ff3-0 hbeBfW" id="0.558808961352224"></div></div><button color="primary" class="sc-abdb40c5-0 kFBCnD">Apply Voucher</button></div></div></div>
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