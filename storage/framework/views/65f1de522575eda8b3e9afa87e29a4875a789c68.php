<!DOCTYPE html>
<body lang="ar" dir="rtl" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/png" href="asset("public/img/digikala-com-logo.png")">
    <title>Laravel</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>

        @font-face {
            font-family: Vazir;
            src: url("font/Vazir-Regular.eot");
            src: url("font/Vazir-Regular.woff") format("woff"),
            url("font/Vazir-Regular.ttf") format("ttf"),
            url("font/Vazir-Regular.woff2") format("woff2");
        }
        body{
            font-family: Vazir;
        }

    </style>

</head>

<nav class=" navbar navbar-expand-lg navbar navbar-light" style="background-color: #fefefe;">
    <div class="container-fluid">
        <nav class= "navbar navbar-light" style="background-color: #fefefe;">
            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" width="115" height="30" viewBox="0 0 115 30">
                    <g fill="none" fill-rule="evenodd">
                        <g fill="#EE384E">
                            <g>
                                <g>
                                    <path d="M76.916 19.024h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zm26.883 0h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zM88.117 6.951v15.366c0 .484-.625 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm26.883 0v15.366c0 .484-.624 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm-74.675 3.293h-6.721c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78zm4.48-3.293V23.78c0 3.523-3.117 6.22-6.72 6.22H34.62c-.515 0-1-.236-1.311-.638l-1.972-2.55c-.327-.424-.144-1.202.399-1.202h6.347c1.16 0 2.24-.696 2.24-1.83v-.365h-6.72c-3.604 0-6.72-3.063-6.72-6.586v-4.39c0-3.523 3.116-6.585 6.72-6.585h4.107c.514 0 1.074.405 1.437.731l1.177 1.098V6.95c0-.483.625-1.097 1.12-1.097h2.24c.496 0 1.12.613 1.12 1.097zM4.481 16.83c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39zM16.8 0c.497 0 1.121.613 1.121 1.098v21.22c0 .483-.624 1.097-1.12 1.097h-2.24c-.496 0-1.12-.613-1.12-1.098v-.732l-1.175 1.232c-.318.346-.932.598-1.44.598H6.722C3.117 23.415 0 20.352 0 16.829v-4.356c0-3.523 3.117-6.62 6.72-6.62h6.722V1.099c0-.485.624-1.098 1.12-1.098h2.24zm46.3 14.634L69.336 6.9c.347-.421.04-1.048-.513-1.048h-3.566c-.27 0-.525.119-.696.323l-6.314 7.727V1.098c0-.485-.625-1.098-1.12-1.098h-2.24c-.496 0-1.12.613-1.12 1.098v21.22c0 .483.624 1.097 1.12 1.097h2.24c.495 0 1.12-.614 1.12-1.098v-6.951l6.317 7.744c.17.207.428.328.7.328h3.562c.554 0 .86-.627.514-1.048l-6.24-7.756zM48.166 0c-.496 0-1.12.613-1.12 1.098v2.195c0 .484.624 1.097 1.12 1.097h2.24c.495 0 1.12-.613 1.12-1.097V1.098c0-.485-.625-1.098-1.12-1.098h-2.24zm0 5.854c-.496 0-1.12.613-1.12 1.097v15.366c0 .484.8 1.12 1.295 1.12l2.065-.022c.495 0 1.12-.614 1.12-1.098V6.951c0-.484-.625-1.097-1.12-1.097h-2.24zM21.282 0c-.495 0-1.12.613-1.12 1.098v2.195c0 .484.625 1.097 1.12 1.097h2.24c.496 0 1.12-.613 1.12-1.097V1.098c0-.485-.624-1.098-1.12-1.098h-2.24zm0 5.854c-.495 0-1.12.613-1.12 1.097v15.366c0 .484.625 1.098 1.12 1.098h2.24c.496 0 1.12-.614 1.12-1.098V6.951c0-.484-.624-1.097-1.12-1.097h-2.24zm73.556-4.756v21.22c0 .483-.625 1.097-1.12 1.097h-2.24c-.496 0-1.12-.614-1.12-1.098V1.097c0-.484.624-1.097 1.12-1.097h2.24c.495 0 1.12.613 1.12 1.098z" transform="translate(-1235 -19) translate(-238) translate(1473 19)"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </nav>
        <form class="d-flex">
            <div class="d-flex justify-content-around">

            <input class="form-control me-2 mt-2"type="search" id="search"
                   placeholder="&#128269 جستجو در دیجی کالا... " aria-label="Search"
                   style="width: 470px; background-color: rgb(233, 233, 233); border: none;">
           </div>
        </form>

        <div class="d-flex justify-content-evenly">
            <button type="button" class="btn btn-light" style="background-color: #fefefe;
"><img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/login-128.png" srcset="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/login-256.png 1x, https://cdn3.iconfinder.com/data/icons/user-interface-169/32/login-512.png 2x" alt="Login, sign in" width="255.994" class=" lazyloaded" data-srcset="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/login-256.png 1x, https://cdn3.iconfinder.com/data/icons/user-interface-169/32/login-512.png 2x" style="
   width: 23px; " class="rounded-pill"> ورود | ثبت‌نام</button>
            <button  class="border-0"
            type="button" class="btn btn-light"style="background-color: #fefefe;"><div class="icon-details-preview-rendering text-center rounded-pill"><i class="fas fa-cart-shopping"></i></div><img src="https://cdn0.iconfinder.com/data/icons/google-material-design-3-0/48/ic_shopping_cart_48px-512.png" srcset="https://cdn0.iconfinder.com/data/icons/google-material-design-3-0/48/ic_shopping_cart_48px-1024.png 2x" alt="Cart, shopping, ic icon - Free download on Iconfinder" class="d-block mx-auto" style="
   width: 26px; border: 1px solid var(--color-neutral-200);
}" ></button>

        </div>
    </div>

</nav>
    <nav class=" navbar navbar-expand-lg navbar navbar-light" style="background-color: #fefefe;">

        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight">شگفت‌انگیزها</div>
            <div class="p-2 bd-highlight">سوپرمارکت</div>
            <div class="p-2 bd-highlight">دسته‌بندی کالاها</div>
            <div class="p-2 bd-highlight">شگفت‌انگیزها</div>
            <div class="p-2 bd-highlight">سوپرمارکت</div>
            <div class="p-2 bd-highlight">دسته‌بندی کالاها</div>
            <div class="p-2 bd-highlight">شگفت‌انگیزها</div>
            <div class="p-2 bd-highlight">سوپرمارکت</div>
            <div class="p-2 bd-highlight">دسته‌بندی کالاها</div>
        </div>

</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/a.jpg')); ?>"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/b.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/c.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid bg-danger mt-4">
    <div class="container">
        <div class="row mt-2 py-3  ">
            <div class="col d-none d-lg-block d-xl-block ">

                <img src="img/34.png" class="img-fluid" style=".img-fluid {
    max-width: 68%;
}" alt="باکس پیشنهاد ویژه">
                <button type="button" class="btn btn-outline-light">مشاهده همه </button>


            </div>

            <div class="col-lg col-md col-sm">
                <div class="card ">
                    <img src="img/5.jpg" class="card-img-top p-4 w-39" alt="نیم بوت مردانه ">
                    <div class="card-body">
                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 850.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">48%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 439.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top p-4 w-39" alt="ساعت مچی دیجیتال زنانه کاسیو">
                    <div class="card-body">

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 2.517.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">28%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 1.980.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top p-4 w-39" alt="اسپیکر بلوتوثی قابل حمل انکر">
                    <div class="card-body">

                    </div>

                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 1.199.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">21%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 1.080.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top p-4 w-39" alt="همزن صنعتی باس توربو">
                    <div class="card-body">
                        <ul class="list-group mt-5 border-0 ">
                            <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                                <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 3.799.000 </p>
                                <span class="position-relative  badge bg-danger rounded-pill">49%</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                                <p class="fw-bolder"> 1.889.000 تومان </p>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="row mt-3">
    <div class=" col-lg-3 col-md-6 col-sm-12">
        <a href="">
            <img class="w-100 h-full lazyloaded" data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/69b22f168d612c04ab4003a590c01d92b18a2886_1656312045.jpg?x-oss-process=image/quality,q_95" alt="pc_salon_promotion" style="object-fit: cover; border-radius: 16px;" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/69b22f168d612c04ab4003a590c01d92b18a2886_1656312045.jpg?x-oss-process=image/quality,q_95">        </a>

    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mt-2  mt-sm-2 mt-md-2 mt-lg-0">
        <a href="">
            <img class="w-100 h-full lazyloaded" data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/3052ce48a985fae1281c49a3e9837221859f7139_1656159862.jpg?x-oss-process=image/quality,q_95" alt="پارتنرشیپ - شون" style="object-fit: cover; border-radius: 16px;" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/3052ce48a985fae1281c49a3e9837221859f7139_1656159862.jpg?x-oss-process=image/quality,q_95">        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12   mt-2  mt-sm-2 mt-md-2 mt-lg-0">
        <a href="">
            <img class="w-100 h-full lazyloaded" data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/ba21cfe58d448f628d7a9b22588b92948cb22c2c_1656159733.jpg?x-oss-process=image/quality,q_95" alt="پارتنرشیپ - کالیستا" style="object-fit: cover; border-radius: 16px;" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/ba21cfe58d448f628d7a9b22588b92948cb22c2c_1656159733.jpg?x-oss-process=image/quality,q_95">        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12   mt-2  mt-sm-2 mt-md-2 mt-lg-0">
        <a href="">
            <img class="w-100 h-full lazyloaded" data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/8c4005f70aa32cc386c71add0842e0302b0135cc_1656472586.jpg?x-oss-process=image/quality,q_95" alt="خنک‌ترین بلوز،شومیز و تونیک زنانه" style="object-fit: cover; border-radius: 16px;" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/8c4005f70aa32cc386c71add0842e0302b0135cc_1656472586.jpg?x-oss-process=image/quality,q_95">        </a>
    </div>
</div>

<div class="container-fluid bg-success mt-4">
    <div class="container">
        <div class="row mt-2 py-3 ">
            <div class="col d-none d-lg-block d-xl-block">
                <img src="img/13.png" class="img-fluid w-75" alt="...">
                <button type="button" class="btn btn-outline-light">مشاهده همه </button>


            </div>

            <div class="col-lg col-md col-sm">
                <div class="card ">
                    <img src="images/Card/card-11.jpg" class="card-img-top p-4" alt="پنير فتا پر چرب هراز ">
                    <div class="card-body">
                        <h6 class="card-title">پنير فتا پر چرب هراز </h6>
                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 47.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">26%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 36.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-33.jpg" class="card-img-top p-4"
                         alt="چای سیاه گلستان مدل ممتاز هندوستان">
                    <div class="card-body">
                        <h6 class="card-title">چای سیاه گلستان هندوستان</h6>

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 144.900 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">22%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 108.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-22.jpg" class="card-img-top p-4" alt=" شکلات پذیرایی مخروطی سوربن">
                    <div class="card-body">
                        <h6 class="card-title">شکلات  مخروطی سوربن </h6>

                    </div>

                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 60.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">30%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 41.900 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-44.jpg" class="card-img-top p-4" alt="خرمای مضافتی بم نقره ای ساغر">
                    <div class="card-body">
                        <h6 class="card-title">خرمای مضافتی بم  ساغر</h6>

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 58.500 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">29%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 34.500 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- بنر -->

<div class="container">
    <div class="row mt-3">
        <div class=" col-lg-6 col-md-6 col-sm-12  ">
            <img src="img/14.gif" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="img/15.jpg" class="img-fluid rounded-3" alt="...">

        </div>
    </div>
</div>

<!-- موبایل -->

<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <div class="card">
                <div class="card-header bg-light border-bottom border-secondary">
                    <h5>گوشی موبایل</h5>
                    <p>بر اساس بازدید شما</p>
                </div>

                <div class="row p-4 ">
                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-1.jpg" class="card-img-top p-3"
                                 alt="iPhone 13 Pro Max ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل اپل مدل iPhone 13 Pro Max دو سیم‌ کارت
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0 ">
                                    <p class="fw-bolder"> 41.489.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm ">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-2.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل سامسونگ مدل Galaxy A12 Nacho
                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 3.780.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-3.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل سامسونگ مدل A52s 5G دو سیم‌کارت و
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 10.560.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm ">
                        <div class="card border-0 ">
                            <img src="images/mobile/mobile-4.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل شیائومی مدل POCO X3 Pro ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل شیائومی مدل POCO X3 Pro دو سیم‌ کارت و 8
                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 6.650.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-5.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل اپل مدل iPhone 13 A2634  ">
                            <div class="card-body">
                                <p class="card-text fs-6"> گوشی موبایل اپل مدل iPhone 13 دو سیم‌ کارت

                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 26.400.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="cart">
                <div class="card-header bg-light border-bottom border-secondary">
                    <h6>پیشنهادهای لحظه‌ای</h6>
                    <p class="pb-1">برای شما</p>
                </div>

                <div class="card border-0  pt-5">
                    <img src="images/Card/3.png" class="card-img-top "
                         alt=" کتاب زبان Oxford Word Skills Advanced ">
                    <div class="card-body">
                        <p class="card-text fs-6"> کتاب زبان Oxford Word Skills Advanced

                        </p>
                    </div>
                    <ul class="list-group  border-0 ">


                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 68.000 تومان </p>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- category -->

<div class="container ">
    <div class="row mt-3 bg-light">
        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-tv fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/7.png">
            <p class="text-dark mt-3">کالای دیجیتال</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-wrench fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/8.png">

            <p class="text-dark mt-3">ابزار و تجهیزات </p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-file-zip fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/9.png">

            <p class="text-dark mt-3">پوشاک</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-piggy-bank fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/10.png">

            <p class="text-dark mt-3">کودک و نوزاد</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-basket2 fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/11.png">

            <p class="text-dark mt-3">سوپر مارکتی</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-suit-heart fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/12.1.png">

            <p class="text-dark mt-3">زیبایی و سلامت</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-house fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/12.png">

            <p class="text-dark mt-3">خانه و آشپزخانه</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-pen fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/12.2.png">

            <p class="text-dark mt-3">لوازم و تحریر</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-yin-yang fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/12.4.png">

            <p class="text-dark mt-3">ورزش و سفر</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-gem fs-1 text-primery"></span></a>
            <img  class="w-21"  style="  max-width: 68%;" src="img/12.3.png">

            <p class="text-dark mt-3">بومی</p>

        </div>


    </div>
</div>




<!-- موبایل -->

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-light border-bottom border-secondary">
                    <h5>گوشی موبایل</h5>
                    <p>بر اساس بازدید شما</p>
                </div>

                <div class="row p-4 ">
                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-1.jpg" class="card-img-top p-3"
                                 alt="iPhone 13 Pro Max ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل اپل مدل iPhone 13 Pro Max دو سیم‌ کارت
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0 ">
                                    <p class="fw-bolder"> 41.489.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-2.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل سامسونگ مدل Galaxy A12 Nacho
                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 3.780.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-3.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل سامسونگ مدل A52s 5G دو سیم‌کارت و
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 10.560.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm ">
                        <div class="card border-0 ">
                            <img src="images/mobile/mobile-4.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل شیائومی مدل POCO X3 Pro ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل شیائومی مدل POCO X3 Pro دو سیم‌ کارت </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 6.650.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-5.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل اپل مدل iPhone 13 A2634  ">
                            <div class="card-body">
                                <p class="card-text fs-6"> گوشی موبایل اپل مدل iPhone 13 دو سیم‌ کارت

                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 26.400.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
</div>

<!-- تبلیغات -->

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <img src="img/21.jpg" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="img/22.jpg" class="img-fluid rounded-3" alt="...">

        </div>


    </div>
</div>

<!-- footer  -->
<footer>

    <div class="container-fluid bg-light mt-3 pb-4">
        <div class="container">
            <div class="row ">
                <div class="col-lg col-md col-sm mt-4">
                    <img src="img/logo.svg" class="img-fluid rounded-3" alt="...">
                    <p class="mt-3">تلفن پشتیبانی:
                        ۶۱۹۳۰۰۰۰ - ۰۲۱
                        |
                        ۶۲۹۹۹۹۱۱ - ۰۲۱
                        |
                        هفت روز هفته، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم.</p>
                </div>
                <div class="col-lg col-md col-sm mt-4 d-flex justify-content-end align-self-start">
                    <button type="button" href="#" class="btn btn-outline-secondary">بازگشت به بالا</button>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row ">

                <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-center">
                    <img src="img/16.svg" style="width: 36%;" class="img-fluid  " alt="...">
                    <p>امکان تحویل اکسپرس</p>
                </div>

                <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                    <img src="img/17.svg" class="img-fluid w-25" alt="...">
                    <p>امکان پرداخت در محل</p>

                </div>

                <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                    <img src="img/18.svg" class="img-fluid w-25" alt="...">
                    <p>7 روز هفته </p>
                </div>

                <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                    <img src="img/19.svg" class="img-fluid w-25" alt="...">
                    <p> 7 روز ضمانت بازگشت</p>
                </div>

                <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                    <img src="img/20.svg" class="img-fluid w-25" alt="...">
                    <p>ضمانت اصل بودن</p>
                </div>


            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush " >
                        <li class="list-group-item bg-light border-0 fw-bolder" >با دیجی‌کالا</li>
                        <li class="list-group-item bg-light border-0">اتاق خبر دیجی‌کالا</li>
                        <li class="list-group-item bg-light border-0">فروش در دیجی‌کالا</li>
                        <li class="list-group-item bg-light border-0">فرصت‌های شغلی</li>
                        <li class="list-group-item bg-light border-0">تماس با دیجی‌کالا</li>
                        <li class="list-group-item bg-light border-0">درباره دیجی‌کالا</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush " >
                        <li class="list-group-item bg-light border-0 fw-bolder" > خدمات مشتریان</li>
                        <li class="list-group-item bg-light border-0" > پاسخ به پرسش‌های متداول</li>
                        <li class="list-group-item bg-light border-0" > رویه‌های بازگرداندن کالا</li>
                        <li class="list-group-item bg-light border-0" > شرایط استفاده</li>
                        <li class="list-group-item bg-light border-0" > حریم خصوصی</li>
                        <li class="list-group-item bg-light border-0" > گزارش باگ</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush " >
                        <li class="list-group-item bg-light border-0 fw-bolder" > راهنمای خرید از دیجی‌کالا </li>
                        <li class="list-group-item bg-light border-0 " > نحوه ثبت سفارش </li>
                        <li class="list-group-item bg-light border-0 " > رویه ارسال سفارش </li>
                        <li class="list-group-item bg-light border-0 " > شیوه‌های پرداخت </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush " >
                        <li class="list-group-item bg-light border-0 fw-bolder" >     با ما همراه باشید</li>
                        <li class="list-group-item bg-light border-0 " >
                            <a href="#" class="btn btn-outline-secondary" role="button" data-bs-toggle="button"><span class="bi bi-instagram fs-3"></span></a>
                            <a href="#" class="btn btn-outline-secondary" role="button" data-bs-toggle="button"><span class="bi bi-linkedin fs-3"></span></a>
                            <a href="#" class="btn btn-outline-secondary" role="button" data-bs-toggle="button"><span class="bi bi-telegram fs-3"></span></a>
                            <a href="#" class="btn btn-outline-secondary" role="button" data-bs-toggle="button"><span class="bi bi-twitter fs-3"></span></a>


                        </li>
                        <li class="list-group-item bg-light border-0 " >  از جدیدترین تخفیف‌ها باخبر شوید </li>
                        <li class="list-group-item bg-light border-0 " >


                            <form class="d-flex">
                                <input class="form-control me-2 border-0 " type="email" placeholder="ایمیل خود را وارد نمایید" aria-label="email">
                                <button class="btn btn-outline-secondary" type="submit">ثیت</button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row mt-3 rounded-3 p-3" style="background-color: rgb(0, 0, 70);">
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-evenly ">

                    <img src="img/footerLogo.png" class="img-fluid rounded-3 " alt="...">
                    <p class="text-light  fs-3">دانلود اپلیکیشن دیجیکالا</p>

                    <img src="img/google-play.svg" class="img-fluid rounded-3  " alt="...">
                    <img src="img/coffe-bazzar.svg" class="img-fluid rounded-3 " alt="...">

                    <img src="img/myket.svg" class="img-fluid rounded-3 " alt="...">



                </div>
            </div>
        </div>
    </div>

</footer >


</div>




</div>

</body>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>


<?php /**PATH C:\Users\nematizadeh\Desktop\example-app\resources\views/download.blade.php ENDPATH**/ ?>