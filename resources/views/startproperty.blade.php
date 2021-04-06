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
                        <label class="block">
                            <span class="text-gray-700">Mail id</span>
                            <input type="email" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-black-50" placeholder="john@example.com">
                        </label>
                        <br>
                        <label class="block">
                            <span class="text-gray-700">Start Date (DD/MM/YYYY)</span>
                            <input type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-black-50" placeholder="DD/MM/YYYY">                 
                        </label>
                        <br>
                        <x-button>
                           Save
                        </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>