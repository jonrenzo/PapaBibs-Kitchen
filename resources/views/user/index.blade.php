<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>PapaBibs Kitchen</title>
</head>
<body>

<x-nav-bar>
</x-nav-bar>
<x-chat></x-chat>
<!-- Hero Content -->
<div class="h-[450px] bg-bibs-red relative">
    <!-- Background pattern layer -->
    <div class="absolute inset-0" style="background-image: url({{ asset('images/bg-hats.png') }}); background-repeat: repeat; opacity: 0.1; background-size: 450px"></div>

    <div class="absolute inset-0 flex items-center justify-center">
        <div class="flex items-center">
            <img src="./images/bibs-logo-image.png" class="h-[452px] mt-22">

            <div class="ml-30">
                <h1 class="font-kimbab text-white text-8xl">PapaBibs<br>Kitchen</h1>
                <p class="font-parkinsans text-white mt-5 text-3xl">Basta PapaBibs,<br>Double Saya, <strong>Double Sarap!</strong></p>
            </div>
        </div>
    </div>
</div>

<!-- BestSeller Content inside Carousel -->
<div class="h-[700px] bg-[#ffc100] relative">

    <h1 class="font-kimbab text-white text-5xl font-normal text-center pt-16 text-stroke-[5px] text-stroke-bibs-red text-stroke-fill-white">Our Bestsellers</h1>

    <!-- Slider -->
    <div data-hs-carousel='{
      "loadingClasses": "opacity-0",
      "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
      "slidesQty": {
        "xs": 1,
        "lg": 3
      },
      "isDraggable": true
    }' class="relative mt-10 px-10">

        <div class="hs-carousel w-full overflow-hidden bg-white rounded-lg">
            <div class="relative min-h-72 -mx-1">
                <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 cursor-grab transition-transform duration-700 hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">

                    @foreach($products as $product)
                        <div class="hs-carousel-slide px-1">
                            <a href="#" class="group relative block h-64 w-[333px]">
                                <span class="absolute inset-0 border-2 border-dashed border-black"></span>

                                <div class="relative flex h-full transform border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                                    <div class="absolute inset-0 p-4 transition-opacity group-hover:opacity-0 sm:p-6 lg:p-8 flex flex-col items-center justify-center">
                                        <img class="w-40 h-40 object-contain" src="/{{ $product->image_location }}">
                                        <h2 class="mt-4 text-xl sm:text-2xl text-center font-parkinsans font-bold">{{ $product->name }}</h2>
                                        <div class="flex items-center">
                                            <p class="font-parkinsans text-gray-500">4.4</p>
                                            <svg class="size-3 text-gray-500 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                            </svg>
                                            <p class="font-parkinsans text-gray-500">&nbsp;⋅ 10 mins</p>
                                        </div>
                                    </div>

                                    <div class="absolute inset-0 p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 flex flex-col justify-center">
                                        <h3 class="text-xl font-medium sm:text-2xl font-parkinsans">{{ $product->name }}</h3>
                                        <p class="mt-4 text-sm sm:text-base font-parkinsans line-clamp-3">
                                            {{ $product->description }}
                                        </p>
                                        <p class="mt-6 font-bold font-parkinsans text-bibs-red">Order Now!</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Carousel Navigation Buttons -->
        <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg">
        <span class="text-2xl" aria-hidden="true">
          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"></path>
          </svg>
        </span>
            <span class="sr-only">Previous</span>
        </button>

        <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </span>
        </button>

        <!-- Carousel Pagination -->
        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 flex gap-x-2"></div>
    </div>
    <!-- End Slider -->

    <div class="flex justify-center mt-10">
        <a class="group relative inline-block text-sm font-medium text-white focus:ring-3 focus:outline-hidden font-parkinsans rounded-xl" href="/menu">
            <span class="absolute inset-0 border border-red-600"></span>
            <span class="block border border-red-600 bg-red-600 px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1">
              Order Now!
          </span>
        </a>
    </div>

</div>
<!-- End Best Seller Content -->

<!-- Banner Content -->
<div>
    <img src="./images/banner.png">
    <img src="./images/banner2.png">
</div>

<!-- Footer Section -->
<x-footer>
</x-footer>

</body>
</html>
