<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="assets/img/favicon.png" />

    <title>دیجیکالا</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body >
<div class="container-fluid">
    <nav class="navbar sticky-top navbar-expand-lg  navbar-light bg-light ">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">
                    <img src="images/Logo/logo.svg" alt="لوگو دیجیکالا" height="24">

                </a>
                <form class="d-flex ">
                    <input class="form-control me-2 mt-2 border-0  " type="search"  id="search" placeholder="Search "
                           aria-label="Search" >
                </form>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                <i class="far fa-user"></i>

                ورود به حساب کاربری
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>


            </div>
            <button type="button" class="btn btn-outline-danger ms-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="currentColor"
                     class="bi bi-cart" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg></button>

        </div>
    </nav>

    <nav class="navbar navbar-expand-lg  navbar-light bg-light ">
        <div class="container-fluid">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#"> <i class="bi bi-justify"></i> دسته بندی
                            کالا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="bi bi-basket"></i> سوپر مارکت </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="bi bi-percent"></i> تخفیف ها و پیشنهادات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی کالا من </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی پلاس </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی کلاب </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی پی </a>
                    </li>


                </ul>
            </div>

            <p> لطفا شهر و استان خود را انتخاب کنید <span class="bi bi-geo-alt-fill"></span></p>

        </div>
    </nav>

    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="images/Slide/head-gif1.gif" class="img-fluid rounded-3" alt="...">

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2">
            <div class=" col-lg-8 col-md-12 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active " aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/Slide/slide-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Slide/slide-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Slide/slide-3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Slide/slide-4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Slide/slide-gif.gif" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>

            <div class=" col-lg-4 col-md-8 col-sm-12  ">
                <div class="row mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                    <img src="images/Slide/slide-mini-1.jpg" class="img-fluid rounded-3" alt="...">

                </div>
                <div class="row mt-2 ">
                    <img src="images/Slide/slide-mini-2.jpg" class="img-fluid rounded-3" alt="...">

                </div>
            </div>
        </div>
    </div>

    <!-- پیشنهاد شگفت انگیز -->
    <div class="container-fluid bg-danger mt-4">
        <div class="container">
            <div class="row mt-2 py-3  ">
                <div class="col d-none d-lg-block d-xl-block ">
                    <img src="images/Card/1.png" class="img-fluid w-75" alt="...">
                    <button type="button" class="btn btn-outline-light mt-5">مشاهده همه </button>


                </div>

                <div class="col-lg col-md col-sm">
                    <div class="card ">
                        <img src="images/Card/card-4.jpg" class="card-img-top p-4" alt="نیم بوت مردانه ">
                        <div class="card-body">
                            <h6 class="card-title">نیم بوت مردانه </h6>
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
                        <img src="images/Card/card-3.jpg" class="card-img-top p-4" alt="ساعت مچی دیجیتال زنانه کاسیو">
                        <div class="card-body">
                            <h6 class="card-title">ساعت مچی  زنانه کاسیو</h6>

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
                        <img src="images/Card/card-2.jpg" class="card-img-top p-4" alt="اسپیکر بلوتوثی قابل حمل انکر">
                        <div class="card-body">
                            <h6 class="card-title">اسپیکر بلوتوثی انکر</h6>

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
                        <img src="images/Card/card-1.jpg" class="card-img-top p-4" alt="همزن صنعتی باس توربو">
                        <div class="card-body">
                            <h6 class="card-title">همزن صنعتی باس توربو</h6>

                        </div>
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

    <!-- تبلیغات -->

    <div class="container">
        <div class="row mt-3">
            <div class=" col-lg-3 col-md-6 col-sm-12">
                <a href="">
                    <img src="images/Ad/ad-4.jpg" class="img-fluid rounded-3" alt="...">
                </a>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <a href="">
                    <img src="images/Ad/ad-3.jpg" class="img-fluid rounded-3" alt="...">
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12   mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <a href="">
                    <img src="images/Ad/ad-2.jpg" class="img-fluid rounded-3" alt="...">
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12   mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <a href="">
                    <img src="images/Ad/ad-1.jpg" class="img-fluid rounded-3" alt="...">
                </a>
            </div>
        </div>
    </div>

    <!-- سوپر مارکتی پیشنهاد شگفت انگیز -->
    <div class="container-fluid bg-success mt-4">
        <div class="container">
            <div class="row mt-2 py-3 ">
                <div class="col d-none d-lg-block d-xl-block">
                    <img src="images/Card/2.png" class="img-fluid w-75" alt="...">
                    <button type="button" class="btn btn-outline-light mt-5">مشاهده همه </button>


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
                <img src="images/Ad/ad-5.jpg" class="img-fluid rounded-3" alt="...">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <img src="images/Ad/ad-6.jpg" class="img-fluid rounded-3" alt="...">

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
                <p class="text-dark mt-3">کالای دیجیتال</p>
                <p class="text-primary mt-3">+990000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-wrench fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">ابزار و تجهیزات </p>
                <p class="text-primary mt-3">+179000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-file-zip fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">پوشاک</p>
                <p class="text-primary mt-3">+135000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-piggy-bank fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">کودک و نوزاد</p>
                <p class="text-primary mt-3">+121000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-basket2 fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">سوپر مارکتی</p>
                <p class="text-primary mt-3">+721000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-suit-heart fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">زیبایی و سلامت</p>
                <p class="text-primary mt-3">+21000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-house fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">خانه و آشپزخانه</p>
                <p class="text-primary mt-3">+231000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-pen fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">لوازم و تحریر</p>
                <p class="text-primary mt-3">+121000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-yin-yang fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">ورزش و سفر</p>
                <p class="text-primary mt-3">+421000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-gem fs-1 text-primery"></span></a>
                <p class="text-dark mt-3">بومی</p>
                <p class="text-primary mt-3">+81000 کالا</p>

            </div>


        </div>
    </div>

    <!-- تبلیغات -->

    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="images/Ad/ad-11.jpg" class="img-fluid rounded-3" alt="...">

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <img src="images/Ad/ad-22.jpg" class="img-fluid rounded-3" alt="...">

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <img src="images/Ad/ad-33.jpg" class="img-fluid rounded-3" alt="...">

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <img src="images/Ad/ad-44.jpg" class="img-fluid rounded-3" alt="...">

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
                <img src="images/Ad/ad-55.jpg" class="img-fluid rounded-3" alt="...">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <img src="images/Ad/ad-66.jpg" class="img-fluid rounded-3" alt="...">

            </div>


        </div>
    </div>

    <!-- footer  -->
    <footer>

        <div class="container-fluid bg-light mt-3 pb-4">
            <div class="container">
                <div class="row ">
                    <div class="col-lg col-md col-sm mt-4">
                        <img src="images/Logo/logo-1.svg" class="img-fluid rounded-3" alt="...">
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
                        <img src="images/Footer/1.svg" style="width: 36%;" class="img-fluid  " alt="...">
                        <p>امکان تحویل اکسپرس</p>
                    </div>

                    <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                        <img src="images/Footer/2.svg" class="img-fluid w-25" alt="...">
                        <p>امکان پرداخت در محل</p>

                    </div>

                    <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                        <img src="images/Footer/3.svg" class="img-fluid w-25" alt="...">
                        <p>7 روز هفته </p>
                    </div>

                    <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                        <img src="images/Footer/4.svg" class="img-fluid w-25" alt="...">
                        <p> 7 روز ضمانت بازگشت</p>
                    </div>

                    <div class="col-lg col-md col-sm d-flex flex-column justify-content-center align-self-start">
                        <img src="images/Footer/5.svg" class="img-fluid w-25" alt="...">
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

                        <img src="images/App/1.svg" class="img-fluid rounded-3 " alt="...">
                        <p class="text-light  fs-3">دانلود اپلیکیشن دیجیکالا</p>

                        <img src="images/App/google.svg" class="img-fluid rounded-3  " alt="...">
                        <img src="images/App/bazar.svg" class="img-fluid rounded-3 " alt="...">

                        <img src="images/App/sib app.svg" class="img-fluid rounded-3 " alt="...">



                    </div>
                </div>
            </div>
        </div>

    </footer >


</div>



<?php /**PATH C:\Users\nematizadeh\Desktop\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>