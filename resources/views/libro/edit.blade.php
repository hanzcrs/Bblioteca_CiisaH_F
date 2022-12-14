@extends('layouts.app')

@section('template_title')
    Update Libro
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
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actulizar datos del Libro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.update', $libro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('libro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
