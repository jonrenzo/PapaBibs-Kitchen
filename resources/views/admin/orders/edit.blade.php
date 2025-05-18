<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Admin Panel | PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans">
<x-admin-layout>
    <h1>Edit Order : <span class="text-bibs-red font-bold">{{ $order->id }}</span></h1>

    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <form method="POST" action="/admin/orders/{{ $order->id }}/edit" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-xs">
                <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                    <!-- Grid -->
                    <div class="space-y-5">
                        <div class="space-y-2">
                            <label for="user_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                User ID
                            </label>
                            <input
                                id="user_id"
                                name="user_id"
                                type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Enter User ID"
                                required
                                value="{{ $order->user_id }}"
                            >
                            @error('user_id')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="total" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Total
                            </label>
                            <input
                                id="total"
                                name="total"
                                type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Enter Product Price"
                                required
                                value="{{ $order->total }}"
                            >
                            @error('total')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="courier" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Courier
                            </label>
                            <input
                                id="courier"
                                name="courier"
                                type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Enter Product Price"
                                required
                                value="{{ $order->courier }}"
                            >
                            @error('courier')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="payment_method" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Payment Method
                            </label>
                            <input
                                id="payment_method"
                                name="payment_method"
                                type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Enter Product Price"
                                required
                                value="{{ $order->payment_method }}"
                            >
                            @error('serving')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="status" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Status
                            </label>

                            <!-- Select -->
                            <select
                                name="status"
                                id="status"
                                data-hs-select='{
                                  "placeholder": "Select status...",
                                  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                                  "mode": "status",
                                  "wrapperClasses": "pl-2 w-full relative ps-0.5 pe-9 min-h-11.5 flex items-center flex-wrap text-nowrap w-full border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500"
                                }'
                                class="hidden w-full pl-2"
                            >
                                <option value="" disabled selected class="w-full pl-2">Select status...</option>

                                @foreach($statuses as $status)
                                    <option
                                        value="{{ $status->id }}"
                                        @if(old('status', $order->status_id ?? '') == $status->id) selected @endif
                                    >
                                        {{ $status->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- End Select -->

                            @error('status')
                            <p class="font-parkinsans text-bibs-red text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <a href="/admin/orders" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-bibs-red text-white hover:bg-red-800 focus:outline-hidden focus:bg-red-800  disabled:opacity-50 disabled:pointer-events-none">
                            Cancel
                        </a>
                        <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            Update
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </form>
    </div>
    <!-- End Card Section -->
</x-admin-layout>

</body>
</html>
