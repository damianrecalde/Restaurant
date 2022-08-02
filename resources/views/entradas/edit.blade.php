<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar entradas del Menú') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Listado de entradas -->
                    <div class="container mt-2">
                    <div class="row">
                    <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                    </div>
                    
                    </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('entradas.update',$entrada->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Nombre</strong>
                    <input type="text" name="nombre" value="{{ $entrada->nombre }}" class="form-control" placeholder="Nombre">
                    @error('nombre')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $entrada->name }}" class="form-control" placeholder="name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Descripción</strong>
                    <input type="text" name="descripcion" value="{{ $entrada->descripcion }}" class="form-control" placeholder="Descripción">
                    @error('descripcion')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Description</strong>
                    <input type="text" name="description" value="{{ $entrada->description }}" class="form-control" placeholder="Description">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Precio</strong>
                    <input type="numbre" name="precio" value="{{ $entrada->precio }}" class="form-control" placeholder="Precio">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="pull-right py-5">
                    <a class="btn btn-outline-danger" href="{{ route('entradas.index') }}" enctype="multipart/form-data">Cancelar</a>
                    <button type="submit" class="btn btn-outline-success ml-3">Actualizar</button>
                    </div>
                   
                    </div>
                    </form>
                    </div>
                    <!-- Fin del listado de entradas -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>