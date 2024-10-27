<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <div class="mt-4">
                        <a href="{{ route('products.index') }}" class="text-blue-500">Manage Products</a> |
                        <a href="{{ route('categories.index') }}" class="text-blue-500">Manage Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>