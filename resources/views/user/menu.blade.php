<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans bg-[#f0f0f2]">

<x-nav-bar></x-nav-bar>

<div class="h-full pt-4">
    <!-- ========== HEADER ========== -->
    <header class="top-4 max-w-5xl inset-x-0 flex flex-wrap mx-auto   md:flex-nowrap z-50 w-full bg-white shadow-md rounded-full">
        <nav class="relative max-w-5xl w-full py-2.5 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto">
            <!-- Collapse -->
            <div id="hs-navbar-floating-dark" class="p-2 hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-navbar-floating-dark-collapse">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-y-3 py-2 md:py-0 md:ps-7">
                    <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-black hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600" href="#">Bestseller</a>
                    <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-black hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600" href="#">Rice Meals</a>
                    <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-black hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600" href="#">Solo Barbeque Sticks</a>
                    <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-black hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600" href="#">Solo Rice</a>
                    <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-black hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600" href="#">Barbeque Bilao</a>
                    <a class="pe-3 ps-px sm:px-3 md:py-4 text-sm text-black hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600" href="#">Drinks</a>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <div class="bg-white h-[1099px] w-[1146px] rounded-4xl mx-auto mt-5 mb-5">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @foreach($products as $product)
            <!-- Card -->
                <div class="bg-white border-2 border-dashed border-bibs-red rounded-lg shadow-lg p-4 pl-2 flex flex-col justify-between text-center h-[466px] w-[320px] m-7">
                    <div class="flex flex-col items-center">
                        <img src="/{{ $product->image_location }}" alt="{{ $product->name }}" class="h-44 object-cover rounded-full mb-2">
                        <div class="pl-4 mb-8">
                            <h1 class="text-xl font-extrabold text-black text-left">{{ $product->name }}</h1>
                            <p class="text-bibs-red font-normal mt-1 text-left">PHP {{ number_format($product->price, 2) }}</p>
                            <p class="text-sm text-black mt-2 text-left">{{ $product->description }}.</p>
                        </div>
                    </div>
                    <button class="transition-all duration-200 mt-4 bg-bibs-red text-white font-normal hover:bg-bibs-yellow hover:text-black py-2 px-4 rounded-full w-[256px] mx-auto">
                        Add to cart
                    </button>
                </div>

            <!-- End Card -->
            @endforeach
        </div>



    </div>



</div>

<x-footer></x-footer>
</body>
</html>
