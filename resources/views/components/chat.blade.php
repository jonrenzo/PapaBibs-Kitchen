<!-- Chat Button (Fixed Position) -->
<div class="fixed bottom-6 right-6 z-50">
    <button type="button" class="bg-bibs-red flex items-center justify-center w-14 h-14 rounded-full text-white shadow-lg hover:bg-bibs-yellow transition-colors" data-hs-overlay="#chat-modal">
        <img src="{{ asset('images/bibs-logo-image.png') }}" class="size-8">
    </button>
</div>

<!-- Chat Modal - Floating on the right -->
<div id="chat-modal" class="hs-overlay hidden fixed inset-0 z-[60] overflow-x-hidden overflow-y-auto bg-black/30">
    <div class="flex justify-end items-end min-h-screen mt-10 mr-2">
    <!-- Chat Container -->
        <div class="flex flex-col bg-white border shadow-lg rounded-xl w-full max-w-xs h-[500px] dark:bg-gray-800 dark:border-gray-700">
            <!-- Chat Header -->
            <div class="flex justify-between items-center py-3 px-4 border-b bg-blue-600 rounded-t-xl">
                <div class="flex items-center gap-2">
                    <div class="ml-1">
                        <h3 class="font-semibold text-white">Questions? Chat with us!</h3>
                        <p class="text-xs text-blue-100">Was last active {{ now()->subHours(9)->diffForHumans() }}</p>
                    </div>
                </div>
                <button type="button" class="flex justify-center items-center w-7 h-7 text-white hover:bg-blue-700 rounded-full" data-hs-overlay="#chat-modal">
                    <span class="sr-only">Close</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Chat Messages -->
            <div class="p-4 overflow-y-auto flex-grow bg-gray-50 dark:bg-gray-700">
                <!-- Chat bubbles and messages here -->
                <div class="max-w-xs bg-blue-600 text-white p-3 rounded-lg mb-2 ml-auto">
                    <p>Hey there, thanks for checking out our site!</p>
                </div>
                <div class="max-w-xs bg-blue-600 text-white p-3 rounded-lg mb-2 ml-auto">
                    <p>We're currently unavailable but you chat with our bot!</p>
                </div>
                <div id="chat-messages"></div>
            </div>

            <!-- Chat Input -->
            <div class="p-3 border-t mt-auto">
                <form id="chat-form" class="flex items-center gap-2">
                    <input type="text" id="chat-input" class="py-2 px-3 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" placeholder="Compose your message...">
                    <button type="submit" class="inline-flex justify-center items-center h-8 w-8 rounded-md text-white bg-blue-600 hover:bg-blue-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

