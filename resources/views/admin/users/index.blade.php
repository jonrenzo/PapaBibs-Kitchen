<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans bg-gray-100">

<x-admin-layout>
    <h1 class="font-bold text-2xl">Users</h1>
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
                                <label for="users-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <input type="text" id="users-search" name="users-search" class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Search">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200" id="users-table">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">
                                    <div class="flex">
                                        ID
                                        <svg class="w-4 h-4 text-gray-800 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 20V7m0 13-4-4m4 4 4-4m4-12v13m0-13 4 4m-4-4-4 4"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">
                                    <div class="flex">
                                        Name
                                        <svg class="w-4 h-4 text-gray-800 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 20V7m0 13-4-4m4 4 4-4m4-12v13m0-13 4 4m-4-4-4 4"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">
                                    <div class="flex">
                                        Email
                                        <svg class="w-4 h-4 text-gray-800 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 20V7m0 13-4-4m4 4 4-4m4-12v13m0-13 4 4m-4-4-4 4"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-800">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $user->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $user->first_name . " " . $user->last_name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <!-- Edit -->
                                        <a href="#" class="text-green-600 hover:text-green-800">
                                            <svg class="w-6 h-6 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                            </svg>
                                        </a>
                                        <!-- Delete -->
                                        <form action="#" method="POST" onsubmit="return confirm('Are you sure?');">
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
                            <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 border-t border-gray-200 text-sm text-gray-500 text-right flex">
                            <div class="whitespace-nowrap text-sm text-gray-500 px-5 my-auto" data-hs-datatable-info="">
                                Showing
                                <span data-hs-datatable-info-from=""></span>
                                to
                                <span data-hs-datatable-info-to=""></span>
                                of
                                <span data-hs-datatable-info-length=""></span>
                                users
                            </div>

                            <div class="inline-flex items-center gap-1 hidden pl-64" data-hs-datatable-paging="">
                                <button type="button" class="p-2.5 min-w-10 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" data-hs-datatable-paging-prev="">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <div class="flex items-center space-x-1 [&>.active]:bg-gray-100" data-hs-datatable-paging-pages=""></div>
                                <button type="button" class="p-2.5 min-w-10 inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" data-hs-datatable-paging-next="">
                                    <span class="sr-only">Next</span>
                                    <span aria-hidden="true">»</span>
                                </button>
                            </div>

                            <div class="flex-1 flex items-center justify-end space-x-2">
                                <div id="hs-dropdown-datatable-with-export" class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                    <button id="hs-datatable-export-dropdown" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" x2="12" y1="15" y2="3"></line>
                                        </svg>
                                        Export
                                        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white rounded-xl shadow-xl" role="menu" aria-orientation="vertical" aria-labelledby="hs-datatable-export-dropdown">
                                        <div class="p-1 space-y-0.5">
                                            <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" data-hs-datatable-action-type="copy">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                                </svg>
                                                Copy
                                            </button>
                                            <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" data-hs-datatable-action-type="print">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                    <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"></path>
                                                    <rect x="6" y="14" width="12" height="8" rx="1"></rect>
                                                </svg>
                                                Print
                                            </button>
                                        </div>
                                        <div class="p-1 space-y-0.5 border-t border-gray-200">
                                            <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" data-hs-datatable-action-type="excel">
                                                <svg class="shrink-0 size-3.5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.0324 1.91994H9.45071C9.09999 1.91994 8.76367 2.05926 8.51567 2.30725C8.26767 2.55523 8.12839 2.89158 8.12839 3.24228V8.86395L20.0324 15.8079L25.9844 18.3197L31.9364 15.8079V8.86395L20.0324 1.91994Z" fill="#21A366"></path>
                                                    <path d="M8.12839 8.86395H20.0324V15.8079H8.12839V8.86395Z" fill="#107C41"></path>
                                                    <path d="M30.614 1.91994H20.0324V8.86395H31.9364V3.24228C31.9364 2.89158 31.7971 2.55523 31.5491 2.30725C31.3011 2.05926 30.9647 1.91994 30.614 1.91994Z" fill="#33C481"></path>
                                                    <path d="M20.0324 15.8079H8.12839V28.3736C8.12839 28.7243 8.26767 29.0607 8.51567 29.3087C8.76367 29.5567 9.09999 29.6959 9.45071 29.6959H30.6141C30.9647 29.6959 31.3011 29.5567 31.549 29.3087C31.797 29.0607 31.9364 28.7243 31.9364 28.3736V22.7519L20.0324 15.8079Z" fill="#185C37"></path>
                                                    <path d="M20.0324 15.8079H31.9364V22.7519H20.0324V15.8079Z" fill="#107C41"></path>
                                                    <path opacity="0.1" d="M16.7261 6.87994H8.12839V25.7279H16.7261C17.0764 25.7269 17.4121 25.5872 17.6599 25.3395C17.9077 25.0917 18.0473 24.756 18.0484 24.4056V8.20226C18.0473 7.8519 17.9077 7.51616 17.6599 7.2684C17.4121 7.02064 17.0764 6.88099 16.7261 6.87994Z" class="fill-black" fill="currentColor"></path>
                                                    <path opacity="0.2" d="M15.7341 7.87194H8.12839V26.7199H15.7341C16.0844 26.7189 16.4201 26.5792 16.6679 26.3315C16.9157 26.0837 17.0553 25.748 17.0564 25.3976V9.19426C17.0553 8.84386 16.9157 8.50818 16.6679 8.26042C16.4201 8.01266 16.0844 7.87299 15.7341 7.87194Z" class="fill-black" fill="currentColor"></path>
                                                    <path opacity="0.2" d="M15.7341 7.87194H8.12839V24.7359H15.7341C16.0844 24.7349 16.4201 24.5952 16.6679 24.3475C16.9157 24.0997 17.0553 23.764 17.0564 23.4136V9.19426C17.0553 8.84386 16.9157 8.50818 16.6679 8.26042C16.4201 8.01266 16.0844 7.87299 15.7341 7.87194Z" class="fill-black" fill="currentColor"></path>
                                                    <path opacity="0.2" d="M14.7421 7.87194H8.12839V24.7359H14.7421C15.0924 24.7349 15.4281 24.5952 15.6759 24.3475C15.9237 24.0997 16.0633 23.764 16.0644 23.4136V9.19426C16.0633 8.84386 15.9237 8.50818 15.6759 8.26042C15.4281 8.01266 15.0924 7.87299 14.7421 7.87194Z" class="fill-black" fill="currentColor"></path>
                                                    <path d="M1.51472 7.87194H14.7421C15.0927 7.87194 15.4291 8.01122 15.6771 8.25922C15.925 8.50722 16.0644 8.84354 16.0644 9.19426V22.4216C16.0644 22.7723 15.925 23.1087 15.6771 23.3567C15.4291 23.6047 15.0927 23.7439 14.7421 23.7439H1.51472C1.16402 23.7439 0.827672 23.6047 0.579686 23.3567C0.3317 23.1087 0.192383 22.7723 0.192383 22.4216V9.19426C0.192383 8.84354 0.3317 8.50722 0.579686 8.25922C0.827672 8.01122 1.16402 7.87194 1.51472 7.87194Z" fill="#107C41"></path>
                                                    <path d="M3.69711 20.7679L6.90722 15.794L3.96694 10.8479H6.33286L7.93791 14.0095C8.08536 14.3091 8.18688 14.5326 8.24248 14.68H8.26328C8.36912 14.4407 8.47984 14.2079 8.5956 13.9817L10.3108 10.8479H12.4822L9.46656 15.7663L12.5586 20.7679H10.2473L8.3932 17.2959C8.30592 17.148 8.23184 16.9927 8.172 16.8317H8.14424C8.09016 16.9891 8.01824 17.1399 7.92998 17.2811L6.02236 20.7679H3.69711Z" fill="white"></path>
                                                </svg>
                                                Excel
                                            </button>
                                            <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" data-hs-datatable-action-type="csv">
                                                <svg class="shrink-0 size-3.5" width="400" height="461" viewBox="0 0 400 461" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip1_0)">
                                                        <path d="M342.544 460.526H57.4563C39.2545 460.526 24.5615 445.833 24.5615 427.632V32.8947C24.5615 14.693 39.2545 0 57.4563 0H265.79L375.439 109.649V427.632C375.439 445.833 360.746 460.526 342.544 460.526Z" fill="#E7EAF3"></path>
                                                        <path d="M375.439 109.649H265.79V0L375.439 109.649Z" fill="#F8FAFD"></path>
                                                        <path d="M265.79 109.649L375.439 219.298V109.649H265.79Z" fill="#BDC5D1"></path>
                                                        <path d="M387.5 389.035H12.5C5.70175 389.035 0 383.553 0 376.535V272.807C0 266.009 5.48246 260.307 12.5 260.307H387.5C394.298 260.307 400 265.79 400 272.807V376.535C400 383.553 394.298 389.035 387.5 389.035Z" fill="#377DFF"></path>
                                                        <path d="M91.7529 306.759C91.7529 305.748 92.0236 304.984 92.565 304.467C93.1064 303.95 93.8944 303.691 94.929 303.691C95.9275 303.691 96.6975 303.956 97.2388 304.485C97.7922 305.015 98.0689 305.772 98.0689 306.759C98.0689 307.709 97.7922 308.461 97.2388 309.015C96.6854 309.556 95.9155 309.827 94.929 309.827C93.9184 309.827 93.1365 309.562 92.5831 309.033C92.0296 308.491 91.7529 307.733 91.7529 306.759ZM114.707 287.233C112.602 287.233 110.972 288.028 109.817 289.616C108.662 291.192 108.084 293.393 108.084 296.22C108.084 302.103 110.292 305.045 114.707 305.045C116.56 305.045 118.803 304.581 121.438 303.655V308.347C119.273 309.249 116.855 309.7 114.184 309.7C110.346 309.7 107.411 308.539 105.377 306.218C103.344 303.884 102.328 300.539 102.328 296.184C102.328 293.441 102.827 291.041 103.826 288.984C104.824 286.915 106.256 285.333 108.12 284.238C109.997 283.131 112.193 282.578 114.707 282.578C117.27 282.578 119.844 283.197 122.431 284.436L120.626 288.984C119.64 288.515 118.647 288.106 117.649 287.757C116.65 287.408 115.67 287.233 114.707 287.233ZM142.642 302.013C142.642 304.395 141.782 306.272 140.061 307.643C138.353 309.015 135.971 309.7 132.915 309.7C130.1 309.7 127.61 309.171 125.444 308.112V302.915C127.225 303.709 128.729 304.269 129.956 304.593C131.195 304.918 132.326 305.081 133.348 305.081C134.575 305.081 135.514 304.846 136.163 304.377C136.825 303.908 137.156 303.21 137.156 302.284C137.156 301.766 137.012 301.309 136.723 300.912C136.434 300.503 136.007 300.112 135.442 299.739C134.888 299.366 133.751 298.771 132.031 297.953C130.419 297.195 129.21 296.467 128.404 295.769C127.598 295.071 126.954 294.259 126.473 293.333C125.992 292.407 125.751 291.324 125.751 290.085C125.751 287.751 126.539 285.916 128.115 284.581C129.703 283.245 131.893 282.578 134.684 282.578C136.055 282.578 137.36 282.74 138.6 283.065C139.851 283.39 141.156 283.847 142.516 284.436L140.711 288.785C139.303 288.208 138.136 287.805 137.21 287.576C136.296 287.348 135.393 287.233 134.503 287.233C133.445 287.233 132.632 287.48 132.067 287.973C131.502 288.467 131.219 289.11 131.219 289.904C131.219 290.398 131.333 290.831 131.562 291.204C131.79 291.564 132.151 291.919 132.645 292.268C133.15 292.605 134.335 293.219 136.2 294.109C138.666 295.288 140.356 296.473 141.27 297.664C142.185 298.843 142.642 300.293 142.642 302.013ZM162.474 282.957H168.122L159.154 309.339H153.054L144.104 282.957H149.752L154.714 298.656C154.991 299.583 155.274 300.666 155.563 301.905C155.863 303.132 156.05 303.986 156.122 304.467C156.254 303.36 156.705 301.423 157.475 298.656L162.474 282.957Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip1_0">
                                                            <rect width="400" height="460.526" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                CSV
                                            </button>
                                            <button type="button" class="flex w-full items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" data-hs-datatable-action-type="pdf">
                                                <svg class="shrink-0 size-3.5" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip1_4)">
                                                        <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                                        <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white"></path>
                                                        <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                                        <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black"></path>
                                                        <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black"></path>
                                                        <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip1_4">
                                                            <rect width="400" height="491.75" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                PDF
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->

</x-admin-layout>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables Core -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- DataTables Buttons and extensions -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<!-- Required for Excel export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<!-- Required for PDF export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var table = $('#users-table').DataTable({
            dom: 't',
            pageLength: 5,
            lengthChange: false,
            paging: true,
            info: true,
            buttons: [
                {
                    extend: 'copy',
                    className: 'hidden',
                    exportOptions: {
                        columns: ':not(:nth-child(4))'
                    }
                },
                {
                    extend: 'print',
                    className: 'hidden',
                    exportOptions: {
                        columns: ':not(:nth-child(4))'
                    }
                },
                {
                    extend: 'excel',
                    className: 'hidden',
                    exportOptions: {
                        columns: ':not(:nth-child(4))'
                    }
                },
                {
                    extend: 'csv',
                    className: 'hidden',
                    exportOptions: {
                        columns: ':not(:nth-child(4))'
                    }
                },
                {
                    extend: 'pdf',
                    className: 'hidden',
                    exportOptions: {
                        columns: ':not(:nth-child(4))'
                    }
                }
            ],
            // Hide the default buttons container
            initComplete: function() {
                $('.dt-buttons').hide();
            }
        });

        function updateCustomPagination(table) {
            const info = table.page.info();

            // Update pagination info text
            document.querySelector('[data-hs-datatable-info-from]').textContent = info.start + 1;
            document.querySelector('[data-hs-datatable-info-to]').textContent = info.end;
            document.querySelector('[data-hs-datatable-info-length]').textContent = info.recordsDisplay;

            // Update page numbers
            const pagesContainer = document.querySelector('[data-hs-datatable-paging-pages]');
            pagesContainer.innerHTML = ''; // Clear previous

            for (let i = 0; i < info.pages; i++) {
                const button = document.createElement('button');
                button.textContent = i + 1;
                button.className = `p-2.5 min-w-10 text-sm rounded-full ${i === info.page ? 'bg-gray-100 font-medium' : 'hover:bg-gray-50'} text-gray-800`;
                button.addEventListener('click', () => {
                    table.page(i).draw('page');
                });
                pagesContainer.appendChild(button);
            }

            // Prev/Next button states
            document.querySelector('[data-hs-datatable-paging-prev]').disabled = info.page === 0;
            document.querySelector('[data-hs-datatable-paging-next]').disabled = info.page === info.pages - 1;
        }

        // After table initialization
        updateCustomPagination(table);

        // Bind to redraw events
        table.on('draw', function () {
            updateCustomPagination(table);
        });

        // Hook up Prev/Next buttons
        document.querySelector('[data-hs-datatable-paging-prev]').addEventListener('click', () => {
            table.page('previous').draw('page');
        });
        document.querySelector('[data-hs-datatable-paging-next]').addEventListener('click', () => {
            table.page('next').draw('page');
        });


        // Connect custom UI buttons to DataTables buttons
        const buttons = document.querySelectorAll('#hs-dropdown-datatable-with-export .hs-dropdown-menu button');
        buttons.forEach((btn) => {
            const type = btn.getAttribute('data-hs-datatable-action-type');
            btn.addEventListener('click', () => {
                table.button(`.buttons-${type}`).trigger();
            });
        });

        // Search functionality
        $('#users-search').on('keyup', function() {
            table.search(this.value).draw();
        });
    });
</script>
</body>
</html>
