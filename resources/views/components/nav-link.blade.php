<a {{ $attributes }} class="flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('/') ? 'bg-gray-200' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100">
    {{ $slot }}
</a>
