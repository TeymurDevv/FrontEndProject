<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonik | Single Product</title>
</head>

<body>
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-pro-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/header2.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <?php 
    require("./layouts/header.php");
    require("./layouts/header1.php");
    require("./layouts/sidebar.php");
    ?>
    <main>
        <div class="container pt-1">

            <div class="searching-for">
                <div>
                    <h5 class="search-text">Searching for “ mobile phone ”</h5>
                    <p class="result-count-text">48 results found</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">

                </div>
            </div>
        </div>        
    </main>

    <?php require("./layouts/footer.php"); ?>

</body>

<style>
    .CategoriesPart {
        display: none;
    }
</style>

</html>