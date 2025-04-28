<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Log In</title>
    @vite('resources/css/app.css')
</head>
<body class="font-parkinsans">
<div class="fixed inset-0 bg-white bg-[radial-gradient(#ff0000_0.5px,#ffffff_0.5px)] bg-[length:10px_10px] opacity-80 -z-10"></div>
<div class="min-h-screen flex justify-evenly items-center">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xl w-[420px] h-[425px]">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800"><span class="font-kimbab text-bibs-red text-4xl">Papa Bibs</span> <br> Admin Panel</h1>
                <p class="text-sm text-gray-500">
                    Log in to access your dashboard.
                </p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form method="POST" action="/admin/login">
                    @csrf
                    <div class="grid gap-y-8">
                        <!-- Form Group -->
                        <div>
                            <label for="email" class="block text-sm mb-2">Username</label>
                                <div class="relative">
                                    <input type="text" id="username" name="username" class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Username">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div>
                            <div class="flex flex-wrap justify-between items-center gap-2">
                                <label for="password" class="block text-sm mb-2">Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" name="password" class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter password">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path>
                                        <circle cx="16.5" cy="7.5" r=".5"></circle>
                                    </svg>
                                </div>
                            </div>
                            <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
                        </div>
                        <!-- End Form Group -->
                        <button type="submit" class="w-full py-2 px-2 inline-flex justify-center items-center gap-x-2 text-lg font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Log in</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
