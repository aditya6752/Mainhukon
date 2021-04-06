<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Your Properties') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto ">
    <div class="flex flex-wrap -m-4 bg-white">
      @foreach ($property as $property)
      <div class="p-4 md:w-1/3 ">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
          <div class="flex items-center mb-3">
            <h2 class="text-gray-900 mt-8 text-lg title-font font-medium">Property {{$property->PID}}</h2>
            <button class="ml-10 flex mx-auto mt-8 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-700 rounded text-lg"> <a href="/editpropertydetail/{{$property->PID}}"> EDIT</a></button>
            <button class="ml-5 flex mx-auto mt-8 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-700 rounded text-lg"> <a href="/transfer/{{$property->id}}"> TRANSFER</a></button>
          </div>
          <div class="flex">
            <p class="leading-relaxed text-base">{{$property->address}}</p>
            <a class="ml-6 mt-3 text-indigo-500 inline-flex items-center" href="property/{{$property->PID}}">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div> 
      @endforeach
      </div>
      <a href="/addproperty">
        <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add Property</button>
      </a>
  </div>
    </div>
  </div>
</section>
</x-app-layout>
