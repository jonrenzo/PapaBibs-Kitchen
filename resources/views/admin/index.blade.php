<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Admin Panel | PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans bg-gray-100">

<x-admin-layout>
    <!-- Card Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Products</span>
                </div>

                <div class="text-center">
                    <h3 class="text-7xl font-semibold text-green-700">
                        0
                    </h3>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Users</span>
                </div>

                <div class="text-center">
                    <h3 class="text-7xl font-semibold text-green-700">
                        0
                    </h3>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Total Earnings</span>
                </div>

                <div class="text-center">
                    <h3 class="text-7xl font-semibold text-green-700">
                        0
                    </h3>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->
</x-admin-layout>

</body>
</html>
