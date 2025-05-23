<div class="h-10 bg-bibs-yellow hidden md:flex justify-end items-center p-5">
    <a class="text-white font-parkinsans m-5 font-semibold"> About Us</a>
    <a class="text-white font-parkinsans mr-10 font-semibold"> Contact Us</a>
</div>

<!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 bg-white border-b border-gray-200 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 px-4 sm:px-6 lg:px-8 py-2">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="/">
                <img src="{{ asset('images/Logo-Txt.png') }}" class="h-12 md:h-16">
            </a>
            <!-- End Logo -->

            <!-- Collapse Button -->
            <div class="md:hidden">
                <button type="button" class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-scrollspy-collapse" aria-expanded="false" aria-controls="hs-header-scrollspy" aria-label="Toggle navigation" data-hs-collapse="#hs-header-scrollspy">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->

        <!-- Collapse -->
        <div id="hs-header-scrollspy" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-scrollspy-collapse">
            <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div data-hs-scrollspy="#scrollspy" class="py-4 md:py-0 [--scrollspy-offset:220] md:[--scrollspy-offset:70] flex flex-col md:flex-row md:items-center md:justify-end gap-1 md:gap-1 md:h-16 md:p-10">
                    <a class="transition-all duration-300 font-parkinsans p-3 flex items-center text-sm hover:bg-bibs-yellow hover:text-white font-medium rounded-lg focus:outline-hidden {{ request()->is('/') ? 'hs-scrollspy-active:bg-bibs-yellow active text-white shadow-md' : 'text-bibs-red'}}" href="/">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                        Home
                    </a>

                    <a class="transition-all duration-300 font-parkinsans p-3 flex items-center text-sm hover:bg-bibs-yellow hover:text-white font-medium rounded-lg focus:outline-hidden {{ request()->is('menu') ? 'hs-scrollspy-active:bg-bibs-yellow active text-white shadow-md' : 'text-bibs-red'}}" href="/menu">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        Menu
                    </a>

                    <div class="relative my-2 md:my-0" id="navbar-search-wrapper">
                        <input type="text" id="navbar-search" autocomplete="off" class="font-parkinsans text-bibs-red bg-white font-medium py-2 px-6 rounded-full shadow-sm w-full md:w-48" placeholder="Search">
                        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-3 text-gray-400"></div>
                    </div>

                    <a class="md:hidden flex justify-center items-center p-3">
                        <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </a>

                    @guest
                        <a href="/login" class="transition-all duration-300 font-parkinsans p-3 flex items-center text-sm hover:bg-bibs-yellow hover:text-white font-medium rounded-lg focus:outline-hidden {{ request()->is('sign-in') ? 'hs-scrollspy-active:bg-bibs-yellow active text-white shadow-md' : 'text-bibs-red'}}">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            Log In
                        </a>
                    @endguest

                    @auth
                        <div class="hs-dropdown [--placement:bottom-right] relative inline-flex hs-tooltip [--placement:bottom]">
                            <button id="hs-dropdown-with-dividers" type="button" class="hs-dropdown-toggle hs-tooltip-toggle transition-all duration-300 font-parkinsans p-3 flex items-center text-sm hover:bg-bibs-yellow hover:text-white font-medium rounded-lg focus:outline-hidden {{ request()->is('login') ? 'hs-scrollspy-active:bg-bibs-yellow active text-white shadow-md' : 'text-bibs-red'}}" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C40C0C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-round-icon lucide-circle-user-round"><path d="M18 20a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><circle cx="12" cy="12" r="10"/></svg>
                                <span class="ml-2 md:hidden">Account</span>
                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-bibs-red text-white rounded-2xl text-xs" role="tooltip">
                                  Account Management
                                </span>
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 divide-y divide-gray-200" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-dividers">
                                <div class="p-1 space-y-0.5">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="{{ route('user.account', ['user' => auth()->id()]) }}">
                                        My Account
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="{{ route('user.account.orders', ['user' => auth()->id()]) }}">
                                        My Orders
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="{{ route('user.account.payment', ['user' => auth()->id()]) }}">
                                        Payment Methods
                                    </a>
                                </div>
                                <div class="p-1 space-y-0.5">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                                        Terms and Conditions
                                    </a>
                                </div>
                                <div class="p-1 space-y-0.5">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                                        About PapaBibs
                                    </a>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="flex items-center gap-x-3.5 py-2 px-3 w-full rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
                                            Sign Out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                    <button class="relative inline-flex justify-center items-center size-11 transition-all duration-300 font-parkinsans p-3 text-sm hover:bg-bibs-yellow hover:text-white font-medium rounded-lg focus:outline-hidden overflow-visible {{ request()->is('my-cart') ? 'hs-scrollspy-active:bg-bibs-yellow active text-white shadow-md' : 'text-bibs-red'}}" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-basket-icon lucide-shopping-basket"><path d="m15 11-1 9"/><path d="m19 11-4-7"/><path d="M2 11h20"/><path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8a2 2 0 0 0 2-1.6l1.7-7.4"/><path d="M4.5 15.5h15"/><path d="m5 11 4-7"/><path d="m9 11 1 9"/></svg>
                        <span class="ml-2 md:hidden">Cart</span>
                        <span id="cart-count" class="absolute -top-2 -right-3 md:-right-3 flex items-center justify-center min-w-[1.5rem] h-6 px-1.5 rounded-full text-xs font-bold bg-bibs-red text-white z-10">
                            {{ count(session('cart', [])) }}
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->


<div id="navbar-search-dropdown" class="fixed left-0 top-0 h-14 bg-white border border-gray-200 rounded-lg shadow-lg z-[9999] hidden"></div>

<div id="hs-offcanvas-right" class="font-parkinsans hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-1/2 end-0 -translate-y-1/2 transition-all duration-300 transform h-[95%] w-full md:w-[450px] z-80 bg-white border-s border-gray-200 rounded-l-xl flex flex-col" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
    @include('cart')
</div>

<script>
    var clearCart = "{{ route('cart.clear') }}";
    var updateCart = "{{ route('cart.update') }}";
    var token = "{{ csrf_token() }}";
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('navbar-search');
    const dropdown = document.getElementById('navbar-search-dropdown');
    const searchWrapper = document.getElementById('navbar-search-wrapper');

    let debounceTimeout = null;

    function positionDropdown() {
        const rect = searchInput.getBoundingClientRect();
        dropdown.style.width = rect.width + 'px';
        dropdown.style.left = rect.left + window.scrollX + 'px';
        dropdown.style.top = rect.bottom + window.scrollY + 'px';
    }

    searchInput.addEventListener('input', function () {
        const query = this.value.trim();
        clearTimeout(debounceTimeout);

        if (query.length === 0) {
            dropdown.innerHTML = '';
            dropdown.classList.add('hidden');
            return;
        }

        debounceTimeout = setTimeout(() => {
            fetch(`/search-products?q=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(data => {
                    if (data.length === 0) {
                        dropdown.innerHTML = '<div class="px-4 py-2 text-gray-500">No products found</div>';
                        dropdown.classList.remove('hidden');
                        positionDropdown();
                        return;
                    }
                    dropdown.innerHTML = data.map(product => {
                        console.log('Product:', product);
                        return `<div class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-bibs-yellow hover:text-white rounded h-full" data-id="${product.id}">
                            <img src="${product.image_location}" alt="${product.name}" class="w-10 h-10 object-cover rounded"/>
                            <div class="flex flex-col">
                                <span class="font-semibold">${product.name}</span>
                                <span class="text-bibs-red font-normal mt-1 text-left">${product.price ? 'PHP ' + product.price : ''}.00</span>
                            </div>
                        </div>`;
                    }).join('');
                    dropdown.classList.remove('hidden');
                    positionDropdown();
                });
        }, 200);
    });

    dropdown.addEventListener('mousedown', function (e) {
        // Traverse up to the parent div with data-id if clicking on child elements
        let target = e.target;
        while (target && !target.dataset.id && target !== dropdown) {
            target = target.parentElement;
        }
        if (target && target.dataset.id) {
            window.location.href = `/menu/${target.dataset.id}`;
        }
    });

    document.addEventListener('click', function (e) {
        if (!dropdown.contains(e.target) && e.target !== searchInput) {
            dropdown.classList.add('hidden');
        }
    });

    // Reposition dropdown on window resize/scroll
    window.addEventListener('resize', function () {
        if (!dropdown.classList.contains('hidden')) {
            positionDropdown();
        }
    });
    window.addEventListener('scroll', function () {
        if (!dropdown.classList.contains('hidden')) {
            positionDropdown();
        }
    });
});
</script>
