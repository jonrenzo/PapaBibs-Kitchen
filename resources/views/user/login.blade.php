<x-layout>
    <div class="max-w-full relative">
        <!-- Background image -->
        <img src="./images/login-bg.jpg" class="w-full h-auto" />

        <!-- Login form positioned on the right -->
        <div class="absolute top-1/2 right-[15%] transform -translate-y-1/2 w-full max-w-[450px] bg-white p-8 rounded-[40px] shadow-lg z-10">
            <h2 class="text-5xl font-bold text-red-600 mb-6 text-center">Welcome</h2>
            <form>
                @csrf
                <input type="email" placeholder="Email Address" class="w-full p-3 mb-4 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500" />

                <div class="max-w-sm">
                    <div class="relative">
                        <input id="hs-toggle-password" type="password" class="w-full p-3 mb-4 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Password">
                        <button type="button" data-hs-toggle-password='{"target": "#hs-toggle-password"}' class="absolute top-0 right-0 h-full flex items-center justify-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600">
                            <svg class="size-5 inline-flex text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>

                        </button>
                    </div>
                </div>

                <div class="flex justify-between items-center text-sm mb-4">
                    <span></span>
                    <a href="#" class="text-gray-600 hover:underline">Remember Password?</a>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white p-3 rounded-full font-semibold hover:bg-red-700 transition duration-300">Log in</button>

                <div class="py-3 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6"> Or </div>
                <div class="flex gap-4 justify-center mb-4">
                    <button type="button" class="flex items-center gap-2 border px-4 py-2 rounded-full text-sm hover:bg-gray-100 transition font-poppins font-medium">
                        <svg class="shrink-0 size-4" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4132_5805adfqfqdq121)">
                                <path d="M32.2566 16.36C32.2566 15.04 32.1567 14.08 31.9171 13.08H16.9166V19.02H25.7251C25.5454 20.5 24.5866 22.72 22.4494 24.22L22.4294 24.42L27.1633 28.1L27.4828 28.14C30.5189 25.34 32.2566 21.22 32.2566 16.36Z" fill="#4285F4"></path>
                                <path d="M16.9166 32C21.231 32 24.8463 30.58 27.5028 28.12L22.4694 24.2C21.1111 25.14 19.3135 25.8 16.9366 25.8C12.7021 25.8 9.12677 23 7.84844 19.16L7.66867 19.18L2.71513 23L2.65521 23.18C5.2718 28.4 10.6648 32 16.9166 32Z" fill="#34A853"></path>
                                <path d="M7.82845 19.16C7.48889 18.16 7.28915 17.1 7.28915 16C7.28915 14.9 7.48889 13.84 7.80848 12.84V12.62L2.81499 8.73999L2.6552 8.81999C1.55663 10.98 0.937439 13.42 0.937439 16C0.937439 18.58 1.55663 21.02 2.63522 23.18L7.82845 19.16Z" fill="#FBBC05"></path>
                                <path d="M16.9166 6.18C19.9127 6.18 21.9501 7.48 23.0886 8.56L27.6027 4.16C24.8263 1.58 21.231 0 16.9166 0C10.6648 0 5.27181 3.6 2.63525 8.82L7.80851 12.84C9.10681 8.98 12.6821 6.18 16.9166 6.18Z" fill="#EB4335"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_4132_5805adfqfqdq121">
                                    <rect width="32" height="32" fill="white" transform="translate(0.937439)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Google
                    </button>
                    <button type="button" class="flex items-center gap-2 border px-4 py-2 rounded-full text-sm hover:bg-gray-100 transition">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"
                                fill="currentColor"
                            />
                        </svg>
                        Facebook
                    </button>
                </div>

                <div class="text-center text-sm">
                    No existing account? <a href="/register" class="text-red-600 font-semibold hover:underline">Sign up!</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
