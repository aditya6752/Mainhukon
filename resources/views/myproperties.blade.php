<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Your Properties') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto ">
                <div class="panel-body bg-white border-b border-gray-200 p-3 m-auto">
                  <table class="table container">
                        
                        @foreach ($properties as $property)
                        <tr class="row row-cols-1 row-cols-sm-3 row-cols-md-5">
                          <td class="col">{{$property->PID}}</td>
                          <td class="col">{{$property->address}}</td>
                          <td class="col"><a href="/property/{{$property->PID}}" class="btn btn-primary">See Tenant</a></td>
                          <td class="col"><a href="/editpropertydetail/{{$property->PID}}" class="btn btn-success">Edit</a></td>
                          <td class="col"><a href="/transfer/{{$property->PID}}" class="btn btn-danger">Transfer</a></td>
                        </tr>
                        @endforeach
                  </div>        
                </div>
    </div>
    
</section>
</x-app-layout>
