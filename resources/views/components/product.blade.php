@props(['hasTime', 'noStock', 'img'])

<div class="swiper-slide item " style="user-select: none">
    <div class="w-100 h-100 d-flex flex-column gap-2">
        <div class="itemImage position-relative ">
            <img class="img-fluid" src={{$img}} alt="something" />
            <div class="position-absolute top-0 left-0 " style="width: 100%; height : 50px; background-color: rgb(5, 137, 56)">
                <div class="h-100 w-100 d-flex align-items-center  pt-4 px-2 justify-content-between">
                    <p style="font-size: 14px">View Product</p>
                   <div class="icons pb-3 d-flex gap-2 ">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-solid fa-eye"></i>
                   </div>
                </div>
            </div>
        </div>
        @if ($hasTime == 'true')
            <div class="bg-dark w-100 text-white d-flex align-items-center justify-content-center pt-3" style="height: 70px">
            <div class="p-2">
                <h4 style="fontsize: 14px">20</h4>
                <p style="font-size: 12px">Days</p>
            </div>
            <div class="p-2">
                <h4 style="fontsize: 14px">7</h4>
                <p style="font-size: 12px">Hours</p>
            </div>

            <div class="p-2">
                <h4 style="fontsize: 14px">3</h4>
                <p style="font-size: 12px">Mins</p>
            </div>

            <div class="p-2">
                <h4 style="fontsize: 14px">10</h4>
                <p style="font-size: 12px">Secs</p>
            </div>
        </div>
        @endif

        <h4 class="fw-bold">Ponytail Palm</h4>
        <span class="text-success fw-bolder"><del>300 OMR</del> 259 OMR </span>
        <span>
            <i class="fa-solid fa-star text-success"></i>
            <i class="fa-solid fa-star text-success"></i>
            <i class="fa-solid fa-star text-success"></i>
            <i class="fa-solid fa-star text-success"></i>
            <i class="fa-solid fa-star text-success"></i>

        </span>

         @if ($noStock == 'true')
         <button class="btn btn-warning m-2 disabled"><span><i class="fa-solid fa-cart-plus"></i> Out of Stock</span></button>
        @else
  <button class="btn btn-success m-2"><span><i class="fa-solid fa-cart-plus"></i> Add To
                Cart</span></button>
         @endif

    .

    </div>
</div>
