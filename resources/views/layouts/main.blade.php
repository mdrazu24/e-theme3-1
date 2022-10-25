<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body x-data="{ open: false }" x-cloak class="antialiased position-relative">

    {{-- bottom --}}
    <div class="container-fluid d-flex text-white align-items-center justify-content-around d-md-none position-fixed" style="bottom: 0; left: 0; right : 0; z-index: 10000 !important; height : 40px; background-color: rgb(9, 92, 5)" >
        <i class="fa-solid fa-house"></i>
        <i class="fa-solid fa-heart"></i>
        <i class="fa-solid fa-user"></i>
        <i class="fa-solid fa-cart-shopping"></i>
    </div>

    {{--  --}}

    {{-- header --}}
    <nav class="navbar p-0 pt-3  bg-light">
        <div class="container-fluid border-bottom pb-3">
            <div class="container">

                <div class="row w-100   ">
                    <div class="col-12 d-flex align-items-center justify-content-center   col-md-2">

                        <img src="images/something.png" alt="something" />
                    </div>
                    <form class="d-flex col-12 col-md-7 col-lg-6  align-items-center justify-content-center"
                        role="search">
                        <input class="form-control input-lg rounded-0  px-4  " type="search" placeholder="Search..."
                            aria-label="Search" style="max-width: 300px; height : 45px">
                        <button class="btn btn-success rounded-0"
                            style="transform: translateX(-5%); height : 45px">Search</button>
                    </form>

                    <div class="container p-4 d-flex d-md-none align-items-center justify-content-between">
                        <p @click="open = ! open" class="d-block d-md-none align-self-end" style="padding: 4px"><i
                                class="fa-solid fa-bars text-success"></i></p>

                        <i class="fa-solid fa-cart-shopping text-success"></i>
                    </div>

                    <div
                        class="col-12 col-md-3 p-4 p-md-0 d-none d-md-flex justify-content-around  align-items-center ">
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>

                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>

                        </div>

                        <a class="btn btn-md btn-success">My Account</a>

                    </div>
                </div>
            </div>
        </div>

        {{-- header options --}}
        <div class="headerMenu" x-transition.origin.top.left x-show="open"
            style="z-index: 10000; position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-color: transparent ">
            <div class="position-fixed top-0 left-0 bg-white" style="bottom: 0; width: 50vw;">
                <div class="w-100  d-flex justify-content-end p-4 "> <button @click="open = ! open" type="button"
                        class="btn-close float-left" aria-label="Close"></button>
                </div>

                <div class="p-4">
                    <div class="p-0 d-flex align-items-start justify-content-start">
                        <ul
                            style="display:  flex; flex-direction: column; row-gap: 10px;  padding: 4px; padding-top: 6px; color : rgb(7, 22, 41); align-items: flex-start">
                            <li class="btn text-primary fw-bold ">
                                <i class="fa-solid fa-arrow-right"></i> Home
                            </li>
                            <li class="btn">
                                <i class="fa-solid fa-arrow-right"></i> Products
                            </li>

                            <li class="btn">
                                <i class="fa-solid fa-arrow-right"></i> Blogs
                            </li>
                            <li class="btn">
                                <i class="fa-solid fa-arrow-right"></i> Contacts
                            </li>


                        </ul>
                    </div>

                </div>


            </div>

        </div>
        {{--  --}}

        <div class="container">

            <div class="w-100 px-5 d-none d-md-flex py-2 ">
                <ul class="d-flex gap-4 w-100 cursor-pointer list-unstyled">
                    <li
                        class="btn border text-success rounded-0 border-success border-top-0 border-end-0 border-start-0 ">
                        <a>Home</a>
                    </li>
                    <li class="btn "><a>Products</a></li>
                    <li class="btn "><a>Menu</a></li>
                    <li class="btn "><a>Contact</a></li>
                    <li class="btn "><a>Pages</a></li>
                    <li class="btn "><a>Blogs</a></li>
                    <li class="btn "><a>Customer</a></li>
                    <li class="btn "><a>Rider</a></li>

                </ul>
            </div>

        </div>

    </nav>

    {{--  --}}


    {{-- Contents --}}
    @yield('content')


    {{--  --}}


    {{-- Footer --}}
    <x-footer />

    {{--  --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 3000,
            },


            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        });

        const swiperTwo = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 3000,

            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },

            },
        });
    </script>

</body>

</html>

<style>
    .container-fluid {
        box-sizing: border-box !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .icon {
        padding: 4px;
        border-radius: 50%;
        font-size: 16px;
        width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        color: green;
        box-shadow: 0px 1px 4px 1px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .icon:hover {
        color: white;
        background-color: green;
    }
</style>
