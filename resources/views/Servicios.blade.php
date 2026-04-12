@extends('components.layouts.appP')

@section('title', 'Servicios')

@section('contenido')

<section class="py-5 servicios">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Nuestros Servicios de Construcción</h1>
            <p class="text-muted fs-5">
                Soluciones integrales adaptadas a tus necesidades
            </p>
        </div>

        <div class="row g-4">

            @php
                $servicios = [
                    [
                        'titulo' => 'Construcción Industrial',
                        'descripcion' => 'Proyectos para el sector productivo con enfoque funcional y seguro.',
                        'detalle' => 'Naves industriales, almacenes, oficinas, instalaciones eléctricas y sanitarias.'
                    ],
                    [
                        'titulo' => 'Mármol y Granito',
                        'descripcion' => 'Acabados de lujo para espacios elegantes.',
                        'detalle' => 'Mesones, escaleras, revestimientos y piezas personalizadas.'
                    ],
                    [
                        'titulo' => 'Construcción Residencial',
                        'descripcion' => 'Construcción y remodelación de hogares.',
                        'detalle' => 'Casas, ampliaciones, cocinas, baños y segundos pisos.'
                    ],
                    [
                        'titulo' => 'Construcción Comercial',
                        'descripcion' => 'Espacios que impulsan tu marca.',
                        'detalle' => 'Locales, oficinas, fachadas y restaurantes.'
                    ]
                ];
            @endphp

            @foreach ($servicios as $servicio)
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">{{ $servicio['titulo'] }}</h4>
                            <p class="card-text">{{ $servicio['descripcion'] }}</p>
                            <small class="text-muted">{{ $servicio['detalle'] }}</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">
                Solicitar presupuesto sin compromiso
            </a>
        </div>
    </div>
</section>

@endsection
