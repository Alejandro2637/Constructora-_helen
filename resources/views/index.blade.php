@extends('components.layouts.appP')

@section('title', 'Constructora HF')

@section('contenido')


<section class="hero-section d-flex align-items-center text-white"
    style="
        background: linear-gradient(
            rgba(0,0,0,0.55),
            rgba(0,0,0,0.55)
        ),
        url('{{ asset('imagen/helen.jpg') }}');
        background-size: cover;
        background-position: center;
        min-height: 85vh;
    ">
    <div class="container text-center">
        <h1 class="fw-bold mb-3">
            Construcción con experiencia y compromiso
        </h1>
        <p class="lead mb-4">
            Más de 25 años desarrollando proyectos residenciales, comerciales e industriales
        </p>
       
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">¿Quiénes Somos?</h2>
                <p>
                    Constructora Helen Fernández es una empresa con amplia experiencia
                    en el sector de la construcción, comprometida con la calidad,
                    la seguridad y la satisfacción de nuestros clientes.
                </p>
                <p>
                    Desarrollamos proyectos eficientes y duraderos, cumpliendo
                    con los más altos estándares técnicos.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('imagen/contruccion1.png') }}" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<section id="servicios" class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Nuestros Servicios</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Construcción Residencial</h5>
                        <p class="card-text">
                            Viviendas modernas y funcionales con acabados de calidad.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Construcción Comercial</h5>
                        <p class="card-text">
                            Locales y edificios comerciales adaptados a su negocio.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title">Obras Industriales</h5>
                        <p class="card-text">
                            Soluciones constructivas robustas y eficientes.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Proyectos Destacados</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <img src="{{ asset('imagen/construccion3.png') }}" class="img-fluid rounded shadow">
            </div>

            <div class="col-md-4">
                <img src="{{ asset('imagen/construccion2.png') }}" class="img-fluid rounded shadow">
            </div>

            <div class="col-md-4">
                <img src="{{ asset('imagen/construccion4.png') }}" class="img-fluid rounded shadow">
            </div>

        </div>
    </div>
</section>

<section class="py-5 text-white text-center"
    style="background-color:#2c3e50;">
    <div class="container">
        <h2 class="fw-bold mb-3">¿Listo para comenzar tu proyecto?</h2>
        <p class="mb-4">
            Contáctanos y tendra un proyecto de calidad
        </p>
        <a href="{{ route('contacto') }}" class="btn btn-warning btn-lg">
            Contáctanos
        </a>
    </div>
</section>

@endsection
    
