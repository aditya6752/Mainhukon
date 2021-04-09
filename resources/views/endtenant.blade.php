<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Enter review of tenant leaving the property {{$PID}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form action="/reviewtenant/{{$pid}}" method="post">
                    @csrf
                        <label class="block">
                            <span class="text-gray-700">Input</span>
                            <input type="email" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-black-50" name = "email" placeholder="john@example.com" value={{$user->email}}>
                        </label>
                        <br>
                        <label class="block">
                            <span class="text-gray-700">Review</span>
                            <textarea class="form-textarea mt-1 block w-full rounded-md border-gray-300 focus:border-black-50" rows="3" name="review" placeholder="Enter some long form content." >{{$tenant->Review}}</textarea>
                        </label>
                        <br>
                        <label class="block">
                            <span class="text-gray-700">End Date (DD/MM/YYYY)</span>
                            <input type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-black-50" name ="date" placeholder="DD/MM/YYYY" value={{$tenant->end_date}}>
                        </label>
                        <br>
                        <x-button>
                            Post the review
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
