@extends('components.layouts.appP')

@section('title', 'Proyectos')

@section('contenido')

<section class="py-5 bg-light proyectos bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Nuestros Proyectos</h1>
            <p class="text-muted fs-5">
                Una muestra de nuestro trabajo y la confianza de nuestros clientes
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imagen/construccion4.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5>Ampliación de Nave Industrial</h5>
                        <p class="text-muted">500m² con estructura metálica. Entregado en 4 meses.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imagen/construccion2.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5>Casa Familiar "Los Almendros"</h5>
                        <p class="text-muted">Casa de 2 plantas con terraza y jardín.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('imagen/construccion3.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5>Showroom Comercial</h5>
                        <p class="text-muted">Espacio moderno con iluminación LED y mármol.</p>
                    </div>
                </div>
            </div>

        </div>

        <hr class="my-5">

        <h3 class="text-center mb-4">Testimonios</h3>

        <blockquote class="text-center">
            <p class="fst-italic">
                "Trabajar con Constructora Helen Fernández fue un acierto total."
            </p>
            <footer class="fw-bold">Carlos R.</footer>
        </blockquote>

    </div>
</section>

@endsection
