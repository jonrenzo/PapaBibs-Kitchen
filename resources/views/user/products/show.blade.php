<x-layout>
    <div class="relative max-h-full bg-gray-200">
        <div class="absolute inset-0" style="background-image: url({{ asset('images/bg-hats.png') }}); background-repeat: repeat; opacity: 0.1; background-size: 450px"></div>

        <div class="relative z-10 max-w-full mx-auto py-10 px-6">
            <!-- Main Content -->
            <div class="flex flex-wrap">
                <!-- Product Section -->
                <div class="flex-1 min-w-0 pr-6">
                    <div class="bg-white rounded-xl shadow p-10" style="height: 505px;">
                        <div class="flex flex-col md:flex-row gap-6">
                            <!-- Product Image -->
                            <div class="">
                                <img src="/{{ $product->image_location }}" alt="{{ $product->name }}" class="w-md mx-auto object-cover rounded-full border-4 border-red-500">
                            </div>

                            <!-- Product Details -->
                            <div class="md:w-1/2 flex flex-col justify-between">
                                <div>
                                    <h1 class="text-6xl font-bold">{{ $product->name }}</h1>
                                    <p class="text-gray-600 mt-4 flex items-center gap-2">
                                        <span>4.4</span>
                                        <span class="text-yellow-400">★</span>
                                        <span>•</span>
                                        <span>{{ $product->prep_time }}</span>
                                    </p>
                                    <p class="text-red-600 font-semibold mt-2">Good for {{ $product->serving }}</p>
                                    <p class="text-sm text-gray-700 mt-2">
                                        {{ $product->description }}
                                    </p>

                                    <div class="mt-5 flex flex-wrap gap-2">
                                        @foreach($product->tags as $tag)
                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-bibs-red text-white">{{ $tag->name }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Price and Quantity -->
                                <div class="mt-8">
                                    <div class="flex items-center justify-between">
                                        <!-- Quantity Selector -->
                                        <div class="flex items-center">
                                            <button class="bg-gray-200 w-8 h-8 flex items-center justify-center rounded-full text-lg font-medium">+</button>
                                            <span class="font-medium px-4">1</span>
                                            <button class="bg-gray-200 w-8 h-8 flex items-center justify-center rounded-full text-lg font-medium">−</button>
                                        </div>

                                        <!-- Price and Add to Cart Button -->
                                        <div class="flex ml-4">
                                            <div class="bg-bibs-red text-white py-3 px-4 rounded-l-full flex items-center justify-center mr-2">
                                                <span class="text-sm">Php {{ number_format($product->price, 2) }}</span>
                                            </div>
                                            <button
                                                class="add-to-cart-btn bg-bibs-red text-white py-3 px-6 rounded-r-full hover:bg-red-800 text-sm"
                                                data-product-id="{{ $product->id }}"
                                            >
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Section -->
                    <h2 class="text-4xl font-bold mt-10 mb-4">Reviews</h2>
                    <div class="flex">
                        @foreach(range(1, 3) as $i)
                            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm m-2">
                                <h3 class="font-bold text-lg mb-1">Juan Dela Cruz</h3>
                                <div class="flex gap-1 text-yellow-400 text-lg mb-2">
                                    @for($s = 1; $s <= 5; $s++)
                                        @if($s <= 4)
                                            <span>★</span>
                                        @else
                                            <span class="text-gray-300">★</span>
                                        @endif
                                    @endfor
                                </div>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Recommended Products -->
                <div class="md:w-1/3 ml-3" style="width: 450px;">
                    <div class="bg-white p-6 rounded-xl shadow h-full">
                        <h2 class="text-xl font-bold mb-4">Recommended products</h2>
                        <div class="gap-4">
                            @foreach($recommendedProducts as $index => $item)
                                <div class="flex items-center justify-between border border-gray-200 rounded-2xl p-3 mt-4">
                                    <div class="flex items-center gap-3">
                                        <a href="/menu/{{ $item->id }}">
                                            <img src="/{{ $item->image_location }}" alt="{{ $item->name }}" class="h-20 w-20 rounded-full object-cover border-2 border-red-500">
                                        </a>
                                        <a href="/menu/{{ $item->id }}">
                                            <div>
                                                <p class="font-bold text-lg">{{ $item->name }}</p>
                                                <p class="text-gray-500 text-xs flex items-center gap-1 mt-1">
                                                    4.4 <span class="text-yellow-400">★</span> • 10 mins
                                                </p>
                                            </div>
                                        </a>

                                    </div>
                                    <button class="add-to-cart-btn bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-700"
                                            data-product-id="{{ $item->id }}"
                                    >
                                        <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
