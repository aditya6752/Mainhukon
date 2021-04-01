<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-2 col-4 p-6 bg-white border-b border-gray-200">
                    <label class="block">
                        <span class="text-gray-700">Textarea</span>
                        <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>
                </div>
                <div class="mt-2 col-4 p-6 bg-white border-b border-gray-200">
                    <label class="block">
                        <span class="text-gray-700">Textarea</span>
                        <textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>