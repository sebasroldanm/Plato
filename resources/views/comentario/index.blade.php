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

                    <h1 class="text-center">Comentarios</h1>
                    <hr>
                    <a class="btn btn-info mb-3" href="{{ route('plato.index')}}">Platos Principal</a>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Comentario</th>
                          <th scope="col">Id Usuario</th>
                          <th scope="col">Acciones</th>
                          {{--<th scope="col">Precio</th>--}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($comentarios as $comentario)
                        <tr>
                          <th scope="row">{{ $comentario->id}}</th>
                          <td>{{ $comentario->comentario}}</td>
                          <td>{{ $comentario->comable_id}}</td>
                          <td>
                            <a class="btn-sm btn-light text-center" href="{{ url('/comentario/edit/'.$comentario->id)}}"><i class="fas fa-edit"></i> - Editar</a><form action="{{ route('comentario.destroy', $comentario ) }}" method="POST"> 
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn-sm btn-light text-center" onclick="return confirm('¿Desea eliminar este comentario definitivamente?')"><i class="fas fa-trash-alt"> - Eliminar</i></button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                          {{--<li>No hay Comentarios registrados.</li>
                        @endforelse--}}
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection