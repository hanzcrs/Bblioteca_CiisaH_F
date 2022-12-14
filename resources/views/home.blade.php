@extends('layouts.app')

@section('content')

<style>
  body {
      background: url('https://cdn.pixabay.com/photo/2016/12/03/00/26/roof-1878904_960_720.jpg');
      background-repeat: no-repeat;
      background-size: 100vw 100%;

  }

</style>

<div class="container  align-items-center">
    <div id="contender1" class="card bg-ligth textw-white text-center">
<div id="contender1" class="text-muted text-center"><h1 id="contender1">Bienvenido a la biblioteca H&F</h1>
</div>
<header id="contender1" class="container  d-flex justify-content-center align-items-center">
    <div id="contender1" class="d-flex flex-column justify-content-center align-items-center">
      <img src="./imagenes/portada3.jpg">
</header>
    <div id="contender1">
    <p id="contender1">Tu solución digital que te permite administrar tus recursos bibliográficos de forma fácil y amigable.
      Nuestra solución integral se contempla en la implementación de una página web como una biblioteca digital solo para administradores, con el fin de integrar todos los libros disponibles físicamente en un mismo sitio, y que posibilite el fácil acceso y administración de estos para ser entregados a los usuarios (alumnos, profesores y otros).
      Con esto que se puede mejorar:
      - Mejora las condiciones de accesibilidad de cualquier libro que sea prestado desde la biblioteca virtual.
      - Permite la liberación de espacios físicos de tu biblioteca ya que no se requiere de archivar documentación (libros prestados por año, clientes frecuentes etc.), contando con respaldo digital de toda esta información.
      - Acceso desde internet a la plataforma.
      </p>  
</div> 

<section id="contender1" class="hero__container container">
    <h1 id="contender1" class="hero__title">Las mejores lecturas de lo que va de año 2022</h1>
    <br>
    <p id="contender1" class="hero__paragraph">Si te gusta estar al tanto de los últimos best sellers y la actualidad literaria, lo que necesitas es conocer cuáles son los libros más vendidos. Esos de los que todo el mundo está hablando, los libros más recomendados entre lectores, los más valorados por la crítica, premiados con diferentes galardones y los best sellers internacionales y déjate inspirar por el panorama de la actualidad literaria para encontrar tus próximas lecturas o los mejores libros
      -	Lejos de Luisiana. Luz Gabás.
-	Historias de mujeres casadas. Cristina Campos.
-	La llama de Focea. Lorenzo Silva.
-	Todo va a mejorar. Almudena Grandes.
-	Las olas del tiempo perdido. Sandra Barneda.
-	Contando atardeceres. La Vecina Rubia.
-	Últimos días en Berlín. ...
-	El Libro Negro de las Horas.

    </p>

    <a href="{{ route('libros.index') }}" class="btn btn-success">Descubrir ahora</a>

</section>
</header>
<br><br>

<main>    

<section id="contender1" class="knowledge">
    <div id="contender1" class="knowledge__container container">
        <div id="contender1" class="knowledege__texts">
            <h2 id="contender1" class="subtitle">Cursos online gratuitos para todos nuestros funcionarios y su familia</h2>
            <p id="contender1" class="knowledge__paragraph">Con nuestro curso de inglés, tienes la posibilidad de conseguir más oportunidades laborales en el exterior, te comunicas con facilidad cuando viajas por el mundo, captas mejores propuestas laborales y le otorgas un upgrade a tu perfil profesional.
              Los niveles de conocimiento de idiomas pueden separarse en Level Beginner (básico), Pre intermediate (pre-intermedio), Level intermediate (intermedio), Level Conversational (nivel conversacional o avanzado).
              </p>
                <a href="{{ url('/cursos') }}">
            <button type="button" class="btn btn-success">Entra a todos curso</button></a>
              
            
        </div>


    </div>
    <br><br>
</section>

<section id="contender1" class="questions__offer text-center">
    <div id="contender1" class="">
      <div id="contender1" class="card">
<section id="contender1" class="price container">
    <h2 id="contender1" class="subtitle">Cursos online pago con certificación semestral</h2>


    
    <section id="contender1" class="row">
        <div id="contender1" class="col-sm-6">
          <div id="contender1" class="card">
            <div id="contender1" class="card-body">
              <h5 id="contender1" class="card-title">English Level  Beginner</h5>
              <p id="contender1" class="card-text">El inglés para principiantes es un nivel introductorio para personas que nunca han estudiado inglés. Aquí podrás aprender inglés básico y elemental para familiarizarte con el idioma.</p>
              <a class="btn btn-primary" href="{{ url('/cursos') }}">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
        <div id="contender1" class="col-sm-6">
          <div id="contender1" class="card">
            <div id="contender1" class="card-body">
              <h5 id="contender1" class="card-title">English Pre intermediate</h5>
              <p id="contender1" class="card-text">El Pre-Intermedio es un nivel para personas que están iniciadas en su aprendizaje en el idioma y desean adquirir más conocimientos para entablar una conversación elemental.</p>
              <a class="btn btn-primary" href="{{ url('/cursos') }}">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
      </section>
      <div id="contender1" class="row">
        <div id="contender1" class="col-sm-6">
          <div id="contender1" class="card">
            <div id="contender1" class="card-body">
              <h5 id="contender1" class="card-title">English Intermediate</h5>
              <p id="contender1" class="card-text">El inglés intermedio es un nivel para personas que ya tienen un conocimiento básico del idioma, pero aún no logran entender ni comunicarse con fluidez. Sin embargo, con nuestro método llevarán su inglés a otro nivel.</p>
              <a class="btn btn-primary" href="{{ url('/cursos') }}">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
        <div id="contender1" class="col-sm-6">
          <div id="contender1" class="card">
            <div id="contender1" class="card-body">
              <h5 id="contender1" class="card-title">English Level Conversational</h5>
              <p id="contender1" class="card-text">El inglés avanzado es un nivel para personas que ya saben, entienden y se comunican en inglés, pero quieren reforzar sus conocimientos para lograr la fluidez total. Con nuestro curso de inglés online, perfeccionará sus habilidades en el idioma.</p>
              <a class="btn btn-primary" href="{{ url('/cursos') }}">¡Empezar ahora!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
          <section id="contender1" class="questions__offer text-center">
              <h2 id="contender1" class="subtitle">Revisa todos nuestros libros</h2>
              <p id="contender1" class="questions__copy">Necesitas saber más sobre todos nuestros catálogos, ya no es suficiente con leer los Best Seller y la actualidad literaria y sientes que estas obsesionado con leer aún más libros, te invitamos a revisar el listado actualizado de libros en el siguiente link ;)</p>
                <a href="{{ route('libros.index') }}" class="btn btn-success">Listado de libros actualizado 2022</a>
          </section>
</section>
@endsection
