<!-- Header -->
<div class="flex justify-between items-center py-3 px-4 mt-8 ml-4">
    <h3 id="hs-offcanvas-right-label" class="font-bold font-parkinsans text-black text-4xl">My Cart</h3>
    <a class="mr-2 bg-bibs-red font-parkinsans rounded-full text-white text-sm py-2 px-4 cursor-pointer">Clear All</a>
</div>

<!-- Cart Items Scrollable -->
<div class="flex-grow overflow-y-auto p-4">
    <!-- Cart Items here -->
    <!-- Example Item -->
    @if(session('cart', []))
        @foreach(session('cart', []) as $key => $value)
            <div class="flex items-center justify-between p-4 border border-dashed border-gray-200 rounded-lg mb-4">
                <div class="flex items-center">
                    <div class="w-24 h-24 bg-red-500 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="/{{ $value['image'] }}" alt="Food Image" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col items-start ml-4">
                        <h2 class="text-xl font-bold">{{ $value['name'] }}</h2>
                        <p class="text-red-600 font-normal mt-2">PHP {{ number_format($value['price'], 2) }}</p>
                        <p class="text-green-600 font-medium mt-2 text-xs subtotal">Subtotal : PHP {{ number_format($value['price'] * $value['quantity'], 2) }}</p>
                    </div>

                </div>
                <div class="flex items-center">
                    <a href="/" class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center" id="increase-quantity" data-product-id="{{ $key }}">
                        <span class="text-xl">+</span>
                    </a>

                    <span class="mx-4 text-xl quantity">{{ $value['quantity'] }}</span>

                    <a href="/" class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center" id="decrease-quantity" data-product-id="{{ $key }}">
                        <span class="text-xl">-</span>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center my-2 text-bibs-red">No products in Cart!</p>
    @endif
    <!-- End Example Item -->

    <!-- Total -->
    <div class="mt-8 pt-4 border-t border-gray-200">
        <hr class="border-gray-400">
        <div class="flex justify-between items-center m-4">
            <h3 class="text-xl font-bold">Total</h3>
            <p class="text-xl font-bold total">
                PHP
                {{number_format(array_sum(array_map(function ($item) {
                    return $item['price'] * $item['quantity'];
                }, session('cart', []))), 2) }}</p>
        </div>
        <hr class="border-gray-400">
    </div>
</div>

<div class="p-4 border-t border-gray-200 bg-gray-100 inline-flex justify-center">
    <a class="w-[400px] py-3 bg-bibs-red text-white font-parkinsans rounded-full text-sm text-center"  href="/checkout" >
        Proceed to Checkout
    </a>
</div>
