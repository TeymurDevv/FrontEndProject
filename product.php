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
                                <img src="http://www.w3.org/2000/svg/chevron-right.svg" alt="Expand"
                                    class="chevronIcon">
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
                            <div color="warn" value="5" readonly="" class="sc-e02ba328-0 gSOdBv"><svg width="15"
                                    height="15" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                    stroke-linejoin="round" fill="url(#star-0.7727068980736143)"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E" class="feather feather-star">
                                    <defs>
                                        <linearGradient id="star-0.7727068980736143">
                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg><svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" fill="url(#star-0.04046454536049926)"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E" class="feather feather-star">
                                    <defs>
                                        <linearGradient id="star-0.04046454536049926">
                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg><svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" fill="url(#star-0.8729094346006505)"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E" class="feather feather-star">
                                    <defs>
                                        <linearGradient id="star-0.8729094346006505">
                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg><svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" fill="url(#star-0.9732772316888592)"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E" class="feather feather-star">
                                    <defs>
                                        <linearGradient id="star-0.9732772316888592">
                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                                <svgwidth="15" height="15" stroke-width="2" viewbox="0 0 24 24" stroke-linecap="round"
                                    stroke-linejoin="round" fill="url(#star-0.49358670042043573)"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E" class="feather feather-star">
                                    <defs>
                                        <lineargradient id="star-0.49358670042043573">
                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1"></stop>
                                        </lineargradient>
                                    </defs>
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>

                                </svgwidth="15">
                            </div>
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
                    <div class="row products-row">
                    <div>
                            <div>
                                <div class="flash-card position-relative " data-id="1">
                                    <div class="imageSection">
                                        <div class="icons">25<!-- -->% off</div>
                                        <img src="./assets/img/flash-1.webp" alt="">
                                    </div>
                                    <div class="section2">
                                        <div class="flash-card-text">
                                            <h3 class="flash-card-title">NikeCourt Zoom Vapor Cage</h3>
                                            <div class="mb-2 ">
                                                <svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.07426802030669477)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.07426802030669477">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.6453173060689739)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.6453173060689739">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.2846026415560736)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.2846026415560736">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.009203426400553827)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.009203426400553827">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.5107456186097816)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.5107456186097816">
                                                            <stop offset="0" stop-color="#FFCD4E"></stop>
                                                            <stop offset="0" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </div>
                                            <div class="section3">
                                                <div class="price d-flex ">
                                                    <span class="salePrice">$187.50</span>
                                                    <span class="normalPrice"><del>$250.00</del></span>
                                                </div>
                                                <div class="icon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="IconAdd" fill="red"
                                                        width="20" height="20" viewBox="0 0 18 18" fill="red"
                                                        class="injected-svg" data-src="/assets/images/icons/plus.svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 2.74999C9.55228 2.74999 10 3.19771 10 3.74999V14.25C10 14.8023 9.55228 15.25 9 15.25C8.44772 15.25 8 14.8023 8 14.25V3.74999C8 3.19771 8.44772 2.74999 9 2.74999Z"
                                                            fill="red"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.75 9C2.75 8.44772 3.19772 8 3.75 8H14.25C14.8023 8 15.25 8.44772 15.25 9C15.25 9.55228 14.8023 10 14.25 10H3.75C3.19772 10 2.75 9.55228 2.75 9Z"
                                                            fill="red"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="flash-card position-relative " data-id="1">
                                    <div class="imageSection">
                                        <div class="icons">25<!-- -->% off</div>
                                        <img src="./assets/img/flash-1.webp" alt="">
                                    </div>
                                    <div class="section2">
                                        <div class="flash-card-text">
                                            <h3 class="flash-card-title">NikeCourt Zoom Vapor Cage</h3>
                                            <div class="mb-2 ">
                                                <svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.07426802030669477)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.07426802030669477">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.6453173060689739)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.6453173060689739">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.2846026415560736)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.2846026415560736">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.009203426400553827)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.009203426400553827">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.5107456186097816)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.5107456186097816">
                                                            <stop offset="0" stop-color="#FFCD4E"></stop>
                                                            <stop offset="0" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </div>
                                            <div class="section3">
                                                <div class="price d-flex ">
                                                    <span class="salePrice">$187.50</span>
                                                    <span class="normalPrice"><del>$250.00</del></span>
                                                </div>
                                                <div class="icon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="IconAdd" fill="red"
                                                        width="20" height="20" viewBox="0 0 18 18" fill="red"
                                                        class="injected-svg" data-src="/assets/images/icons/plus.svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 2.74999C9.55228 2.74999 10 3.19771 10 3.74999V14.25C10 14.8023 9.55228 15.25 9 15.25C8.44772 15.25 8 14.8023 8 14.25V3.74999C8 3.19771 8.44772 2.74999 9 2.74999Z"
                                                            fill="red"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.75 9C2.75 8.44772 3.19772 8 3.75 8H14.25C14.8023 8 15.25 8.44772 15.25 9C15.25 9.55228 14.8023 10 14.25 10H3.75C3.19772 10 2.75 9.55228 2.75 9Z"
                                                            fill="red"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="flash-card position-relative " data-id="1">
                                    <div class="imageSection">
                                        <div class="icons">25<!-- -->% off</div>
                                        <img src="./assets/img/flash-1.webp" alt="">
                                    </div>
                                    <div class="section2">
                                        <div class="flash-card-text">
                                            <h3 class="flash-card-title">NikeCourt Zoom Vapor Cage</h3>
                                            <div class="mb-2 ">
                                                <svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.07426802030669477)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.07426802030669477">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.6453173060689739)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.6453173060689739">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.2846026415560736)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.2846026415560736">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.009203426400553827)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.009203426400553827">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.5107456186097816)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.5107456186097816">
                                                            <stop offset="0" stop-color="#FFCD4E"></stop>
                                                            <stop offset="0" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </div>
                                            <div class="section3">
                                                <div class="price d-flex ">
                                                    <span class="salePrice">$187.50</span>
                                                    <span class="normalPrice"><del>$250.00</del></span>
                                                </div>
                                                <div class="icon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="IconAdd" fill="red"
                                                        width="20" height="20" viewBox="0 0 18 18" fill="red"
                                                        class="injected-svg" data-src="/assets/images/icons/plus.svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 2.74999C9.55228 2.74999 10 3.19771 10 3.74999V14.25C10 14.8023 9.55228 15.25 9 15.25C8.44772 15.25 8 14.8023 8 14.25V3.74999C8 3.19771 8.44772 2.74999 9 2.74999Z"
                                                            fill="red"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.75 9C2.75 8.44772 3.19772 8 3.75 8H14.25C14.8023 8 15.25 8.44772 15.25 9C15.25 9.55228 14.8023 10 14.25 10H3.75C3.19772 10 2.75 9.55228 2.75 9Z"
                                                            fill="red"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="flash-card position-relative " data-id="1">
                                    <div class="imageSection">
                                        <div class="icons">25<!-- -->% off</div>
                                        <img src="./assets/img/flash-1.webp" alt="">
                                    </div>
                                    <div class="section2">
                                        <div class="flash-card-text">
                                            <h3 class="flash-card-title">NikeCourt Zoom Vapor Cage</h3>
                                            <div class="mb-2 ">
                                                <svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.07426802030669477)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.07426802030669477">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.6453173060689739)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.6453173060689739">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.2846026415560736)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.2846026415560736">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.009203426400553827)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.009203426400553827">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.5107456186097816)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.5107456186097816">
                                                            <stop offset="0" stop-color="#FFCD4E"></stop>
                                                            <stop offset="0" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </div>
                                            <div class="section3">
                                                <div class="price d-flex ">
                                                    <span class="salePrice">$187.50</span>
                                                    <span class="normalPrice"><del>$250.00</del></span>
                                                </div>
                                                <div class="icon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="IconAdd" fill="red"
                                                        width="20" height="20" viewBox="0 0 18 18" fill="red"
                                                        class="injected-svg" data-src="/assets/images/icons/plus.svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 2.74999C9.55228 2.74999 10 3.19771 10 3.74999V14.25C10 14.8023 9.55228 15.25 9 15.25C8.44772 15.25 8 14.8023 8 14.25V3.74999C8 3.19771 8.44772 2.74999 9 2.74999Z"
                                                            fill="red"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.75 9C2.75 8.44772 3.19772 8 3.75 8H14.25C14.8023 8 15.25 8.44772 15.25 9C15.25 9.55228 14.8023 10 14.25 10H3.75C3.19772 10 2.75 9.55228 2.75 9Z"
                                                            fill="red"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="flash-card position-relative " data-id="1">
                                    <div class="imageSection">
                                        <div class="icons">25<!-- -->% off</div>
                                        <img src="./assets/img/flash-1.webp" alt="">
                                    </div>
                                    <div class="section2">
                                        <div class="flash-card-text">
                                            <h3 class="flash-card-title">NikeCourt Zoom Vapor Cage</h3>
                                            <div class="mb-2 ">
                                                <svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.07426802030669477)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.07426802030669477">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.6453173060689739)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.6453173060689739">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.2846026415560736)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.2846026415560736">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.009203426400553827)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.009203426400553827">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.5107456186097816)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.5107456186097816">
                                                            <stop offset="0" stop-color="#FFCD4E"></stop>
                                                            <stop offset="0" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </div>
                                            <div class="section3">
                                                <div class="price d-flex ">
                                                    <span class="salePrice">$187.50</span>
                                                    <span class="normalPrice"><del>$250.00</del></span>
                                                </div>
                                                <div class="icon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="IconAdd" fill="red"
                                                        width="20" height="20" viewBox="0 0 18 18" fill="red"
                                                        class="injected-svg" data-src="/assets/images/icons/plus.svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 2.74999C9.55228 2.74999 10 3.19771 10 3.74999V14.25C10 14.8023 9.55228 15.25 9 15.25C8.44772 15.25 8 14.8023 8 14.25V3.74999C8 3.19771 8.44772 2.74999 9 2.74999Z"
                                                            fill="red"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.75 9C2.75 8.44772 3.19772 8 3.75 8H14.25C14.8023 8 15.25 8.44772 15.25 9C15.25 9.55228 14.8023 10 14.25 10H3.75C3.19772 10 2.75 9.55228 2.75 9Z"
                                                            fill="red"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="flash-card position-relative " data-id="1">
                                    <div class="imageSection">
                                        <div class="icons">25<!-- -->% off</div>
                                        <img src="./assets/img/flash-1.webp" alt="">
                                    </div>
                                    <div class="section2">
                                        <div class="flash-card-text">
                                            <h3 class="flash-card-title">NikeCourt Zoom Vapor Cage</h3>
                                            <div class="mb-2 ">
                                                <svg width="15" height="15" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.07426802030669477)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.07426802030669477">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.6453173060689739)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.6453173060689739">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.2846026415560736)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.2846026415560736">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.009203426400553827)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.009203426400553827">
                                                            <stop offset="1" stop-color="#FFCD4E"></stop>
                                                            <stop offset="1" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg><svg width="17" height="17" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    fill="url(#star-0.5107456186097816)"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFCD4E"
                                                    class="feather feather-star">
                                                    <defs>
                                                        <linearGradient id="star-0.5107456186097816">
                                                            <stop offset="0" stop-color="#FFCD4E"></stop>
                                                            <stop offset="0" stop-color="#FFFFFF" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                            </div>
                                            <div class="section3">
                                                <div class="price d-flex ">
                                                    <span class="salePrice">$187.50</span>
                                                    <span class="normalPrice"><del>$250.00</del></span>
                                                </div>
                                                <div class="icon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="IconAdd" fill="red"
                                                        width="20" height="20" viewBox="0 0 18 18" fill="red"
                                                        class="injected-svg" data-src="/assets/images/icons/plus.svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 2.74999C9.55228 2.74999 10 3.19771 10 3.74999V14.25C10 14.8023 9.55228 15.25 9 15.25C8.44772 15.25 8 14.8023 8 14.25V3.74999C8 3.19771 8.44772 2.74999 9 2.74999Z"
                                                            fill="red"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.75 9C2.75 8.44772 3.19772 8 3.75 8H14.25C14.8023 8 15.25 8.44772 15.25 9C15.25 9.55228 14.8023 10 14.25 10H3.75C3.19772 10 2.75 9.55228 2.75 9Z"
                                                            fill="red"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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