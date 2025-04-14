<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>PapaBibs Kitchen</title>
</head>
<body>
<x-nav-bar>
</x-nav-bar>

<!-- Hero Content -->
<div class="h-[450px] bg-bibs-red relative">
    <!-- Background pattern layer -->
    <div class="absolute inset-0" style="background-image: url('./images/bg-hats.png'); background-repeat: repeat; opacity: 0.1; background-size: 450px"></div>

    <div class="absolute inset-0 flex items-center justify-center">
        <div class="flex items-center">
            <img src="./images/bibs-logo-image.png" class="h-[452px] mt-22">

            <div class="ml-30">
                <h1 class="font-kimbab text-white text-8xl">PapaBibs<br>Kitchen</h1>
                <p class="font-parkinsans text-white mt-5 text-3xl">Basta PapaBibs,<br>Double Saya, <strong>Double Sarap!</strong></p>
            </div>
        </div>
    </div>
</div>

<!-- BestSeller Content -->
<div class="h-[600px] bg-[#ffc100] relative">
    <h1 class="font-kimbab text-white text-5xl font-normal text-center pt-16 text-stroke-[5px] text-stroke-bibs-red text-stroke-fill-white">Our Bestsellers</h1>

    <div class="flex justify-evenly gap-6 mt-10 p-10">
        <!-- Card 1 -->
        <a href="#" class="group relative block h-64 w-[333px]">
            <span class="absolute inset-0 border-2 border-dashed border-black"></span>

            <div class="relative flex h-full transform border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                <div class="absolute inset-0 p-4 transition-opacity group-hover:opacity-0 sm:p-6 lg:p-8 flex flex-col items-center justify-center">
                    <img class="w-40 h-40 object-contain" src="./images/chicken-pastil.png">
                    <h2 class="mt-4 text-xl sm:text-2xl text-center font-parkinsans font-bold">Chicken Pastil</h2>
                    <div class="flex items-center">
                        <p class="font-parkinsans text-gray-500">4.4</p>
                        <svg class="size-3 text-gray-500 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <p class="font-parkinsans text-gray-500">&nbsp;⋅ 10 mins</p>
                    </div>
                </div>

                <div class="absolute inset-0 p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-medium sm:text-2xl font-parkinsans">Chicken Pastil</h3>
                    <p class="mt-4 text-sm sm:text-base font-parkinsans">
                        Homemade taste chicken pastil native from Maguindanao, shredded chicken cooked with aromatics from Mindanao.
                    </p>
                    <p class="mt-6 font-bold font-parkinsans text-bibs-red">Order Now!</p>
                </div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="#" class="group relative block h-64 w-[333px]">
            <span class="absolute inset-0 border-2 border-dashed border-black"></span>

            <div class="relative flex h-full transform border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                <div class="absolute inset-0 p-4 transition-opacity group-hover:opacity-0 sm:p-6 lg:p-8 flex flex-col items-center justify-center">
                    <img class="w-40 h-40 object-contain" src="./images/chicken-pastil.png">
                    <h2 class="mt-4 text-xl sm:text-2xl text-center font-parkinsans font-bold">Chicken Pastil</h2>
                    <div class="flex items-center">
                        <p class="font-parkinsans text-gray-500">4.4</p>
                        <svg class="size-3 text-gray-500 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <p class="font-parkinsans text-gray-500">&nbsp;⋅ 10 mins</p>
                    </div>
                </div>

                <div class="absolute inset-0 p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-medium sm:text-2xl font-parkinsans">Chicken Pastil</h3>
                    <p class="mt-4 text-sm sm:text-base font-parkinsans">
                        Homemade taste chicken pastil native from Maguindanao, shredded chicken cooked with aromatics from Mindanao.
                    </p>
                    <p class="mt-6 font-bold font-parkinsans text-bibs-red">Order Now!</p>
                </div>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="#" class="group relative block h-64 w-[333px]">
            <span class="absolute inset-0 border-2 border-dashed border-black"></span>

            <div class="relative flex h-full transform border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                <div class="absolute inset-0 p-4 transition-opacity group-hover:opacity-0 sm:p-6 lg:p-8 flex flex-col items-center justify-center">
                    <img class="w-40 h-40 object-contain" src="./images/chicken-pastil.png">
                    <h2 class="mt-4 text-xl sm:text-2xl text-center font-parkinsans font-bold">Chicken Pastil</h2>
                    <div class="flex items-center">
                        <p class="font-parkinsans text-gray-500">4.4</p>
                        <svg class="size-3 text-gray-500 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <p class="font-parkinsans text-gray-500">&nbsp;⋅ 10 mins</p>
                    </div>
                </div>

                <div class="absolute inset-0 p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-medium sm:text-2xl font-parkinsans">Chicken Pastil</h3>
                    <p class="mt-4 text-sm sm:text-base font-parkinsans">
                        Homemade taste chicken pastil native from Maguindanao, shredded chicken cooked with aromatics from Mindanao.
                    </p>
                    <p class="mt-6 font-bold font-parkinsans text-bibs-red">Order Now!</p>
                </div>
            </div>
        </a>
    </div>

    <div class="flex justify-center mt-10">
        <a class="group relative inline-block text-sm font-medium text-white focus:ring-3 focus:outline-hidden font-parkinsans rounded-xl" href="#">
            <span class="absolute inset-0 border border-red-600"></span>
            <span class="block border border-red-600 bg-red-600 px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1">
                Order Now!
            </span>
        </a>
    </div>
</div>

<!-- Banner Content -->
<div>
    <img src="./images/banner.png">
    <img src="./images/banner2.png">
</div>

<!-- Footer Section -->
<x-footer>
</x-footer>

</body>
</html>
