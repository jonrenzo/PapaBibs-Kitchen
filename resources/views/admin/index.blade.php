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
    <h1 class="text-2xl font-bold">Dashboard</h1>
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
                    <h3 class="text-7xl font-semibold text-green-700 confetti-run">
                        {{ count($product) }}
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
                    <h3 class="text-7xl font-semibold text-green-700 confetti-run">
                        {{ count($users) }}
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
                    <h3 class="text-7xl font-semibold text-green-700 confetti-run">
                        0
                    </h3>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

    <h1 class="text-2xl font-bold">Reports</h1>
</x-admin-layout>


<!-- Confetti -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>

<script>
    (function() {
        const runConfettiElements = document.querySelectorAll('.confetti-run');
        runConfettiElements.forEach(element => {
            element.addEventListener('click', () => {
                // confetti({
                //     angle: randomInRange(55, 125),
                //     spread: randomInRange(50, 70),
                //     particleCount: randomInRange(50, 100),
                //     origin: { y: 0.6 }
                // });
                realistic();
            });
        });
    })();

    function realistic(){
        var count = 200;
        var defaults = {
            origin: { y: 0.7 }
        };

        function fire(particleRatio, opts) {
            confetti({
                ...defaults,
                ...opts,
                particleCount: Math.floor(count * particleRatio)
            });
        }

        fire(0.25, {
            spread: 26,
            startVelocity: 55,
        });
        fire(0.2, {
            spread: 60,
        });
        fire(0.35, {
            spread: 100,
            decay: 0.91,
            scalar: 0.8
        });
        fire(0.1, {
            spread: 120,
            startVelocity: 25,
            decay: 0.92,
            scalar: 1.2
        });
        fire(0.1, {
            spread: 120,
            startVelocity: 45,
        });
    }

    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }
</script>


</body>
</html>
