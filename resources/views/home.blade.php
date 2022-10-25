    @extends('layouts.main')

    @section('content')
        <div class="container-fluid">
            <!-- Slider main container -->
            <div class="swiper  mainSwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide overflow-hidden position-relative">
                        <img class="img-fluid w-100" style="object-fit: contain; transform: rotateY(180deg); "
                            src="https://safeforts.com/uploads/dummy/21/12/61ae34edec7010612211638806765.jpeg"
                            alt="eventimage" />
                        <div class="content  position-absolute wow fadeInLeft animate__animated animate__backInRight "
                            style="top: 50px; right : 100px">
                            <h1 class="fw-bolder title" style="font-size: 50px">Order Healty Food!!</h1>
                            <h2 class="fw-bolder">New Arrivals!!!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                            </p>
                            <button class="btn btn-success">#</button>

                        </div>

                    </div>


                    <div class="swiper-slide overflow-hidden position-relative">
                        <img class="img-fluid w-100" style="object-fit: contain; transform: rotateY(180deg); "
                            src="https://safeforts.com/uploads/dummy/21/12/61ae34edec7010612211638806765.jpeg"
                            alt="eventimage" />
                        <div class="content  position-absolute wow fadeInLeft animate__animated animate__backInRight "
                            style="top: 50px; right : 100px;">
                            <h1 class="fw-bolder title" style="font-size: 50px">Order Healty Food!!</h1>
                            <h2 class="fw-bolder">New Arrivals!!!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                            </p>
                            <button class="btn btn-success">#</button>

                        </div>

                    </div>


                    <div class="swiper-slide overflow-hidden position-relative">
                        <img class="img-fluid w-100" style="object-fit: contain; transform: rotateY(180deg);
 "
                            src="https://safeforts.com/uploads/dummy/21/12/61ae34edec7010612211638806765.jpeg"
                            alt="eventimage" />
                        <div class="content  position-absolute wow fadeInLeft animate__animated animate__backInRight "
                            style="top: 50px; right : 100px">
                            <h1 class="fw-bolder title" style="font-size: 50px">Order Healty Food!!</h1>
                            <h2 class="fw-bolder">New Arrivals!!!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                            </p>
                            <button class="btn btn-success">#</button>

                        </div>

                    </div>




                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>

        {{--  --}}


        {{-- firts category --}}
        <div class="container mb-4">
            <div class="row justify-content-start mt-2 gap-4">
                <div class="col-12 col-md-3 relative  rounded  overflow-hidden secondHero ">
                    <img class="figure-img img-fluid"
                        src="https://safeforts.com/uploads/dummy/21/12/61ae3b1ad946c0612211638808346.jpg" alt="something" />

                    <div class="content position-absolute wow fadeInLeft " style="top: 40px; left : 80px">
                        <h1 class="fw-bolder text-white title">Tasty Hot Sppicy</h1>
                    </div>

                    <div class="animateObj"
                        style="position: absolute; bottom : -20; right : -20; height : 80px; width : 80px; border-radius : 40%; background-color: rgba(13, 172, 37, 0.506)">
                    </div>

                </div>
                <div class="col-12 col-md-3 relative  rounded  overflow-hidden secondHero ">
                    <img class="figure-img img-fluid"
                        src="https://safeforts.com/uploads/dummy/21/12/61ae3b1ad946c0612211638808346.jpg" alt="something" />

                    <div class="content position-absolute wow fadeInLeft " style="top: 40px; left : 80px">
                        <h1 class="fw-bolder text-white title">Tasty Hot Sppicy</h1>
                    </div>

                    <div class="animateObj"
                        style="position: absolute; bottom : -20; right : -20; height : 80px; width : 80px; border-radius : 40%; background-color: rgba(13, 172, 37, 0.506)">
                    </div>

                </div>
            </div>
        </div>

        {{--  --}}

        <div class="container  overflow-hidden mb-5 mt-5">
            <h1>New Items</h1>

            <div class="mySwiper position-relative">

                <div class="swiper-wrapper">
                    <x-product />
                    <x-product hasTime='true' img="images/food2.webp" />
                    <x-product noStock='true' />
                    <x-product />
                    <x-product hasTime='true' />s
                    <x-product noStock='true' img="images/food2.webp" />
                    <x-product hasTime='true' />
                    <x-product noStock='true' img="images/food2.webp" />
                </div>

            </div>

        </div>

        </div>

        <div class="container">
            <h1>All Items</h1>

            <div class="container d-flex  align-items-center justify-content-start " style="flex-wrap: wrap; gap: 20px; margin-bottom: 20px" >
                                    <x-product />
                                    <x-product hasTime='true' img="images/food2.webp" />
                                    <x-product />
                                    <x-product />
                                    <x-product img="images/food2.webp" />
                                    <x-product />
                                    <x-product hasTime='true' />
                                    <x-product />
                                    <x-product hasTime='true' />
                                    <x-product />


            </div>


        </div>



           <div class="container  overflow-hidden mb-5 mt-5">
            <h1>Featured Items</h1>

            <div class="mySwiper position-relative">

                <div class="swiper-wrapper">
                    <x-product />
                    <x-product hasTime='true' img="images/food2.webp" />
                    <x-product noStock='true' />
                    <x-product />
                    <x-product hasTime='true' />s
                    <x-product noStock='true' img="images/food2.webp" />
                    <x-product hasTime='true' />
                    <x-product noStock='true' img="images/food2.webp" />
                </div>

            </div>

        </div>


    @endsection




    <style>
        .mainSwiper,
        .mySwiper {
            height: 520px !important;
        }

        .secondHero {
            height: 150px !important;
            position: relative !important;
        }


        .mySwiper {
            width: 100%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        }




        .item {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            overflow: hidden;
            display: -webkit-flex;
            width: 300px !important;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: start;
            justify-content: start;
            -webkit-box-align: start;
            -ms-flex-align: start;
            -webkit-align-items: start;
            align-items: start;
            border-radius: 10px;
            box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.2);


        }

        .itemImage,
        .itemImage img {
            height: 300px !important;
            width: 100% !important;
            overflow: hidden;
            border-radius: 10px;
            transition: all 0.2s ease-in;
        }

        .itemImage img:hover {
            transform: scale(1.2)
        }

        .secondHero::before {
            content: "";
            height: 100% !important;
            width: 100% !important;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .secondHero img {
            object-fit: contain !important;
        }

        .secondHero .animateObj {

            transition: all 0.5s ease-in;


        }

        .secondHero:hover .animateObj {
            height: 200% !important;
            width: 200% !important;
            background-color: rgb(13, 172, 37);
            transition: all 0.5s ease-in;


        }

        @media screen and (max-width : 768px) {
            .title {
                font-size: 30px !important;
            }

            .mainSwiper {
                height: 250px !important;

            }
        }
    </style>
