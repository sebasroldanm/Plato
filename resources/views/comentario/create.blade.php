@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{--<div class="card-header">Panel de Control</div>--}}

                <div class="card-body">

                    <h1 class="text-center">Agregar Comentario</h1>
                    <hr>
                    <form method="POST" action="{{ url('createcoment') }}">
                        {{ csrf_field() }}   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="comable_id" value="{{ $plato->id }}" style="visibility:hidden">
                                    <br>
                                    <strong>Comentario:</strong>
                                    <textarea class="form-control"  name="comentario" placeholder="Escriba aqui su comentario" size="300px" >{{ old('comentario')}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Comentar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection