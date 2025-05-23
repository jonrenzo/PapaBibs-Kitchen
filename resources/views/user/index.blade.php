<x-layout>

    <x-chat></x-chat>

    <!-- Hero Content -->
    <div class="h-[450px] bg-bibs-red relative">
        <!-- Background pattern layer -->
        <div class="absolute inset-0" style="background-image: url({{ asset('images/bg-hats.png') }}); background-repeat: repeat; opacity: 0.1; background-size: 450px"></div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="flex items-center">
                <img src="./images/bibs-logo-image.png" class="h-[452px] mt-22" loading="lazy">

                <div class="ml-30">
                    <h1 class="font-kimbab text-white text-8xl">PapaBibs<br>Kitchen</h1>
                    <p class="font-parkinsans text-white mt-5 text-3xl">Basta PapaBibs,<br>Double Saya, <strong>Double Sarap!</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- BestSeller Content inside Carousel -->
    <div class="h-auto py-8 bg-[#ffc100] relative">

        <img src="./images/best.png" alt="Our BestSeller" class="h-[250px] mx-auto" loading="lazy">

        <!-- Slider -->
        <div data-hs-carousel='{
      "loadingClasses": "opacity-0",
      "slidesQty": {
        "xs": 1,
        "lg": 3
      },
      "isDraggable": true
    }' class="relative px-10">

            <div class="hs-carousel w-full overflow-hidden rounded-lg">
                <div class="relative h-auto -mx-1">
                    <div class="hs-carousel-body m-5 flex flex-nowrap justify-center gap-x-4 transition-transform duration-700 hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">
                        @foreach($products->filter(fn($product) => $product->tags->contains('name', 'Bestseller')) as $product)
                            <a href="/menu/{{$product->id}}" class="hs-carousel-slide px-1 flex flex-col justify-around items-center">
                                <div class="h-[350px] w-[280px] bg-white rounded-xl shadow-lg p-4 flex flex-col items-center border-2 border-dashed border-bibs-red">
                                    <!-- Product Image -->
                                    <div class="w-36 rounded-full flex items-center justify-center">
                                        <img class="w-36 object-contain rounded-full" src="/{{ $product->image_location }}" alt="{{ $product->name }}">
                                    </div>

                                    <!-- Product Name -->
                                    <h3 class="text- font-bold text-bibs-red mb-2 text-center font-parkinsans text-left">{{ $product->name }}</h3>

                                    <!-- Rating -->
                                    <div class="flex items-center mb-4">
                                        <span class="text-sm font-medium">4.4</span>
                                        <svg class="w-4 h-4 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-sm text-gray-600 ml-2">• {{ $product->prep_time }}</span>
                                    </div>

                                    <!-- Product Description -->
                                    <p class="text-xs text-gray-700 text-left leading-relaxed font-parkinsans px-2 line-clamp-3 overflow-hidden">
                                        {{ $product->description }}
                                    </p>

                                    <button
                                        class="add-to-cart-btn transition-all duration-200 mt-2 rounded-2xl w-full bg-bibs-red text-white font-normal hover:bg-bibs-yellow hover:text-black py-2 px-4 mx-auto"
                                        data-product-id="{{ $product->id }}"
                                    >
                                        Add to cart
                                    </button>
                                </div>
                            </a>
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
            <div class="hs-carousel-pagination flex justify-center mt-6 flex gap-x-2"></div>

            <!-- Order Now Button -->
            <div class="flex justify-center mt-4 mb-4">
                <a class="group relative inline-block text-sm font-medium text-white focus:ring-3 focus:outline-hidden font-parkinsans rounded-xl" href="/menu">
                    <span class="absolute inset-0 border border-red-600 rounded-xl"></span>
                    <span class="block border border-red-600 bg-red-600 px-12 py-3 rounded-xl transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1">
                    Order Now!
                </span>
                </a>
            </div>
        </div>
        <!-- End Slider -->
    </div>

    <!-- Banner Content -->
    <div>
        <img src="./images/banner.png">
        <img src="./images/banner2.png">
    </div>

</x-layout>
