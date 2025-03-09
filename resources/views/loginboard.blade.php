<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <p>
                        <a href="products">
                            <button style="padding: 10px 20px; font-size: 16px; background-color: blue; color: white; border: none; cursor: pointer; border-radius: 5px;">
                            {{ __('List of Students') }}
                            </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
