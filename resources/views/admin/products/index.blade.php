<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans">

<x-admin-layout>
    <h1>Products</h1>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden">

                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <!-- Input -->
                            <div class="sm:col-span-1">
                                <label for="product-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <input type="text" id="product-search" name="product-search" class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Search">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">Product</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">Price</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            @foreach($products as $product)
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        <a href="/admin/products/{{ $product->id }}">{{ $product->id }}</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/admin/products/{{ $product->id }}" class="flex items-center gap-x-4">
                                            <img class="w-10 h-10 rounded-lg object-cover" src="/{{ $product->image_location }}" alt="Product Image">
                                            <span class="text-sm font-semibold text-gray-800">{{ $product->name }}</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-semibold text-gray-800">
                                        P{{ number_format($product->price, 2) }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <a href="/admin/products/{{ $product->id }}/edit" class="text-green-600 hover:text-green-800">
                                                <svg class="w-6 h-6 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                </svg>
                                            </a>
                                            <form action="/admin/products/{{ $product->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800">
                                                    <svg class="w-6 h-6 text-bibs-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 border-t border-gray-200 text-sm text-gray-500">
                            <!-- Optional: Pagination or footer info here -->
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->

</x-admin-layout>

</body>
</html>
