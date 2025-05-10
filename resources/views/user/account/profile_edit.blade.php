<x-account-layout>
    <div class="max-w-4xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
        <!-- Header with back button, title and action buttons -->
        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
            <div class="flex items-center">
                <a href="{{ route('user.account', ['user' => auth()->id()]) }}" class="text-gray-500 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <h1 class="text-xl font-bold">Your Profile</h1>
            </div>

            <div class="flex items-center space-x-2">
                <button type="button" class="py-2 px-4 rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 focus:outline-none">
                    Cancel
                </button>
                <button type="submit" form="formEdit" class="py-2 px-4 rounded-full bg-red-600 text-white hover:bg-red-700 focus:outline-none">
                    Save
                </button>
            </div>
        </div>

        <!-- Sub-header text -->
        <div class="mt-4 mb-6">
            <p class="text-gray-600">All your information are safe with us.</p>
        </div>

        <!-- Name -->
        <form method="POST" action="{{ route('user.account.edit', ['user' => auth()->id()]) }}" class="space-y-6" id="formEdit">
            @csrf
            @method('PATCH')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">
                    First Name<span class="text-red-500">*</span>
                </label>
                <div class="mt-1">
                    <input
                        type="text"
                        id="first_name"
                        name="first_name"
                        value="{{ $user->first_name }}"
                        class="p-3 block w-full rounded-md border border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-base"
                        required
                    >
                </div>
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">
                    Last Name<span class="text-red-500">*</span>
                </label>
                <div class="mt-1">
                    <input
                        type="text"
                        id="last_name"
                        name="last_name"
                        value="{{ $user->last_name }}"
                        class="p-3 block w-full rounded-md border border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-base"
                        required
                    >
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email<span class="text-red-500">*</span>
                </label>
                <div class="mt-1">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ $user->email }}"
                        class="p-3 block w-full rounded-md border border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-base"
                        required
                    >
                </div>
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">
                    Address<span class="text-red-500">*</span>
                </label>
                <div class="mt-1">
                    <input
                        type="text"
                        id="address"
                        name="address"
                        value="{{ $user->address }}"
                        class="p-3 block w-full rounded-md border border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-base"
                        required
                    >
                </div>
            </div>

            <!-- Mobile Number -->
            <div>
                <label for="mobile_number" class="block text-sm font-medium text-gray-700">
                    Mobile Number<span class="text-red-500">*</span>
                </label>
                <div class="mt-1">
                    <input
                        type="text"
                        id="mobile_number"
                        name="mobile_number"
                        value="+639 {{ $user->mobile_number }}"
                        class="p-3 block w-full rounded-md border border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-base"
                        required
                    >
                </div>
            </div>

            <!-- Date of Birth -->
            <div>
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                    Date of Birth<span class="text-red-500">*</span>
                </label>
                <div class="mt-1">
                    <input
                        type="text"
                        id="date_of_birth"
                        name="date_of_birth"
                        value="{{ $user->date_of_birth }}"
                        class="p-3 block w-full rounded-md border border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-base"
                        required
                    >
                </div>
            </div>
        </form>
    </div>
</x-account-layout>
