@extends('layouts.app')

@section('template_title')
    Cursos
@endsection

@section('content')

<style>
    body {
        background: url('https://cdn.pixabay.com/photo/2016/12/03/00/26/roof-1878904_960_720.jpg');
        background-repeat: no-repeat;
        background-size: 100vw 100vh;  
    }  
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style=" text-align: center; justify-content: space-between; align-items: center;">
                        <h1>Bienvenid@s a los cursos para ti y tu familia</h1>
                        <p>En esta pagina encontraras todos los cursos que tenemos disponible para ti y tu familia.
                            No existen pre requisitos para realizar los cursos gratuitos o nivelacion en ingles. Solo debes estar contratado y tener 
                            ganas de aprender.
                        </p>
                        <br>
                        <p>Para incribirse a cualquier tipo de curso gratuito o pago debes llenar el siguiente formulario
                            con los datos del empleador o carga inscrita en recursos humanos. Se debe seleccionar un curso a la vez por participante
                            y posterior enviada la solicitud, te contactaremos en 48horas habiles via correo, enviandote un link 
                            para logearte en nuestro centro de formacion y podras comenzar con tu curso. ¡Mucho exito!

                        </p>

                        <form class="row g-3">
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                              <label for="nombre" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido">
                              </div>
                              <div class="col-md-6">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad">
                              </div>
                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Direccion</label>
                              <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="col-md-6">
                              <label for="inputCity" class="form-label">Ciudad</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-6">
                              <label for="inputState" class="form-label">Curso</label>
                              <select id="inputState" class="form-select">
                                <option selected>Selecionar</option>
                                <option>Botanica Basica - Gratis</option>
                                <option>Reposteria Basica - Gratis</option>
                                <option>Panaderia Profesional - Gratis</option>
                                <option>Cocina sin gluten - Gratis</option>
                                <option>Ingles basico - $10.990</option>
                                <option>Ingles Intermedio - $14.990</option>
                                <option>Ingles Avanzado - $30.990</option>
                                <option>Ingles Ejecutivo - $50.990</option>
                                </select>
                            </div>
                             <div class="col-12">
                                <a href="{{ url('/home') }}">
                              <button type="button" class="btn btn-primary">Enviar</button>
                                </a>
                            </div>
                          </form>

                      
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    

    

    


@endsection