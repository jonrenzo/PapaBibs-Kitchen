<x-layout>
    <div class="bg-gray-100 min-h-screen p-4 relative">
        <div class="absolute inset-0" style="background-image: url({{ asset('images/bg-hats.png') }}); background-repeat: repeat; opacity: 0.1; background-size: 450px; z-index: 0;"></div>

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-4 relative z-10">
            <!-- Left Column: Checkout Form -->
            <div class="bg-white p-6 rounded-lg shadow-sm flex-1">
                <h1 class="text-4xl font-bold text-red-600">Checkout</h1>
                <p class="text-gray-500 text-sm mb-6">Complete your information here to complete checkout.</p>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <strong>Please fix the following errors:</strong>
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('orders.store') }}" method="POST" id="checkout-form">
                    @csrf

                    <!-- Hidden field for courier surcharge -->
                    <input type="hidden" name="courier_surcharge" id="courier-surcharge" value="0">

                    <!-- Step 1: Customer Information -->
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-red-600 rounded-full w-6 h-6 flex items-center justify-center text-white font-bold mr-2">1</div>
                            <h2 class="font-bold">Customer Information</h2>
                        </div>

                        <div class="space-y-3">
                            <div>
                                <label class="block text-sm mb-1">Full name <span class="text-red-600">*</span></label>
                                <input
                                    type="text"
                                    class="w-full border border-gray-300 rounded p-2"
                                    value="{{ $user->first_name ." ". $user->last_name }}"
                                    disabled
                                />
                            </div>

                            <div>
                                <label class="block text-sm mb-1">Mobile No. <span class="text-red-600">*</span></label>
                                <input
                                    type="text"
                                    class="w-full border border-gray-300 rounded p-2"
                                    value="{{ $user->mobile_number }}"
                                    disabled
                                />
                            </div>

                            <div>
                                <label class="block text-sm mb-1">Email <span class="text-red-600">*</span></label>
                                <input
                                    type="email"
                                    class="w-full border border-gray-300 rounded p-2"
                                    value="{{ $user->email }}"
                                    disabled
                                />
                            </div>

                            <div>
                                <label class="block text-sm mb-1">Address <span class="text-red-600">*</span></label>
                                <input
                                    type="text"
                                    class="w-full border border-gray-300 rounded p-2"
                                    value="{{ $user->address }}"
                                    disabled
                                />
                            </div>

                            <div>
                                <label class="block text-sm mb-1">Special Instruction</label>
                                <input
                                    type="text"
                                    name="special_instruction"
                                    class="w-full border border-gray-300 rounded p-2"
                                    value="{{ old('special_instruction') }}"
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Delivery Shipping -->
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-red-600 rounded-full w-6 h-6 flex items-center justify-center text-white font-bold mr-2">2</div>
                            <h2 class="font-bold">Delivery Shipping</h2>
                        </div>

                        <div>
                            <label class="block text-sm mb-1">Choose courier <span class="text-red-600">*</span></label>
                            <div class="relative">
                                <select name="courier" class="w-full border border-gray-300 rounded p-2 appearance-none pr-8">
                                    <option value="Lalamove" {{ old('courier') == 'Lalamove' ? 'selected' : '' }}>Lalamove</option>
                                    <option value="Grab" {{ old('courier') == 'Grab' ? 'selected' : '' }}>Grab</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Payment Details -->
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-red-600 rounded-full w-6 h-6 flex items-center justify-center text-white font-bold mr-2">3</div>
                            <h2 class="font-bold">Payment Details</h2>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm mb-2">Select payment method <span class="text-red-600">*</span></label>
                                <div class="flex gap-4">
                                    <div class="payment-option cursor-pointer border border-gray-300 rounded p-3 flex items-center gap-2 {{ old('payment_method') == 'credit_card' || old('payment_method') == null ? 'bg-gray-50 border-red-600' : '' }}">
                                        <input type="radio" name="payment_method" value="credit_card" id="credit_card" class="hidden" {{ old('payment_method') == 'credit_card' || old('payment_method') == null ? 'checked' : '' }}>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                        </svg>
                                        <label for="credit_card" class="text-sm cursor-pointer">Debit / Credit Card</label>
                                    </div>
                                    <div class="payment-option cursor-pointer border border-gray-300 rounded p-3 flex items-center gap-2 {{ old('payment_method') == 'gcash' ? 'bg-gray-50 border-red-600' : '' }}">
                                        <input type="radio" name="payment_method" value="gcash" id="gcash" class="hidden" {{ old('payment_method') == 'gcash' ? 'checked' : '' }}>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <label for="gcash" class="text-sm cursor-pointer">GCash E-wallet</label>
                                    </div>
                                </div>
                            </div>

                            <div id="card-details" class="{{ old('payment_method') == 'gcash' ? 'hidden' : '' }}">
                                <label class="block text-sm mb-2">Card Details <span class="text-red-600">*</span></label>
                                <input
                                    type="text"
                                    name="card_number"
                                    placeholder="1234 1234 1234 1234"
                                    class="w-full border border-gray-300 rounded p-2 mb-2"
                                    value="{{ old('card_number') }}"
                                />
                                <div class="flex gap-2">
                                    <input
                                        type="text"
                                        name="card_expiry"
                                        placeholder="MM/YY"
                                        class="flex-1 border border-gray-300 rounded p-2"
                                        value="{{ old('card_expiry') }}"
                                    />
                                    <input
                                        type="text"
                                        name="card_cvc"
                                        placeholder="CVC"
                                        class="flex-1 border border-gray-300 rounded p-2"
                                        value="{{ old('card_cvc') }}"
                                    />
                                </div>
                            </div>

                            <div id="gcash-details" class="{{ old('payment_method') != 'gcash' ? 'hidden' : '' }}">
                                <div class="bg-blue-50 p-4 rounded border border-blue-200">
                                    <p class="text-sm">You'll be redirected to GCash to complete the payment after placing your order.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-xs text-gray-600 mb-4">
                        Clicking on "Place Order" means you agree to the
                        <a href="#" class="text-red-600 font-medium">Terms and Conditions</a> and
                        <a href="#" class="text-red-600 font-medium">Privacy Policy</a>.
                    </div>

                    <button type="submit" class="w-full bg-red-600 text-white py-3 rounded font-medium hover:bg-red-700 transition duration-200">Place Order</button>
                </form>
            </div>

            <!-- Right Column: Order Summary -->
            <div class="bg-white p-6 rounded-lg shadow-sm md:w-96">
                <h2 class="text-xl font-bold mb-6">Order Summary</h2>

                <div class="space-y-3 mb-6">
                    @foreach(session('cart') as $item)
                        <!-- Item -->
                        <div class="flex items-center p-3 border border-red-500 border-dashed rounded-lg shadow-lg">
                            <div class="w-10 h-10 bg-gray-200 rounded-full mr-3 overflow-hidden">
                                <img src="/{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <p class="font-bold text-sm">{{ $item['name'] }}</p>
                                <p class="text-xs text-black">Quantity: {{ $item['quantity'] }}</p>
                                <p class="text-red-600 font-medium text-xs subtotal">
                                    Subtotal: PHP {{ number_format($item['price'] * $item['quantity'], 2) }}
                                </p>
                            </div>
                            <div class="font-medium text-green-600">
                                PHP {{ number_format($item['price'], 2) }}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="border-t border-gray-200 pt-4 space-y-2">
                    <div id="courier-additional-row" class="flex justify-between text-base font-medium text-gray-700 pt-2 hidden">
                        <span>Courier Surcharge (Grab)</span>
                        <span class="text-bibs-red">+ PHP 100.00</span>
                    </div>
                    <div class="flex justify-between text-lg font-bold pt-2 border-t mt-2">
                        <span>Total</span>
                        <span id="order-total">
                            PHP {{ number_format(array_sum(array_map(function ($item) {
                                return $item['price'] * $item['quantity'];
                            }, session('cart', []))), 2) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle payment method selection
            const paymentOptions = document.querySelectorAll('.payment-option');
            const cardDetails = document.getElementById('card-details');
            const gcashDetails = document.getElementById('gcash-details');

            paymentOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Reset all options
                    paymentOptions.forEach(item => {
                        item.classList.remove('bg-gray-50', 'border-red-600');
                    });

                    // Highlight selected option
                    this.classList.add('bg-gray-50', 'border-red-600');

                    // Check/select the radio button
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;

                    // Show/hide appropriate payment details
                    if (radio.value === 'credit_card') {
                        cardDetails.classList.remove('hidden');
                        gcashDetails.classList.add('hidden');
                    } else {
                        cardDetails.classList.add('hidden');
                        gcashDetails.classList.remove('hidden');
                    }
                });
            });

            // Form validation before submission
            document.getElementById('checkout-form').addEventListener('submit', function(e) {
                const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;

                if (paymentMethod === 'credit_card') {
                    const cardNumber = document.querySelector('input[name="card_number"]').value.trim();
                    const cardExpiry = document.querySelector('input[name="card_expiry"]').value.trim();
                    const cardCvc = document.querySelector('input[name="card_cvc"]').value.trim();

                    if (!cardNumber || !cardExpiry || !cardCvc) {
                        e.preventDefault();
                        alert('Please fill in all card details');
                    }
                }
            });

            // --- Add logic for courier affecting total and surcharge row ---
            const courierSelect = document.querySelector('select[name="courier"]');
            const orderTotalSpan = document.getElementById('order-total');
            const courierAdditionalRow = document.getElementById('courier-additional-row');
            const courierSurchargeInput = document.getElementById('courier-surcharge');
            let baseTotal = {{ array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, session('cart', []))) }};

            function updateTotal() {
                let surcharge = 0;
                let total = baseTotal;

                if (courierSelect.value.toLowerCase() === 'grab') {
                    surcharge = 100;
                    total += surcharge;
                    courierAdditionalRow.classList.remove('hidden');
                } else {
                    courierAdditionalRow.classList.add('hidden');
                }

                // Update the hidden input with surcharge amount
                courierSurchargeInput.value = surcharge;

                // Update displayed total
                orderTotalSpan.textContent = 'PHP ' + total.toLocaleString('en-PH', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            }

            courierSelect.addEventListener('change', updateTotal);
            updateTotal(); // Initialize on page load
        });
    </script>
</x-layout>
