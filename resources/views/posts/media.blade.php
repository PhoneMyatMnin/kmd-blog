<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>KMD News</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- kmd link --}}

    {{-- CSS start --}}
    <style>
        nav {
            width: 100%;
            left: 0;
            z-index: 100;
            background-color: rgb(0, 64, 255);
            text-transform: uppercase;
        }

        .nav-link {
            color: white;
        }

        .nav-link:hover {
            color: white;
        }

        .dropdown-menu {
            max-height: 200px;
            overflow-y: scroll;
        }

        .filters-news {
            margin-top: 40px;
            padding: 0 8px;
        }

        section {
            display: block;
        }

        .carousel-inner {
            max-width: 100%;
            /* Adjust as needed */
            overflow: hidden;
            padding: 0 20px;
            /* Adjust horizontal padding */
        }

        .carousel-item {
            /* display: flex; */
            align-items: center;
            justify-content: center;
        }

        .card-img-top {
            max-width: 100%;
            /* Ensure images don't exceed container width */
            max-height: 400px;
            /* Set max height for vertical images */
            object-fit: contain;
            /* Maintain aspect ratio */
        }

        .carousel-control-prev {
            position: absolute;
            left: -2%;
        }

        .carousel-control-prev-icon {
            width: 30px;
            height: 50px;
            background-color: rgb(68, 68, 71);
        }

        .carousel-control-next {
            position: absolute;
            right: -2%;
        }

        .carousel-control-next-icon {
            width: 30px;
            height: 50px;
            background-color: rgb(68, 68, 71);
        }

        .carousel-indicators button[Type="button"] {
            height: 10px;
        }
    </style>
    {{-- CSS end --}}
</head>



<body>
    {{-- Header start --}}
    <div class="nav-wrapper container-fluid d-flex flex-md-row flex-column justify-content-between">
        <ul class="nav flex justify-content-center align-items-center aos-init aos-animate" data-aos="fade-right"
            data-aos-duration="1500">
            <li class="nav-item mx-1"><a class="nav-link text-dark" href="#"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z">
                        </path>
                    </svg><span class="mx-2">+959 428 055 067</span>, <span>+959 262 600 450 </span></a></li>
        </ul>
        <ul class="nav flex justify-content-center align-items-center aos-init aos-animate" data-aos="fade-left"
            data-aos-duration="1500">
            <li class="nav-item"><a href="https://www.facebook.com/kmd.com.mm/" target="_blank"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                        </path>
                    </svg></a></li>
        </ul>
    </div>
    {{-- Header end --}}

    {{-- navbar start --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="/" class=""><img src="{{ asset('img/logo1.png') }}" alt=""
                    style="width: 120px;"></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a aria-current="page" href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a aria-current="page" href="/about" class="nav-link">Company</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Line Of Business </a>
                        <ul class="dropdown-menu">
                            <li><a href="/education" class="dropdown-item">Education</a></li>
                            <li><a href="/exam" class="dropdown-item">Exam Services</a></li>
                            <li><a href="/retail" class="dropdown-item">Retail Sales</a></li>
                            <li><a href="/distribution" class="dropdown-item">Distribution</a></li>
                            <li><a href="/enterprise" class="dropdown-item">Enterprise Solutions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="/jobvacancy" class="nav-link">Job Openings</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> News </a>
                        <ul class="dropdown-menu" data-bs-popper="static">
                            <li><a aria-current="page" href="/news"
                                    class="router-link-active router-link-exact-active dropdown-item">Media</a></li>
                            <li><a href="/csr2024" class="dropdown-item">CSR</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- nav end --}}

    <div class="container my-5">
        {{-- Title start --}}
        <h1 class="my-3" style="text-align:center;">Latest News
            <button class="btn btn-outline-dark dropdown-toggle btn-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></button>
        </h1>
        {{-- Title end --}}

        {{-- Offcanvas --}}
        <div class="offcanvas offcanvas-start shadow" style="width: 150px" data-bs-scroll="true"
            data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
            aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn btn-sm" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="">
                {{-- Year list start --}}
                <div class="list-group border border-0 rounded-0 text-center">
                    <a href="#" class="list-group-item border border-0 rounded-0 list-group-item-action active"
                        aria-current="true">
                        2023
                    </a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2022</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2021</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2020</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2019</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2018</a>
                    <a href="#"
                        class="list-group-item border border-0 rounded-0 list-group-item-action">2017</a>
                </div>
                {{-- Year list end --}}
            </div>
        </div>
        {{-- Offcanvas end --}}

        {{-- Latest News start --}}
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class=" card mb-3 pt-3 m-4 shadow">
                        <img src="{{ asset('img/khathein2023.jpg') }}" class="card-img-top justify-item-center "
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">(၂၇) ကြိမ်မြောက် KMD Group of Companies ၏ စုပေါင်း
                                မဟာဘုံကထိန်
                                အလှူတော်
                                မင်္ဂလာ</h5>
                            <p class="card-text">(၂၇) ကြိမ်မြောက် KMD Group of Companies ၏ စုပေါင်း မဟာဘုံကထိန်
                                အလှူတော် မင်္ဂလာကို၂ဝ၂၃ ခုနှစ်၊ နိုဝင်ဘာလ၊ ၂၇ ရက် နံနက် ၉:၃ဝ နာရီ တွင်
                                လယ်တီမူဝိပဿနာကမ္မဌာန်း ကျောင်းတိုက် တွင် သံဃာတော် များအား ကထိန် သင်္ကန်း၊ ကထိန် ပစ္စည်း၊
                                ကထိန်အလှူငွေ များ ကပ်လှူ ပူဇော်ပြီး တရားနာယူ၍ .....</p>
                            <p class="card-text"><small class="text-body-secondary">Media 2023 </small> <a
                                    href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                    aria-disabled="true">Read
                                    More</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class=" card mb-3 pt-3 m-4 shadow">
                        <img src="{{ asset('img/csr1.jpg') }}" class="card-img-top justify-content-center "
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">KMD မိသားစု၏ (၂၂) ကြိမ်မြောက် စုပေါင်းသွေးလှူခြင်း</h5>
                            <p class="card-text">KMD မိသားစု၏ (၂၂) ကြိမ်မြောက် စုပေါင်းသွေးလှူခြင်း အစီအစဉ် ကို
                                ၂၉.၁.၂၀၂၄ ရက်နေ့၊ မနက် (၈:၃၀ နာရီမှ ၁၂:၀၀ နာရီအထိ) အောင်မြင်စွာ ပြုလုပ် ပြီးစီးခဲ့ပါသည်။
                                စာရင်းပေး ဝန်ထမ်း (၃၁) ဦး ထဲမှဝန်ထမ်း (၂၇) ဦး သွေးလှူဒါန်း နိုင်ခဲ့ပါသည်။
                                စုပေါင်းသွေးလှူ ခြင်း အစီအစဉ်အရ (၂၂) ကြိမ်မြောက်အထိ လှူဒါန်း .....</p>
                            <p class="card-text"><small class="text-body-secondary">Media 2023 </small> <a
                                    href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                    aria-disabled="true">Read
                                    More</a></p>

                        </div>
                    </div>
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
        {{-- Latest News end --}}

        {{-- mini nav start --}}
        <div class="container px-5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
                <div class="container-fluid">
                    <a class="navbar-brand" style="color: rgb(0, 64, 255); " href="#">media</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                                    Year...
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">2023</a></li>
                                    <li><a class="dropdown-item" href="#">2022</a></li>
                                    <li><a class="dropdown-item" href="#">2021</a></li>
                                    <li><a class="dropdown-item" href="#">2020</a></li>
                                    <li><a class="dropdown-item" href="#">2019</a></li>
                                    <li><a class="dropdown-item" href="#">2018</a></li>
                                    <li><a class="dropdown-item" href="#">2017</a></li>
                                    <li>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                                    Category...
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Media</a></li>
                                    <li><a class="dropdown-item" href="#">CSR</a></li>
                                    <li>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <form id="searchform" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                    </div>
                </div>
            </nav>
        </div>
        {{-- mini nav end --}}

        {{-- Card start --}}
        <div class="container mt-3 px-5">
            <div class="row row-cols-1 row-cols-md-2 g-3 ">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/KMD-03.png') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary float-end" tabindex="-1" role="button"
                                aria-disabled="true">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Card end --}}

    {{-- Footer start --}}
    <div class="container-fluid py-4" id="footer" style="background-color: rgb(66, 66, 66);">
        <div class="row justify-content-around py-5 gy-3 p-md-4">
            <div class="col-lg-3 col-md-5 text-white">
                <h5>Contact Info</h5>
                <h6>Pansodan Office</h6>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                        </path>
                    </svg> No 174-182, Pansodan Road (Middle Block), Kyauktada Township, Yangon, Myanmar. </p>
                <h6>Mandalay Office</h6>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                        </path>
                    </svg> No 103/1, 77th st., Bet: 27th x 28th st., Chanayetharsan, Mandalay. </p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-telephone-fill text-white" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                        </path>
                    </svg> 09-428055067, 09-409057722, 09-257799644, 09-450455268 (Service Center) </p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-envelope-at-fill text-white" viewBox="0 0 16 16">
                        <path
                            d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z">
                        </path>
                        <path
                            d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z">
                        </path>
                    </svg> enquiry@kmdcomputer.com </p>
            </div>
            <div class="col-lg-2 col-md-5 text-white">
                <h5>About</h5>
                <p> KMD was founded in 1986 as a Training Institute. Now it holds presence in complete Technology
                    paradigm of country with 400+ workforce. </p><a href="/about" class="btn btn-first btn-sm">
                    See More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-right-circle m-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                        </path>
                    </svg></a>
            </div>
            <div class="col-lg-2 col-md-5 text-white">
                <h5>Line of businesses</h5>
                <ul class="px-0" style="list-style-type: none;">
                    <li><a href="/education" class="router text-decoration-none text-white">Education</a></li>
                    <li><a href="/exam" class="router text-decoration-none text-white">Exam Services</a></li>
                    <li><a href="/retail" class="router text-decoration-none text-white">Retail Sales</a></li>
                    <li><a href="/distribution" class="router text-decoration-none text-white">Distribution</a>
                    </li>
                    <li><a href="/enterprise" class="router text-decoration-none text-white">Enterprise
                            Solutions</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-5 text-white">
                <h5>Get in touch</h5>
                <div><a href="https://www.facebook.com/kmd.com.mm/" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-facebook text-light m-1" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></a><a href="https://www.instagram.com/kmdinstitute/" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-instagram text-light m-1" viewBox="0 0 16 16"
                            style="border-radius: 0.75em;">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></a><a href="https://www.linkedin.com/company/kmd-group-of-company/"
                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                            fill="currentColor" class="bi bi-linkedin text-light m-1" viewBox="0 0 16 16"
                            style="border-radius: 0.25em;">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                            </path>
                        </svg></a><a href="https://t.me/kmduniversity" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-telegram text-light m-1" viewBox="0 0 16 16" style="border-radius: 1em;">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z">
                            </path>
                        </svg></a></div>
            </div>
        </div>
        <div class="text-white mx-auto">
            <hr>
        </div>
        <div class="text-center"><span class="text-white">Copyright © 2024 KMD. All Rights Reserved <a
                    href="/cprofile" class="text-white text-decoration-none">.</a></span></div>
    </div>
    {{-- Footer end --}}


    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
