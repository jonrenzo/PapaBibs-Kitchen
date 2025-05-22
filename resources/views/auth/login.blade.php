<x-layout>
    <div class="max-w-full relative">
        <!-- Background image -->
        <img src="./images/bg-sign.jpg" class="w-full h-auto" loading="lazy"/>

        <!-- Login form positioned on the right -->
        <div class="absolute top-1/2 right-[15%] transform -translate-y-1/2 w-full max-w-[500px] h-full max-h-[550px] bg-white p-8 rounded-[40px] shadow-lg z-10">
            <h2 class="text-5xl font-bold text-red-600 mb-6 text-center">Welcome</h2>
            <form method="POST" action="">
                @csrf
                <x-form-input type="email" placeholder="Email Address" required name="email" :value="old('email')"></x-form-input>

                <div class="max-w-full">
                    <div class="relative">
                        <x-form-input id="password" type="password" name="password" placeholder="Password" required></x-form-input>
                        <button type="button" data-hs-toggle-password='{"target": "#password"}' class="absolute top-0 right-0 h-14 flex items-center justify-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600">
                            <svg class="size-5 inline-flex text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>

                        </button>
                    </div>
                </div>
                @error('provider')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="flex justify-between items-center text-sm mb-4">
                    <span></span>
                    <a href="#" class="text-gray-600 hover:underline">Remember Password?</a>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white p-3 rounded-full font-semibold hover:bg-red-700 transition duration-300">Log in</button>

                <div class="py-3 my-2 flex items-center text-sm text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6"> Or </div>

                <div class="mb-4">
                    <a href="{{ route('auth.redirect', 'google') }}" type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
                            <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
                            <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
                            <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
                        </svg>
                        Sign in with Google
                    </a>
                    <button type="button" class="w-full py-3 px-4 mt-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-[#1877F2] text-white shadow-2xs hover:bg-bg-[#1877F2] focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-white" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        Log in with Facebook
                    </button>
                </div>

                <div class="text-center text-sm">
                    No existing account? <a href="/register" class="text-red-600 font-semibold hover:underline">Register Now!</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>

