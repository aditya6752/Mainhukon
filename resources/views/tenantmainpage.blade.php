<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Landlords
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap">
                              @foreach ($tenant as $tenant)
                                <div class="xl:w-1/4 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{$tenant->landlord_username}}</h2>
                                    <p class="leading-relaxed text-base mb-4">Span : From {{$tenant->start_date}} to {{$tenant->end_date}}</p>
                                    <p class="leading-relaxed text-base mb-4">{{$tenant->Review}}</p>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
