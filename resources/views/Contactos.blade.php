@extends('components.layouts.appP')

@section('title', 'Contacto')

@section('contenido')

<section class="py-5 contacto">
    <div class="container">
        <!-- Encabezado -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">Contáctanos</h1>
            <p class="text-muted fs-5">
                Comencemos a hablar de tu próximo proyecto
            </p>
        </div>

        <div class="row g-5 align-items-start">
            <!-- Formulario -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Solicita tu presupuesto</h4>

                        <form method="POST" action="{{ route('contacto.enviar') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nombre completo *</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo electrónico *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Teléfono</label>
                                <input type="text" name="movil" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tipo de proyecto *</label>
                                <select class="form-select"  name="tipo_proyecto" required>
                                    <option value="">Seleccione una opción</option>
                                    <option>Industrial</option>
                                    <option>Residencial</option>
                                    <option>Comercial</option>
                                    <option>Marmolería</option>
                                    <option>Otro</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Descripción del proyecto *</label>
                                <textarea class="form-control" name="mensaje" rows="4" required></textarea>
                            </div>

                            <button class="btn btn-primary w-100">
                                Enviar consulta
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Mapa -->
            <div class="col-lg-6">
                <h4 class="mb-3">Nuestra ubicación</h4>

                <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps?q=Av.%20Principal%20123&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <p class="text-muted mt-3">
                    Tu consulta no es una molestia, es nuestra oportunidad para servirte.  
                    Te responderemos en menos de <strong>24 horas hábiles</strong>.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
