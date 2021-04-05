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
                            <div class="flex flex-col text-center w-full mb-20">
                                <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Currently occupied by:</h2>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">UID, and personal information</p>
                            </div>
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