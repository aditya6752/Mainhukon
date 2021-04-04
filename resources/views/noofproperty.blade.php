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
                    <form method="POST" action="{{route('post.getnumber')}}" >
                    @csrf
                    <div class="mt-2 p-6 bg-white">
                    <x-label for="password" :value="__('Enter no of Properties')" />
                        <x-input class="form-input block mt-1 w-full border border-gray-100" name='no' placeholder="Enter your number here"/>
                    </div>
                    <div class="mt-2 ml-3 bg-white">
                        <x-button class="ml-3" >
                             Next
                         </x-button>
                    
                    </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>