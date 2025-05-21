@php
    $statusOrder = ['processing', 'confirmed', 'delivering', 'received'];
    $currentStatus = $order->status->name ?? 'processing';
    $currentIndex = array_search($currentStatus, $statusOrder);

    $steps = [
        ['img' => '/images/cart.png', 'alt' => 'Cart'],
        ['img' => '/images/cook.png', 'alt' => 'Confirmed'],
        ['img' => '/images/deliver.png', 'alt' => 'Delivering'],
        ['img' => '/images/received.png', 'alt' => 'Received'],
    ];

    $label = $order->status->label ?? 'Processing Order';
    $description = $order->status->description ?? 'Sending your order...';
@endphp

<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">

            {{-- Processing Order Panel --}}
            <div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-4xl font-bold text-bibs-red mb-2">{{ $label }}</h2>
                    <p class="text-gray-600 mb-6">{{ $description }}</p>

                    <div class="flex justify-between items-center px-4 mb-3 mt-22">
                        @foreach($steps as $index => $step)
                            <img src="{{ $step['img'] }}"
                                 alt="{{ $step['alt'] }}"
                                 class="w-8 {{ $index <= $currentIndex ? 'opacity-100' : 'opacity-25' }}">
                            @if (!$loop->last)
                                <span class="w-6 h-0.5 {{ $index < $currentIndex ? 'bg-red-600' : 'bg-gray-200' }}"></span>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="space-y-4 mt-5">
                    <button class="w-full bg-white border border-gray-300 rounded-full py-2 font-semibold text-gray-700 shadow hover:bg-gray-50 transition">
                        Download Order Receipt
                    </button>

                    <div class="flex justify-between gap-4">
                        <a href="/" class="flex-1 bg-bibs-red hover:bg-red-700 text-white py-2 rounded-full text-center font-semibold">
                            Back to menu
                        </a>
                        <button aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal" class="flex-1 text-white py-2 rounded-full font-semibold {{ $order->status->name == 'received' ? 'bg-bibs-red' : ' bg-gray-400 opacity-50 cursor-not-allowed' }}">
                            Order complete
                        </button>
                    </div>
                </div>

            </div>


            {{-- Order Receipt Panel --}}
            <div class="bg-white rounded-2xl shadow overflow-hidden w-[657px]">
                <div class="bg-red-600 text-white p-4 flex items-center justify-between h-48">
                    <div class="flex items-center  justify-center w-full gap-3">
                        <img src="/images/Logo-Txt.png" alt="PapaBibs Logo" class="h-48">
                        <img src="/images/bibs-logo-image.png" alt="PapaBibs Logo" class="h-48">
                    </div>
                </div>
                <div class="bg-black h-16 flex justify-between px-5 items-center">
                    <div class="text-sm font-semibold text-white">Order Receipt</div>
                    <div class="text-sm font-semibold text-white">Order #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}</div>
                </div>

                <div class="p-6">
                    <h2 class="text-lg font-bold mb-2">Thanks for ordering at PapaBibs!</h2>
                    <p class="text-gray-700 text-sm mb-6">Your payment was successful—thank you for choosing PapaBibs's Kitchen! We can’t wait to serve you more delicious bites.</p>

                    <div class="grid grid-cols-2 text-sm mb-6">
                        <div>
                            <p><strong>Date:</strong> {{ date($order->created_at) }}</p>
                            <p><strong>Customer ID:</strong> {{ $order->user_id }}</p>
                            <p><strong>Courier:</strong> {{ $order->courier }}</p>
                        </div>
                        <div>
                            <p><strong>Billed to:</strong> {{ $order->payment_method }}</p>
                            <p>{{ $order->user->first_name . " " . $order->user->last_name }}</p>
                            <p>{{ $order->user->address }}</p>
                        </div>
                    </div>

                    <table class="w-full text-sm text-left border-t border-b border-gray-300 mb-6">
                        <thead>
                        <tr class="text-gray-600">
                            <th class="py-2">Purchase Details</th>
                            <th>Quantity</th>
                            <th class="text-right">Total Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->items as $item)
                            <tr class="border-t">
                                <td class="py-2">{{ $item->item_name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td class="text-right">PHP{{ number_format($item->price * $item->quantity, 2) }}</td>
                            </tr>
                        @endforeach
                        <tr class="border-t">
                            <td class="py-2 font-semibold">Subtotal</td>
                            <td></td>
                            <td class="text-right">PHP{{ number_format($order->total, 2) }}</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 font-semibold">Total</td>
                            <td></td>
                            <td class="text-right font-bold">PHP{{ number_format($order->total, 2) }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <p class="text-xs text-gray-600">For questions regarding your order, please email <a href="mailto:papabibskitchenmain@gmail.com" class="underline">papabibskitchenmain@gmail.com</a> or call 0925-510-0513.</p>
                </div>
            </div>
        </div>
    </div>


    <div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
        <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
            <div class="w-full flex flex-col bg-white shadow-2xs rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 bg-bibs-red rounded-t-xl">
                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-white ">
                        Order Complete!
                    </h3>
                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 border border-transparent text-white focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
                        <span class="sr-only">Close</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x text-white"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-gray-800">
                        Your order is complete—thank you for dining with us!  We hope it brought a smile to your day. Feel free to leave a review or share your thoughts!
                    </p>
                </div>
                <div class="flex justify-center items-center gap-x-2 py-3 px-4">
                    <button
                        type="button"
                        class="py-2 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-red-600 text-red-600 bg-white hover:bg-red-50 transition-colors">
                        Back to menu
                    </button>

                    <a
                        href="{{ route('checkout.rate') }}"
                        type="button"
                        class="py-2 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full bg-red-600 text-white hover:bg-red-700 transition-colors">
                        Rate us!
                    </a>
                </div>

            </div>
        </div>
    </div>

</x-layout>
