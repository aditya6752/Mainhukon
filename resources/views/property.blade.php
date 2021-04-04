<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <form method="POST" action="/propertydetails/{{$no}}">
                        @csrf
                        
                        @for($i = 1 ; $i <= $no ; $i++)
                            <div class="mt-2 bg-white border-b border-gray-200">
                                <label class="block">
                                    <span class="text-gray-700 ">Property {{$i}}</span>
                                    <textarea class="form-textarea mt-1 block w-full rounded-md border-gray-400" rows="3" placeholder="Enter your property address" name="{{  Auth::user()->username.$i  }}" required></textarea>
                                </label>
                            </div>
                        @endfor
                        <input type="submit" value="submit">
                    </form>
                    
                
                
            </div>
        </div>
    </div>
</x-app-layout>