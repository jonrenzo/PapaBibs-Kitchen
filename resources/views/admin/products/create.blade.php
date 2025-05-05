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
    <h1>Add Product</h1>

    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <form method="POST" action="/admin/products" enctype="multipart/form-data">
            @csrf
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-xs">
                <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                    <!-- Grid -->
                    <div class="space-y-5">
                        <div class="space-y-2">
                            <label for="name" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Product Name
                            </label>
                            <input id="name" name="name" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Product Name" required>
                            @error('name')
                                <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="price" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Price
                            </label>
                            <input id="price" name="price" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Product Price" required>
                            @error('price')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="prep" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Prep Time
                            </label>
                            <input
                                id="prep"
                                name="prep"
                                type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="20 minutes"
                                required
                            >
                            @error('prep')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="serving" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Serving For
                            </label>
                            <input
                                id="serving"
                                name="serving"
                                type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="1-2 persons"
                                required
                            >
                            @error('serving')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="tags" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Tags
                            </label>
                            <!-- Select -->
                            <select name="tags[]" multiple="" data-hs-select='{
                              "placeholder": "Select option...",
                              "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                              "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
                              "mode": "tags",
                              "wrapperClasses": "relative ps-0.5 pe-9 min-h-11.5 flex items-center flex-wrap text-nowrap w-full border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500",
                              "tagsItemTemplate": "<div class=\"flex flex-nowrap items-center relative z-10 bg-white border border-gray-200 rounded-full p-1 m-1 \"><div class=\"size-6 me-1\" data-icon></div><div class=\"whitespace-nowrap text-gray-800 \" data-title></div><div class=\"inline-flex shrink-0 justify-center items-center size-5 ms-2 rounded-full text-gray-800 bg-gray-200 hover:bg-gray-300 focus:outline-hidden focus:ring-2 focus:ring-gray-400 text-sm cursor-pointer\" data-remove><svg class=\"shrink-0 size-3\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M18 6 6 18\"/><path d=\"m6 6 12 12\"/></svg></div></div>",
                              "tagsInputId": "hs-tags-input",
                              "tagsInputClasses": "py-2.5 sm:py-3 px-2 min-w-20 rounded-lg order-1 border-transparent focus:ring-0 sm:text-sm outline-hidden",
                              "optionTemplate": "<div class=\"flex items-center\"><div class=\"size-8 me-2\" data-icon></div><div><div class=\"text-sm font-semibold text-gray-800 \" data-title></div><div class=\"text-xs text-gray-500 \" data-description></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>",
                              "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                            }' class="hidden">
                                @foreach($tags as $tag)
                                    <option value="">Choose</option>
                                    <option value="{{ $tag->id }}">
                                        {{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- End Select -->
                            @error('tags')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="image-location" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Preview image
                            </label>

                            <label for="image_location" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-hidden focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 relative">
                                <input
                                    id="image_location"
                                    name="image_location"
                                    type="file"
                                    class="sr-only"
                                >
                                <svg class="size-10 mx-auto text-gray-400 preview-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                </svg>

                                <span class="mt-2 block text-sm text-gray-800">
                                    Browse your device or <span class="group-hover:text-blue-700 text-blue-600">drag 'n drop'</span>
                                </span>
                                <span class="mt-1 block text-xs text-gray-500">
                                    Maximum file size is 2 MB
                                </span>
                            </label>

                            @error('image-location')
                            <p class="font-parkinsans text-bibs-red text-xs">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="space-y-2">
                            <label for="description" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                                Product Description
                            </label>
                            <textarea id="description" name="description" class="shadow-lg py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" rows="6" placeholder="Enter Product Description" required></textarea>
                            @error('description')
                            <p class="font-parkinsans text-bibs-red text-xs"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-bibs-red text-white hover:bg-bibs-red focus:outline-hidden focus:bg-bibs-red disabled:opacity-50 disabled:pointer-events-none">
                            Cancel
                        </button>
                        <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Create Product
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </form>
    </div>
    <!-- End Card Section -->
</x-admin-layout>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.getElementById('image_location');
        const previewContainer = fileInput.closest('label.group');
        const previewText = previewContainer.querySelector('span.text-sm');
        const previewSubText = previewContainer.querySelector('span.text-xs');
        const previewIcon = previewContainer.querySelector('svg');

        fileInput.addEventListener('change', function () {
            if (fileInput.files && fileInput.files[0]) {
                const file = fileInput.files[0];
                const reader = new FileReader();

                reader.onload = function (e) {
                    previewIcon.classList.add('hidden');
                    previewText.textContent = "Image Preview:";
                    previewSubText.classList.add('hidden');

                    let img = previewContainer.querySelector('img');
                    if (!img) {
                        img = document.createElement('img');
                        img.className = "mt-2 max-h-40 mx-auto rounded-lg shadow";
                        previewContainer.appendChild(img);
                    }
                    img.src = e.target.result;
                };

                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>
</html>
