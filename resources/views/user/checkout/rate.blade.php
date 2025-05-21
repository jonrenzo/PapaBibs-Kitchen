<x-layout>
    <div class="container mx-auto p-4 bg-gray-100">
        <h1 class="text-3xl font-bold text-gray-800">Give us a rate!</h1>
        <p class="my-4 text-gray-600">
            Help us make your Papabibs experience even better! Rate the different aspects of your order — from the platform to the food. Your honest feedback helps us serve you better!
        </p>

        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Order Details</h2>
            <p><strong>Date:</strong> May 1, 2025</p>
            <p><strong>Billed to:</strong> Visa ... 1234</p>
            <p><strong>Customer:</strong> Maria Louise Eve</p>
            <p><strong>Address:</strong> Barangay, Any Location, Any City, Philippines</p>
            <p><strong>ID:</strong> 01234</p>
            <p><strong>Courier:</strong> Lalamove</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mt-4">
            <h2 class="text-xl font-semibold mb-2">Food Preparation</h2>
            <p class="mb-2">How would you rate how your food was prepared—presentation, temperature, packaging?</p>
            <div class="text-yellow-400 text-2xl mb-2">★★★★★</div>
            <textarea class="w-full p-2 border rounded-lg" placeholder="Write a comment..."></textarea>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mt-4">
            <h2 class="text-xl font-semibold mb-2">Delivery Time</h2>
            <p class="mb-2">Did your order arrive on time and in good condition?</p>
            <div class="text-yellow-400 text-2xl mb-2">★★★★★</div>
            <textarea class="w-full p-2 border rounded-lg" placeholder="Write a comment..."></textarea>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mt-4">
            <h2 class="text-xl font-semibold mb-2">Food Quality</h2>
            <p class="mb-2">Did the food look appetizing? Was it fresh and flavorful?</p>
            <div class="food-item bg-gray-50 p-4 rounded-lg mt-2">
                <img src="sample-item1.jpg" alt="Sample Item 1" class="w-12 h-12 rounded-full">
                <p>Sample Item 1</p>
                <p>PHP 360.00</p>
                <div class="text-yellow-400 text-2xl mb-2">★★★★★</div>
                <textarea class="w-full p-2 border rounded-lg" placeholder="Write a comment..."></textarea>
            </div>
            <div class="food-item bg-gray-50 p-4 rounded-lg mt-2">
                <img src="sample-item2.jpg" alt="Sample Item 2" class="w-12 h-12 rounded-full">
                <p>Sample Item 2</p>
                <p>PHP 360.00</p>
                <div class="text-yellow-400 text-2xl mb-2">★★★★★</div>
                <textarea class="w-full p-2 border rounded-lg" placeholder="Write a comment..."></textarea>
            </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mt-4">
            <h2 class="text-xl font-semibold mb-2">User Experience to PapaBibs Kitchen Website</h2>
            <p class="mb-2">How smooth and visually appealing was your ordering journey?</p>
            <div class="text-yellow-400 text-2xl mb-2">★★★★★</div>
            <textarea class="w-full p-2 border rounded-lg" placeholder="Write a comment..."></textarea>
        </div>

        <button class="bg-red-500 text-white py-2 px-4 rounded-lg mt-4">Submit my feedback</button>
    </div>
</x-layout>
