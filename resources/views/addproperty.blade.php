<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Enter the property Details for adding new property
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="/addpropertydetails">
                    @csrf

                    <div class="mt-2 bg-white border-b border-gray-200">
                        <label class="block" for="property">
                            <span class="text-gray-700 ">Address </span>
                            <textarea id="property" class="form-textarea mt-1 block w-full rounded-md border-gray-400" rows="3" placeholder="Enter your property address" name="address" required></textarea>
                        </label>
                        <label class="block">
                            <span class="text-gray-700 ">Pincode of Property </span><br><br>
                            <input type="text" name="{{'pin'}}" id="" class="rounded-md border-gray-300 focus:border-black-50" placeholder="Enter Pincode">
                            <br><br><br><br>
                        </label>
                    </div>
                    <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" value="submit">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>