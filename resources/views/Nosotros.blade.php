@extends('components.layouts.appP')

@section('title', 'Constructora HF')

@section('contenido')

<section class="py-5 bg-light nosotros bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Sobre Constructora Helen Fernández</h1>
            <p class="text-muted fs-5">
                Más de 15 años construyendo tus sueños con calidad y compromiso
            </p>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <p>
                    Constructora Helen Fernández nace de la visión de su fundadora, 
                    <strong>Helen Fernández</strong>, con el objetivo de crear una empresa 
                    que combine experiencia técnica, atención personalizada y un compromiso 
                    inquebrantable con la calidad.
                </p>

                <p>
                    Somos una empresa familiar que, desde <strong>2009</strong>, transforma 
                    las ideas de nuestros clientes en realidades sólidas y duraderas.
                </p>

                <h4 class="mt-4">Nuestros pilares</h4>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <strong>✔ Honestidad y Transparencia:</strong> Presupuestos claros y comunicación constante.
                    </li>
                    <li class="mb-2">
                        <strong>✔ Calidad y Profesionalismo:</strong> Materiales de primera y personal calificado.
                    </li>
                    <li class="mb-2">
                        <strong>✔ Compromiso y Puntualidad:</strong> Cumplimos los plazos acordados.
                    </li>
                </ul>
            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('imagen/construccion2.png') }}" 
                     class="img-fluid rounded shadow" 
                     alt="Equipo de Constructora Helen Fernández">
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">
                Confía en nosotros para construir tu futuro
            </a>
        </div>
    </div>
</section>


@endsection