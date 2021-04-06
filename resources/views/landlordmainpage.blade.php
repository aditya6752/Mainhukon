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
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <button class="ml-5 mt-8 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-700 rounded text-lg">
                                ADD
                            </button>
                            <button class="ml-5 mt-8 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-700 rounded text-lg">
                                END
                            </button>
                            <div class="flex flex-wrap">
                                <div class="xl:w-1/4 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">UID</h2>
                                    <p class="leading-relaxed text-base mb-4">Span : From --- to ---</p>
                                </div>
                                <div class="xl:w-1/4 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">UID</h2>
                                    <p class="leading-relaxed text-base mb-4">Span : From --- to ---</p>
                                </div>
                                <div class="xl:w-1/4 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">UID</h2>
                                    <p class="leading-relaxed text-base mb-4">Span : From --- to ---</p>
                                </div>
                                <div class="xl:w-1/4 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">UID</h2>
                                    <p class="leading-relaxed text-base mb-4">Span : From --- to ---</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>