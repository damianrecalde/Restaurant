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
                            <h2>Listando principales del menu  <a class="btn btn-success" href="{{ route('principales.create') }}"> Crear principales</a></h2>
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
                          <th>Nombre</th>
                          <th>Name</th>
                          <th>Descripcion</th>
                          <th>Description</th>
                          <th>Precio</th>
                          <th width="280px">Action</th>
                        </tr>
                        @foreach ($principales as $p)
                        <tr class="text-center">
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->nombre }}</td>
                          <td>{{ $p->name }}</td>
                          <td>{{ $p->descripcion }}</td>
                          <td>{{ $p->description }}</td>
                          <td>{{ $p->precio }}</td>
                        <td>
                        <form action="{{ route('principales.destroy',$p->id) }}" method="Post">
                        <a class="btn btn-outline-primary" href="{{ route('principales.edit',$p->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                    {!! $principales->links() !!}
                    <!-- Fin del listado de entradas -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>