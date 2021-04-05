<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit details of property having id {{$property->PID}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <form method="POST" action="/update/{{$property->id}}">
                        @csrf
                        
                            <div class="mt-2 bg-white border-b border-gray-200">
                                <label class="block" for="property">
                                    <span class="text-gray-700 ">Address </span>
                                    <textarea id="property" class="form-textarea mt-1 block w-full rounded-md border-gray-400" rows="3" placeholder="Enter your property address" name="address" required>{{$property->address}}</textarea>
                                </label>
                            </div>
                            <div class="mt-2 p-6 bg-white border-b border-gray-200">
                                <h4>Username : {{$property->username}}</h4>
                                <h4>Property ID : {{$property->PID}}</h4>
                            </div>
                    

                        <input type="submit" value="submit">
                    </form>
                    
                
                
            </div>
        </div>
    </div>
</x-app-layout>