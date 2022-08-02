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
                    <!-- Listado de entradas -->
                    <div class="container-fluid mt-2">
                      <div class="row">
                        <div class="col-lg-12 margin-tb">
                          <div class="pull-left py-5">
                            <h2>Listando entradas del menu  <a class="btn btn-success" href="{{ route('entradas.create') }}"> Crear entradas</a></h2>
                          </div>
                        </div>
                      </div>
                      @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                      @endif
                      <table class="table table-bordered table-striped">
                        <tr class="text-center">
                          <th>id</th>
                          <th>Entrada Nombre</th>
                          <th>Entrada Name</th>
                          <th>Entrada Descripcion</th>
                          <th>Entrada Description</th>
                          <th>Entrada Precio</th>
                          <th width="280px">Action</th>
                        </tr>
                        @foreach ($entradas as $e)
                        <tr class="text-center">
                          <td>{{ $e->id }}</td>
                          <td>{{ $e->nombre }}</td>
                          <td>{{ $e->name }}</td>
                          <td>{{ $e->descripcion }}</td>
                          <td>{{ $e->description }}</td>
                          <td>{{ $e->precio }}</td>
                        <td>
                        <form action="{{ route('entradas.destroy',$e->id) }}" method="Post">
                        <a class="btn btn-outline-primary" href="{{ route('entradas.edit',$e->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                    {!! $entradas->links() !!}
                    <!-- Fin del listado de entradas -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>