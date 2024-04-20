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
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="./assets/css/single-product.css">
  link
  <title>Document</title>
</head>

<body>

  <?php 
    require("./layouts/header.php");
    require("./layouts/header1.php");
    require("./layouts/sidebar.php");
    ?>

  <main>
    <section class="page-content">
      <section class="car-info flex-col">
        <div class="top-side flex w-full">
          <div class="img">
            <img width="568px" src="src/assets/img/1.Ford2019.png" alt="">
          </div>
          <div class="info w-full flex-col gap-4">
            <h1 class="open-sans text-slate-800 font-700 " style="font-size: 30px;">Lord 2019</h1>
            <span class="open-sans text-sm text-gray-400 ">Brand: <span class="text-slate-800 font-700 ">Ziaomi</span>
            </span>
            <div class="rating-side flex gap-1 items-center">
              <span class="open-sans text-sm text-gray-400">Rated:</span>
              <div class="stars">
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                <span class="open-sans text-sm ml-1">(50)</span>
              </div>
            </div>
            <div class="stock">
              <h2 class="text-red-500 font-700 open-sans" style="font-size: 25px;">$168.00</h2>
              <p class="open-sans text-sm text-gray-400 ">Stock Available</p>
            </div>
            <button class="bg-rose-400 text-white rounded open-sans  font-700  text-sm cursor-pointer ">
              Add to Card
            </button>
            <div class="made flex gap-1 my-4">
              <span class="open-sans text-sm text-gray-400 ">Sold By:</span>
              <span class="open-sans text-sm text-slate-800 font-700 cursor-pointer ">Mobile Store</>
            </div>
          </div>
        </div>
        <div class="bottom flex justify-center w-50-percentage ">
          <div class="content flex gap-1">
            <div class="logo cursor-pointer bordered ">
              <img width="65" src="src/assets/img/1.Ford2019.png" alt="">
            </div>
            <div class="logo cursor-pointer">
              <img width="65" src="src/assets/img/1.Ford2019.png" alt="">
            </div>
          </div>
        </div>
      </section>


      <section class="tabindex-section">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
              type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Descripion</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
              type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Review(3)</button>
          </li>
        </ul>


        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <h2 class="my-4 open-sans font-700" style="font-size: 20px;">Specification:</h2>
            <p class="open-sans text-sm text-slate-800  p-0">Brand: Beats</p>
            <p class="open-sans text-sm text-slate-800  p-0">Model: S450</p>
            <p class="open-sans text-sm text-slate-800  p-0">Wireless Bluetooth Headset</p>
            <p class="open-sans text-sm text-slate-800  p-0">FM Frequency Response: 87.5 – 108 MHz</p>
            <p class="open-sans text-sm text-slate-800  p-0">Feature: FM Radio, Card Supported (Micro SD / TF)</p>
            <p class="open-sans text-sm text-slate-800  p-0">Made in China</p>
          </div>
          <div class="tab-pane fade review-container" id="profile-tab-pane" role="tabpanel"
            aria-labelledby="profile-tab" tabindex="0">
            <div class="avar-side">
              <div class="top flex gap-2-5">
                <div class="top-left">
                  <img src="src/assets/img/avatar.png" width="48px" alt="">
                </div>
                <div class="top-right">
                  <h5 class="open-sans text-base font-700 text-slate-800 m-0 ">Jannie Schumm </h5>
                  <div class="stars-container mb-2 flex items-center gap-1">
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <h6 class="open-sans text-sm mt-2">4.7</h6>
                    <span class="open-sans text-sm text-gray-400">3.3 years ago</span>
                  </div>
                </div>
              </div>
              <div class="bottom">
                <p class="open-sans text-sm text-gray-400 " style="width: 48%;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Varius massa id ut mattis. Facilisis vitae
                  gravida egestas ac account.</p>
              </div>
              <div class="top flex gap-2-5">
                <div class="top-left">
                  <img src="src/assets/img/avatar.png" width="48px" alt="">
                </div>
                <div class="top-right">
                  <h5 class="open-sans text-base font-700 text-slate-800 m-0 ">Jannie Schumm </h5>
                  <div class="stars-container mb-2 flex items-center gap-1">
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <h6 class="open-sans text-sm mt-2">4.7</h6>
                    <span class="open-sans text-sm text-gray-400">3.3 years ago</span>
                  </div>
                </div>
              </div>
              <div class="bottom">
                <p class="open-sans text-sm text-gray-400 " style="width: 48%;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Varius massa id ut mattis. Facilisis vitae
                  gravida egestas ac account.</p>
              </div>
              <div class="top flex gap-2-5">
                <div class="top-left">
                  <img src="src/assets/img/avatar.png" width="48px" alt="">
                </div>
                <div class="top-right">
                  <h5 class="open-sans text-base font-700 text-slate-800 m-0 ">Jannie Schumm </h5>
                  <div class="stars-container mb-2 flex items-center gap-1">
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                    <h6 class="open-sans text-sm mt-2">4.7</h6>
                    <span class="open-sans text-sm text-gray-400">3.3 years ago</span>
                  </div>
                </div>
              </div>
              <div class="bottom">
                <p class="open-sans text-sm text-gray-400 " style="width: 48%;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Varius massa id ut mattis. Facilisis vitae
                  gravida egestas ac account.</p>
              </div>
            </div>
            <div class="form-side my-12">
              <h2 class="open-sans text-slate-800 font-700" style="font-size:25px;">Write a Review for this product</h2>
              <p class="open-sans text-gray-700 font-700">Your Rating
                <span class="text-red-500 text-xl ">*</span>
              </p>
              <div class="stars-container mb-2 flex items-center gap-1 mb-4">
                <i class="fa-solid fa-star text-yellow-500 "></i>
                <i class="fa-solid fa-star text-yellow-500 "></i>
                <i class="fa-solid fa-star text-yellow-500 "></i>
                <i class="fa-solid fa-star text-yellow-500 "></i>
                <i class="fa-solid fa-star text-yellow-500 "></i>
              </div>
              <p class="open-sans text-gray-700 font-700">Your Review
                <span class="text-red-500 text-xl ">*</span>
              </p>
              <textarea required></textarea>
              <button type="submit" disabled>Submit</button>
            </div>
          </div>
        </div>
      </section>

      <section class="reklam-section mt-12 ">
        <div class="title-side">
          <h3 class="open-sans text-slate-800 font-700 mb-6" style="font-size:20px;">Frequently Bought Together</h3>
        </div>
        <div class="reklam-cards-container flex gap-16">
          <div class="short-cards flex gap-10">
            <div class="card-item card-1 flex-col">
              <div class="top">
                <img src="src/assets/img/single-product-img.webp" width="138px" height="143px" alt="">
                <div class="bottom">
                  <p class="open-sans text-sm my-1">Premium Grocery C...</p>
                  <span class="open-sans text-sm text-red-500  ">$222.50</span>
                  <span class="open-sans text-sm text-gray-500" style="text-decoration: line-through;">$250.00</span>
                </div>
              </div>
            </div>
            <div class="card-item  card-2 flex-col">
              <div class="top">
                <img src="src/assets/img/single-product-img.webp" width="138px" height="143px" alt="">
                <div class="bottom">
                  <p class="open-sans text-sm my-1">Premium Grocery C...</p>
                  <span class="open-sans text-sm text-red-500  ">$222.50</span>
                  <span class="open-sans text-sm text-gray-500" style="text-decoration: line-through;">$250.00</span>
                </div>
              </div>
            </div>
            <div class="card-item card-3 flex-col">
              <div class="top">
                <img src="src/assets/img/single-product-img.webp" width="138px" height="143px" alt="">
                <div class="bottom">
                  <p class="open-sans text-sm my-1">Premium Grocery C...</p>
                  <span class="open-sans text-sm text-red-500  ">$222.50</span>
                  <span class="open-sans text-sm text-gray-500" style="text-decoration: line-through;">$250.00</span>
                </div>
              </div>
            </div>
            <div class="card-item card-4  flex-col">
              <div class="top">
                <img src="src/assets/img/single-product-img.webp" width="138px" height="143px" alt="">
                <div class="bottom">
                  <p class="open-sans text-sm my-1">Premium Grocery C...</p>
                  <span class="open-sans text-sm text-red-500  ">$222.50</span>
                  <span class="open-sans text-sm text-gray-500" style="text-decoration: line-through;">$250.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="large-card">
            <div class="card-item flex justify-center items-center flex-col">
              <div class="text">
                <h3 class="open-sans text-rose-500 m-0 font-700" style="font-size: 20px;">$2500</h3>
                <p class="open-sans text-sm text-gray-500 mt-1 mb-4 ">Save $500</p>
              </div>
              <div class="btn-side flex ">
                <button class="bt-1">Add to Cart</button>
                <button class="bt-2">Add to List</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="banner-side mt-12">
        <div class="title-side">
          <h3 class="open-sans text-slate-800 font-700 mb-6" style="font-size:20px;">Also Available at</h3>
        </div>
        <div class="banner-cards flex gap-5">
          <div class="card-item flex-col items-center gap-2-5 justify-center ">
            <img width="48px" src="src/assets/img/bike.png" alt="">
            <p class="open-sans text-slate-800  " style="font-size: 17px;">Scarlett Beauty</p>
          </div>
          <div class="card-item flex-col items-center gap-2-5 justify-center ">
            <img width="48px" src="src/assets/img/bike.png" alt="">
            <p class="open-sans text-slate-800  " style="font-size: 17px;">Scarlett Beauty</p>
          </div>
          <div class="card-item flex-col items-center gap-2-5 justify-center ">
            <img width="48px" src="src/assets/img/bike.png" alt="">
            <p class="open-sans text-slate-800  " style="font-size: 17px;">Scarlett Beauty</p>
          </div>
          <div class="card-item flex-col items-center gap-2-5 justify-center ">
            <img width="48px" src="src/assets/img/bike.png" alt="">
            <p class="open-sans text-slate-800  " style="font-size: 17px;">Scarlett Beauty</p>
          </div>
        </div>
      </section>

      <section class="flash-deal-section flex-col relative mb-10">
        <div class="deals-title flex justify-between mt-8">
          <div class="heading flex gap-2-5 items-center">
            <h2 class="open-sans font-700" style="font-size: 20px;">Related Products</h2>
          </div>
        </div>

        <div class="deals-card-side flex gap-5">
          <div class="card-item flex-col">
            <div class="card-top ">
              <div class="sub-top flex justify-between p-4">
                <div class="first">
                  <span class=" text-white open-sans">
                    25% off
                  </span>
                </div>
                <div class="second flex-col gap-2-5">
                  <i class="fa-solid fa-eye text-cyan-950"></i>
                  <i class="fa-solid fa-heart text-gray-900"></i>
                </div>
              </div>
            </div>

            <div class="card-info ">
              <h3 class="open-sans text-sm text-gray-800">NikeCourt Zoom Vapor Cage</h3>
              <div class="star-container py-2">
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-regular fa-star" style="color: #FFD43B;"></i>
              </div>
              <div class="rating flex justify-between items-center">
                <div class="cost">
                  <span class="text-red-500 open-sans text-sm">$187.50</span>
                  <s class="open-sans text-sm text-gray-500">$250.00</s>
                </div>
                <div class="card">
                  <span>
                    <i class="fa-solid fa-plus"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="card-item flex-col">
            <div class="card-top ">
              <div class="sub-top flex justify-between p-4">
                <div class="first">
                  <span class=" text-white open-sans">
                    25% off
                  </span>
                </div>
                <div class="second flex-col gap-2-5">
                  <i class="fa-solid fa-eye text-cyan-950"></i>
                  <i class="fa-solid fa-heart text-gray-900"></i>
                </div>
              </div>
            </div>

            <div class="card-info ">
              <h3 class="open-sans text-sm text-gray-800">NikeCourt Zoom Vapor Cage</h3>
              <div class="star-container py-2">
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-regular fa-star" style="color: #FFD43B;"></i>
              </div>
              <div class="rating flex justify-between items-center">
                <div class="cost">
                  <span class="text-red-500 open-sans text-sm">$187.50</span>
                  <s class="open-sans text-sm text-gray-500">$250.00</s>
                </div>
                <div class="card">
                  <span>
                    <i class="fa-solid fa-plus"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-item flex-col">
            <div class="card-top ">
              <div class="sub-top flex justify-between p-4">
                <div class="first">
                  <span class=" text-white open-sans">
                    25% off
                  </span>
                </div>
                <div class="second flex-col gap-2-5">
                  <i class="fa-solid fa-eye text-cyan-950"></i>
                  <i class="fa-solid fa-heart text-gray-900"></i>
                </div>
              </div>
            </div>

            <div class="card-info ">
              <h3 class="open-sans text-sm text-gray-800">NikeCourt Zoom Vapor Cage</h3>
              <div class="star-container py-2">
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-regular fa-star" style="color: #FFD43B;"></i>
              </div>
              <div class="rating flex justify-between items-center">
                <div class="cost">
                  <span class="text-red-500 open-sans text-sm">$187.50</span>
                  <s class="open-sans text-sm text-gray-500">$250.00</s>
                </div>
                <div class="card">
                  <span>
                    <i class="fa-solid fa-plus"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-item flex-col">
            <div class="card-top ">
              <div class="sub-top flex justify-between p-4">
                <div class="first">
                  <span class=" text-white open-sans">
                    25% off
                  </span>
                </div>
                <div class="second flex-col gap-2-5">
                  <i class="fa-solid fa-eye text-cyan-950"></i>
                  <i class="fa-solid fa-heart text-gray-900"></i>
                </div>
              </div>
            </div>

            <div class="card-info ">
              <h3 class="open-sans text-sm text-gray-800">NikeCourt Zoom Vapor Cage</h3>
              <div class="star-container py-2">
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-solid fa-star text-yellow-500"></i>
                <i class="fa-regular fa-star" style="color: #FFD43B;"></i>
              </div>
              <div class="rating flex justify-between items-center">
                <div class="cost">
                  <span class="text-red-500 open-sans text-sm">$187.50</span>
                  <s class="open-sans text-sm text-gray-500">$250.00</s>
                </div>
                <div class="card">
                  <span>
                    <i class="fa-solid fa-plus"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>

  <?php require("./layouts/footer.php"); ?>

  <style>
    .CategoriesPart {
      display: none;
    }
  </style>

</body>

</html>