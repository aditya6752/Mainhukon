<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($n1)
                <div class="p-6 bg-white border-b border-gray-200">
                <h3>{{$message}}</h3>   
                    </div>
                @endif
                <form method="post" action="/transferproperty/{{$nid}}">
                    @csrf
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                    </div>
                    <x-button class="ml-3">
                        Transfer it
                    </x-button>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>