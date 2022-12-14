@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')

<style>
    body {
        background: url('https://cdn.pixabay.com/photo/2016/12/03/00/26/roof-1878904_960_720.jpg');
        background-repeat: no-repeat;
        background-size: 100vw 100vh;
  
    }
  
  </style>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libro->editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $libro->categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
