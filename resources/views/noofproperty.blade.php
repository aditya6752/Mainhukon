<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <label class="block mt-4">
                        <span class="text-gray-700"><strong>Number of properties</strong></span>
                        <input class="form-input block mt-1 w-full" placeholder="Enter your number here">
                        <x-button class="ml-3">
                           Next
                        </x-button>
                    </label>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>