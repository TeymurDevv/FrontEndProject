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
        <div class="container">
            <div class="row mb-5">
                <div class="productsContainer">
                    <div>
                        <h5 class="searchHeading">Searching for “ mobile phone ”</h5>
                        <p class="searchHeading">48 results found</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center position-relative gap-3">
                        <p class="mb-0 mr-2 sortBy">Sort by:</p>
                        <div class="sortingDropdown">
                            Relevance
                            <div class="sortingCategories"></div>
                            <i class="fa-solid fa-chevron-down dropdownArrow"></i>
                        </div>
                        <p class="mb-0 mr-2 viewStyle">View:</p>
                        <img src="http://www.w3.org/2000/svg/grid.svg" alt="Grid View" class="gridIcon">
                        <div><img src="http://www.w3.org/2000/svg/menu.svg" alt="List View" class="menuIcon"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebarSection">
                        <h6 class="sidebarHeading">Categories</h6>
                        <div class="sidebarItem d-flex justify-content-between">
                            <span>Bath Preparations</span>
                            <div class="iconBar">
                                <img src="http://www.w3.org/2000/svg/chevron-right.svg" alt="Expand" class="chevronIcon">
                            </div>
                        </div>
                        <div class="dropdownContent">
                            <p>Bubble Bath</p>
                            <p>Bath Capsules</p>
                            <p>Others</p>
                        </div>
                        <p class="sidebarItem">Eye Makeup Preparations</p>
                        <p class="sidebarItem">Fragrance</p>
                        <p class="sidebarItem">Hair Preparations</p>
                        <div class="divider"></div>
                        <h6 class="sidebarHeading">Price Range</h6>
                        <div class="something2 d-flex align-items-center gap-2 mb-5">
                            <input type="number" class="priceInput">
                            <h5>-</h5>
                            <input type="number" class="priceInput">
                        </div>
                        <h6 class="sidebarHeading">Brands</h6>
                        <ul>
                            <li>Maccs</li>
                            <li>Karts</li>
                            <li>Baars</li>
                            <li>Bukks</li>
                            <li>Bukks</li>
                        </ul>
                        <div class="divider"></div>
                        <ul>
                            <li>On Sale</li>
                            <li>In Stock</li>
                            <li>Featured</li>
                        </ul>
                        <div class="divider"></div>
                        <h6 class="sidebarHeading">Ratings</h6>
                        <ul class="ratings">
                            <li><img src="http://www.w3.org/2000/svg/star.svg" alt="Star Rating" class="ratingStar"></li>
                            <li><img src="http://www.w3.org/2000/svg/star.svg" alt="Star Rating" class="ratingStar"></li>
                            <li><img src="http://www.w3.org/2000/svg/star.svg" alt="Star Rating" class="ratingStar"></li>
                        </ul>
                        <div class="divider"></div>
                        <h6 class="sidebarHeading">Colors</h6>
                        <div class="colorSwatch d-flex gap-3 align-items-center">
                            <div class="colorCircle" style="background-color: black;"></div>
                            <div class="colorCircle" style="background-color: red;"></div>
                            <div class="colorCircle" style="background-color: orange;"></div>
                            <div class="colorCircle" style="background-color: green;"></div>
                            <div class="colorCircle" style="background-color: lightskyblue;"></div>
                            <div class="colorCircle" style="background-color: purple;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row products-row"></div>
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