<x-layout>
    <x-chat></x-chat>
    <div class="h-full pt-4 bg-gray-100">
        <!-- ========== HEADER ========== -->
        <header class="top-4 max-w-5xl inset-x-0 flex flex-wrap mx-auto   md:flex-nowrap z-50 w-full bg-white shadow-md rounded-full">
            <nav class="relative max-w-5xl w-full py-2.5 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                <!-- Collapse -->
                <div id="hs-navbar-floating-dark" class="p-2 hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-navbar-floating-dark-collapse">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-y-3 py-2 md:py-0 md:ps-7">
                        @foreach($tags as $index => $tag)
                            <button
                                type="button"
                                class="hs-tab-active:bg-bibs-red hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active: py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm font-medium text-center text-gray-500 hover:text-bibs-yellow focus:outline-hidden focus:text-blue-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none {{ $index === 0 ? 'active' : '' }}"
                                id="pills-with-brand-color-item-{{ $index + 1 }}"
                                aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                                data-hs-tab="#pills-with-brand-color-{{ $index + 1 }}"
                                aria-controls="pills-with-brand-color-{{ $index + 1 }}"
                                role="tab"
                            >
                                {{ $tag->name }}
                            </button>
                        @endforeach

                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <div class="bg-white h-[1099px] w-[1146px] rounded-4xl mx-auto mt-5 mb-5">

            <div class="mt-3">
                @foreach($tags as $index => $tag)
                    <div
                        id="pills-with-brand-color-{{ $index + 1 }}"
                        class="{{ $index !== 0 ? 'hidden' : '' }}"
                        role="tabpanel"
                        aria-labelledby="pills-with-brand-color-item-{{ $index + 1 }}"
                    >
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6 bg-white rounded-2xl">
                            @forelse($tag->products as $product)
                                <!-- Card -->
                                <a href="/menu/{{ $product->id }}" class="bg-white border-2 border-dashed border-bibs-red rounded-lg shadow-lg p-4 pl-2 flex flex-col justify-between text-center h-[466px] w-[320px] m-7">
                                    <div class="flex flex-col items-center">
                                        <img src="/{{ $product->image_location }}" alt="{{ $product->name }}" class="h-44 object-cover rounded-full mb-2">
                                        <div class="pl-4 mb-8">
                                            <h1 class="text-xl font-extrabold text-black text-left">{{ $product->name }}</h1>
                                            <p class="text-bibs-red font-normal mt-1 text-left">PHP {{ number_format($product->price, 2) }}</p>
                                            <p class="text-sm text-black mt-2 text-left">{{ $product->description }}.</p>
                                        </div>
                                    </div>
                                    <button
                                        class="add-to-cart-btn transition-all duration-200 mt-4 bg-bibs-red text-white font-normal hover:bg-bibs-yellow hover:text-black py-2 px-4 rounded-full w-[256px] mx-auto"
                                        data-product-id="{{ $product->id }}"
                                    >
                                        Add to cart
                                    </button>

                                </a>
                                <!-- End Card -->
                            @empty
                                <p class="text-gray-400 px-4">No products under this tag.</p>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
