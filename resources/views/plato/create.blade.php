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
                    <h1 class="text-center">Agregar Platos</h1>
                    <hr>
    <form method="POST" action="{{ url('create') }}">
        {{ csrf_field() }}      
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Plato:</strong>
                <input type="text" name="nombre_plato" class="form-control" placeholder="Plato" value="{{ old('nombre_plato')}}">
                <!--ESTO ES PARA EL SOREREQUES -->

            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea class="form-control"  name="descripcion" placeholder="Reseña" >{{ old('descripcion')}}</textarea>

            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="number"  name="precio" class="form-control" placeholder="Título del Libro" value="{{ old('precio')}}">
                <!--ESTO ES PARA EL SOREREQUES -->
            </div>
        </div>
        <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
 </form>
@endsection