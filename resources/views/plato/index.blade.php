@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{--<div class="card-header">Panel de Control</div>--}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">Platos</h1>
                    <hr>
                    <a class="btn btn-info mb-3" href="{{ url('plato/nuevo')}}">Agregar Platos
                    </a>
                   
                    <table class="table table-hover">
                        <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Plato</th>
                          <th scope="col">Descripción</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      @forelse ($platos as $plato)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $plato->id}}</th>
                          <td>{{ $plato->nombre_plato }}</td>
                          <td>{{ $plato->descripcion }}</td>
                          <td>{{ $plato->precio }}</td>
                          <td>
                            <a class="btn-sm btn-light text-center" href="{{ url('/plato/'.$plato->id)}}"><i class="fas fa-edit"></i> - Editar</a><form action="{{ route('plato.destroy', $plato ) }}" method="POST"> 
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn-sm btn-light text-center" onclick="return confirm('¿Desea eliminar este plato definitivamente?')"><i class="fas fa-trash-alt"> - Eliminar</i></button>
                              </form>
                            <a class="btn-sm btn-light text-center" href="{{ url('comentario/'.$plato->id)}}"><i class="fas fa-comment"> - Comentar</i></a>
                          </td>
                        </tr>
                        
                        @empty
                            <li>No hay Platos registrados.</li>
                        @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection