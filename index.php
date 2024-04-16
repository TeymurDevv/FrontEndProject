
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-pro-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/header2.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <title>Document</title>
</head>
<body>
    <?php require("./layouts/header.php") ?>
    <?php require("./layouts/header1.php") ?>
    <?php require("./layouts/sidebar.php") ?>
    <?php require("./layouts/footer.php") ?>
</body>
</html>



<script>
        $(document).ready(function () {
            $('.slider1').slick({

                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true, responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                ],
                prevArrow: ' <span class="priv_arrow"><i class="fa-solid fa-arrow-left"></i></span>',
                nextArrow: ' <span class="next_arrow"><i class="fa-solid fa-arrow-right"></i></span>'
            });

            $(".silder2").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
            })
            $(".slider3").slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                autoplay: true,
                prevArrow: ' <span class="priv_arrow"><i class="fa-solid fa-arrow-left"></i></span>',
                nextArrow: ' <span class="next_arrow"><i class="fa-solid fa-arrow-right"></i></span>',
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                ],
            })
            $(".slider4").slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                prevArrow: ' <span class="priv_arrow"><i class="fa-solid fa-arrow-left"></i></span>',
                nextArrow: ' <span class="next_arrow"><i class="fa-solid fa-arrow-right"></i></span>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                ],
            })
        });


    </script>
<script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>