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

        <div class="container">
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

                    <div class="passed-line">

                    </div>

                    <div>
                        3. Payment
                    </div>

                    <div>

                    </div>

                    <div>
                        4. Renew
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