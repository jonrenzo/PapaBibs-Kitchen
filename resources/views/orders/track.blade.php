<x-layout>
    <div class="bg-gray-100 min-h-screen p-3 sm:p-6">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow">
                <div class="text-center mb-4 sm:mb-6">
                    <h1 class="text-2xl sm:text-3xl font-bold text-bibs-red mb-2">Track Your Order</h1>
                    <p class="text-gray-600">Order #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}</p>
                </div>

                {{-- Order Status --}}
                @php
                    $statusOrder = ['processing', 'confirmed', 'delivering', 'received'];
                    $currentStatus = $order->status->name ?? 'processing';
                    $currentIndex = array_search($currentStatus, $statusOrder);

                    $steps = [
                        ['img' => '/images/cart.png', 'alt' => 'Cart', 'label' => 'Processing'],
                        ['img' => '/images/cook.png', 'alt' => 'Confirmed', 'label' => 'Confirmed'],
                        ['img' => '/images/deliver.png', 'alt' => 'Delivering', 'label' => 'Delivering'],
                        ['img' => '/images/received.png', 'alt' => 'Received', 'label' => 'Received'],
                    ];
                @endphp

                <div class="mb-6 sm:mb-8 overflow-x-auto">
                    <div class="flex justify-between items-center px-2 sm:px-4 mb-4 min-w-[350px]">
                        @foreach($steps as $index => $step)
                            <div class="flex flex-col items-center">
                                <img src="{{ $step['img'] }}"
                                     alt="{{ $step['alt'] }}"
                                     class="w-8 h-8 sm:w-12 sm:h-12 mb-1 sm:mb-2 {{ $index <= $currentIndex ? 'opacity-100' : 'opacity-25' }}">
                                <span class="text-[10px] sm:text-xs {{ $index <= $currentIndex ? 'text-bibs-red font-semibold' : 'text-gray-400' }}">
                                    {{ $step['label'] }}
                                </span>
                            </div>
                            @if (!$loop->last)
                                <div class="flex-1 h-0.5 mx-1 sm:mx-2 {{ $index < $currentIndex ? 'bg-red-600' : 'bg-gray-200' }}"></div>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- Current Status --}}
                <div class="text-center mb-4 sm:mb-6">
                    <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1 sm:mb-2">
                        {{ $order->status->label ?? 'Processing Order' }}
                    </h2>
                    <p class="text-sm sm:text-base text-gray-600">{{ $order->status->description ?? 'Your order is being processed' }}</p>
                </div>

                {{-- Order Details --}}
                <div class="border-t pt-4 sm:pt-6">
                    <h3 class="font-semibold text-gray-800 mb-3 sm:mb-4">Order Details</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-4 text-sm">
                        <div>
                            <p class="mb-1"><strong>Order Date:</strong> {{ $order->created_at->format('M d, Y') }}</p>
                            <p><strong>Customer:</strong> {{ $order->user->first_name }} {{ $order->user->last_name }}</p>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <p class="mb-1"><strong>Total:</strong> PHP{{ number_format($order->total, 2) }}</p>
                            <p><strong>Payment:</strong> {{ $order->payment_method }}</p>
                        </div>
                    </div>
                </div>

                {{-- Items --}}
                <div class="border-t pt-4 sm:pt-6 mt-4 sm:mt-6">
                    <h3 class="font-semibold text-gray-800 mb-3 sm:mb-4">Items Ordered</h3>
                    <div class="max-h-[200px] sm:max-h-none overflow-y-auto">
                        @foreach ($order->items as $item)
                            <div class="flex justify-between items-center py-2 border-b last:border-b-0">
                                <div class="pr-2">
                                    <p class="font-medium text-sm sm:text-base">{{ $item->item_name }}</p>
                                    <p class="text-xs sm:text-sm text-gray-600">Qty: {{ $item->quantity }}</p>
                                </div>
                                <p class="font-medium text-sm sm:text-base">PHP{{ number_format($item->price * $item->quantity, 2) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Actions --}}
                <div class="mt-6 sm:mt-8 text-center">
                    <a href="/" class="inline-block bg-bibs-red hover:bg-red-700 text-white px-5 sm:px-6 py-2 rounded-full text-sm sm:text-base font-semibold">
                        Back to Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
