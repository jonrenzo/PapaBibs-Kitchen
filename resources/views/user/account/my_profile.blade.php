<x-account-layout>
    <h2 class="text-2xl font-bold mb-2">My Profile</h2>
    <p class="text-gray-600 mb-8">Edit your personal details</p>

    <div class="space-y-6">
        <!-- Name -->
        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
            <div>
                <div class="text-sm text-gray-500">Name</div>
                <div class="font-medium">{{ $user->name }}</div>
            </div>
            <a class="text-gray-500" href="{{ route('user.account.edit', ['user' => auth()->id()]) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
        </div>

        <!-- Email -->
        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
            <div>
                <div class="text-sm text-gray-500">Email Address</div>
                <div class="font-medium">{{ $user->email }}</div>
            </div>
        </div>

        <!-- Address -->
        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
            <div>
                <div class="text-sm text-gray-500">Address</div>
                <div class="font-medium">{{ ('-') }}</div>
            </div>
            <button class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </button>
        </div>

        <!-- Mobile Number -->
        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
            <div>
                <div class="text-sm text-gray-500">Mobile Number</div>
                <div class="font-medium">{{ ('-') }}</div>
            </div>
            <button class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </button>
        </div>

        <!-- Date of Birth -->
        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
            <div>
                <div class="text-sm text-gray-500">Date of Birth</div>
                <div class="font-medium">{{ ('-') }}</div>
            </div>
            <button class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </button>
        </div>
    </div>
</x-account-layout>
