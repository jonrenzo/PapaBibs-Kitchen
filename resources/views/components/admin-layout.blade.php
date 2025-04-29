<!-- Sidebar -->
<div id="hs-sidebar-collapsible-group" class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-55
hs-overlay-open:translate-x-0
-translate-x-full transition-all duration-300 transform
h-full
hidden
fixed top-0 start-0 bottom-0 z-60
font-parkinsans
bg-white border-e border-gray-200" role="dialog" tabindex="-1" aria-label="Sidebar" >
    <!-- Your sidebar content remains unchanged -->
    <div class="relative flex flex-col h-full max-h-full ">
        <!-- Header -->
        <header class="p-4 flex justify-between items-center gap-x-2">
            <a class="flex-none font-semibold text-xl text-bibs-red focus:outline-hidden focus:opacity-80" href="/admin" aria-label="Brand">PapaBibs' Kitchen</a>

            <div class="lg:hidden -me-2">
                <!-- Close Button -->
                <button type="button" class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100" data-hs-overlay="#hs-sidebar-collapsible-group">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    <span class="sr-only">Close</span>
                </button>
                <!-- End Close Button -->
            </div>
        </header>
        <!-- End Header -->

        <!-- Body -->
        <nav class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <div class="hs-accordion-group pb-0 px-2  w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1">
                    <!-- Dashboard -->
                    <li>
                        <x-nav-link href="/admin" class="flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('/admin') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Dashboard
                        </x-nav-link>
                    </li>
                    <!-- Users -->
                    <li class="hs-accordion" id="account-accordion">
                        <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{ request()->is('users') ? 'bg-gray-200' : '' }} text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden " aria-expanded="true" aria-controls="account-accordion-sub-1-collapse-1">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            Users

                            <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </button>

                        <div id="account-accordion-sub-1-collapse-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="account-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>


                                    <a href='/admin/users' class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                        <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>
                                        View Users
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                                        <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>

                                        Add Users
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Products -->
                    <li class="hs-accordion" id="account-accordion">
                        <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('products') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden " aria-expanded="true" aria-controls="account-accordion-sub-1-collapse-1">
                            <svg class="size-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                            </svg>
                            Products

                            <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </button>

                        <div id="account-accordion-sub-1-collapse-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="account-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <a href='/admin/products' class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                        <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>
                                        View Products
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/products/create" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                        <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>

                                        Add Products
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Orders -->
                    <li class="hs-accordion" id="account-accordion">
                        <a href="/orders" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('transactions') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden ">
                            <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                            </svg>

                            Orders
                        </a>
                    </li>
                    <!-- Transaction History -->
                    <li class="hs-accordion" id="account-accordion">
                        <a href="/transactions" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('transactions') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden ">
                            <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 8h6m-6 4h6m-6 4h6M6 3v18l2-2 2 2 2-2 2 2 2-2 2 2V3l-2 2-2-2-2 2-2-2-2 2-2-2Z"/>
                            </svg>
                            Transactions
                        </a>
                    </li>
                    <!-- Feedbacks -->
                    <li class="hs-accordion" id="account-accordion">
                        <a href="/feedbacks" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('feedbacks') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden ">
                            <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 9h5m3 0h2M7 12h2m3 0h5M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.616a1 1 0 0 0-.67.257l-2.88 2.592A.5.5 0 0 1 8 18.477V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                            </svg>

                            Feedbacks
                        </a>
                    </li>
                    <!-- Events -->
                    <li class="hs-accordion" id="account-accordion">
                        <a href="/events" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('events') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden ">
                            <svg class="size-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                            </svg>


                            Events
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- End Body -->
    </div>
</div>
<!-- End Sidebar -->

<!-- Main Content Container with left margin to account for sidebar -->
<div class="lg:ml-55 p-4">
    {{ $slot }}
</div>
