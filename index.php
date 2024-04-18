<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-pro-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./assets/slick/slick-theme.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/header2.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <title>Document</title>
</head>

<body>
    <?php require("./layouts/header.php") ?>
    <?php require("./layouts/header1.php") ?>
    <?php require("./layouts/sidebar.php") ?>

    <section id="main">
        <div class="container">
            <div class="row justify-content-end  ">
                <div class="col-lg-3 col-sm-3 d-none"></div>
                <div class="col-lg-9 col-sm-12 ">
                    <div class="slider">
                        <div>
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-sm-9 ">
                                    <div class="slider-text">
                                        <h1 class="title">50% Off For Your First Shopping</h1>
                                        <p class="description">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit. Quis
                                            lobortis consequat
                                            eu, quam etiam <br> at quis ut convalliss.</p>
                                        <button>Shop Now</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="d-flex justify-content-end ">
                                        <img src="./assets/img/apple-watch-0.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-sm-9 ">
                                    <div class="slider-text">
                                        <h1 class="title">50% Off For Your First Shopping</h1>
                                        <p class="description">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit. Quis
                                            lobortis consequat
                                            eu, quam etiam <br> at quis ut convalliss.</p>
                                        <button>Shop Now</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="d-flex justify-content-end ">
                                        <img src="./assets/img/apple-watch-0.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="flash">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="d-flex gap-3 mt-5 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            class="injected-svg" data-src="/assets/images/icons/light.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                            <path d="M19.0765 9.48063H12.1242L15.5905 0L5 14.5194H11.9522L8.48592 24L19.0765 9.48063Z"
                                fill="#D23F57"></path>
                        </svg>
                        <h2 class="sc-a7fb2b58-0 EKIZr fw-bolder">Flash Deals</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php require("./layouts/footer.php") ?>
</body>

</html>

<script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="./assets/jQuery/jquery-3.7.1.min.js"></script>
<script src="./assets/slick/slick.min.js"></script>

<script>
    $(document).ready(function () {
        $('.slider').slick({

            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 2,
            autoplay: true, responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
            ],
            prevArrow: ' <span class="previous_arrow"><i class="fa-solid fa-arrow-left"></i></span>',
            nextArrow: ' <span class="next_arrow"><i class="fa-solid fa-arrow-right"></i></span>'
        });
    });


</script>