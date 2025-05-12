<x-layout>
    <div class="min-w-full h-full">
        <!-- Header with back button -->
        <div class="flex items-center p-4 border-b border-gray-200">
            <a href="/" class="text-gray-500 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <h1 class="text-3xl font-bold">Account Management</h1>
        </div>

        <!-- Main content area -->
        <div class="flex px-44 mt-5">
            <!-- Left sidebar navigation -->
            <div class="w-64 border-r border-gray-200 p-4">
                <div class="mb-6">
                    <h2 class="text-sm text-gray-500 mb-2">Account</h2>
                    <nav class="flex flex-col space-y-3">
                        <a class="py-1 flex items-center gap-2 font-medium {{ request()->routeIs('user.account') ? 'text-red-500 bg-red-50 font-medium' : 'text-gray-700 font-normal hover:text-red-500' }} px-3 py-2 rounded-md" href="{{ route('user.account', ['user' => auth()->id()]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            My Profile
                        </a>
                        <a class="py-1 flex items-center gap-2 text-gray-700 hover:text-red-500  {{ request()->routeIs('user.account.edit') ? 'text-red-500 bg-red-50 font-medium' : 'text-gray-700 font-normal' }} px-3 py-2 rounded-md" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            My Orders
                        </a>
                        <a class="py-1 flex items-center gap-2 text-gray-700 hover:text-red-500 {{ request()->routeIs('user.account.payment') ? 'text-red-500 bg-red-50 font-medium' : 'text-gray-700 font-normal hover:text-red-500' }} px-3 py-2 rounded-md" href="{{ route('user.account.payment', ['user' => auth()->id()]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            Payment Methods
                        </a>
                    </nav>
                </div>


                <div class="mb-6">
                    <h2 class="text-sm text-gray-500 mb-2">Legal</h2>
                    <nav class="flex flex-col space-y-3">
                        <a class="py-1 flex items-center gap-2 text-gray-700 hover:text-red-500 px-3 py-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Terms & Conditions
                        </a>
                        <a class="py-1 flex items-center gap-2 text-gray-700 hover:text-red-500 px-3 py-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                            Privacy Notice
                        </a>
                        <a class="py-1 flex items-center gap-2 text-gray-700 hover:text-red-500 px-3 py-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            About PapaBibs
                        </a>
                    </nav>
                </div>

                <div class="mt-6">
                    <a class="py-1 flex items-center gap-2 text-red-500 font-medium px-3 py-2" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Log out
                    </a>
                </div>
            </div>

            <!-- Main content -->
            <div class="flex-1 p-8">
                <div class="max-w-3xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-layout>


