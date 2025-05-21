<x-account-layout>
    <h2 class="text-2xl font-bold mb-2">My Orders</h2>
    <p class="text-gray-600 mb-8">Track Your Order History</p>

    <div class="-m-1.5 overflow-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <div class="table border-collapse table-auto w-full divide-y divide-gray-200">
                    <div class="table-header-group">
                        <div class="table-row">
                            <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order ID</div>
                            <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Payment Method</div>
                            <div class="table-cell px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Items</div>
                            <div class="table-cell px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Total</div>
                        </div>
                    </div>
                    <div class="table-row-group divide-y divide-gray-200 bg-white">
                        @forelse($orders as $order)
                        <div class="table-row">
                            <div class="table-cell px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $order->id }}</div>
                            <div class="table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $order->payment_method ?? '-' }}</div>
                            <div class="table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                @if(is_array(json_decode($order->items)))
                                    @foreach(json_decode($order->items) as $item)
                                        {{ $item->item_name }}<br>
                                    @endforeach
                                @else
                                    -
                                @endif
                            </div>
                            <div class="table-cell px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                {{ $order->total ?? '-' }}
                            </div>
                        </div>
                        @empty
                        <div class="table-row">
                            <div class="table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-500" colspan="4">
                                No orders found.
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-account-layout>
