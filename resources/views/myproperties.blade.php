<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Your Properties') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto clearfix ">
            <div class="panel-body bg-white border-b border-gray-200 p-3 m-auto rounded">
                <table class="table container p-3">
                    @foreach ($properties as $property)
                        <tr class="row row-cols-1 row-cols-sm-3 row-cols-md-5">
                            <td class="col">{{ $property->PID }}</td>
                            <td class="col">{{ $property->address }}</td>
                            <td class="col"><a href="/property/{{ $property->PID }}" class="btn btn-primary">See
                                    Tenant</a></td>
                            <td class="col"><a href="/editpropertydetail/{{ $property->PID }}"
                                    class="btn btn-success">Edit</a></td>
                            <td class="col"><a href="/transfer/{{ $property->PID }}"
                                    class="btn btn-danger">Transfer</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <a href="/addproperty">
                <button
                    class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add
                    Property
                </button>
            </a>
        </div>
        $@if (session('username'))
            <script>
              alert("{{session('username')}}");
            </script>
        @endif

    </section>
</x-app-layout>
