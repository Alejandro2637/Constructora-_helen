<nav class="navbar navbar-custom navbar-expand-lg px-0">
    <div class="container-fluid">
        <!-- Logo y nombre - Ajusté los márgenes -->
        <div class="d-flex align-items-center ms-3 ms-lg-4">
            <div class="logo-img me-3">
                CH
            </div>
            <div class="company-info">
                <h1 class="company-name mb-0">CONSTRUCTORA <span class="helen">HELEN FERNANDEZ</span></h1>
                <p class="tagline d-none d-md-block mb-0">
                    Más de 25 años construyendo con calidad y compromiso
                </p>
            </div>
        </div>
        
        <!-- Botón menú móvil - Ajusté el margen -->
        <button class="navbar-toggler border-0 me-3 me-lg-4" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarMain" 
                aria-controls="navbarMain" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <i class="fas fa-bars me-1"></i>
            <span class="d-none d-sm-inline">Menu</span>
        </button>
        
        <!-- Menú de navegación - Ajusté los márgenes -->
        <div class="collapse navbar-collapse justify-content-end me-3 me-lg-4" id="navbarMain">
            <div class="navbar-nav nav-links-container">
                <!-- Inicio -->
                <a class="nav-link-item d-flex align-items-center" href="{{ Route('inicio') }}">
                    <i class="fas fa-home me-2"></i>
                    <span>Inicio</span>
                </a>
                
                <!-- Nosotros -->
                <a class="nav-link-item d-flex align-items-center" href="{{ Route('nosotros') }}">
                    <i class="fas fa-users me-2"></i>
                    <span>Nosotros</span>
                </a>
                
                <!-- Servicios con dropdown -->
                <div class="dropdown">
                    <a class="nav-link-item d-flex align-items-center dropdown-toggle" 
                       href="{{ Route('servicio') }}" 
                       role="button" 
                       data-bs-toggle="dropdown">
                       <i class="fas fa-hard-hat me-2"></i>
                       <span>Servicios</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ Route('servicio') }}">
                                <i class="fas fa-home me-2"></i>
                                Construcción Residencial
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ Route('servicio') }}">
                                <i class="fas fa-building me-2"></i>
                                Proyectos Comerciales
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ Route('servicio') }}">
                                <i class="fas fa-industry me-2"></i>
                                Construcción Industrial
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ Route('servicio') }}">
                                <i class="fas fa-gem me-2"></i>
                                Trabajo con Mármol
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ Route('servicio') }}">
                                <i class="fas fa-list me-2"></i>
                                Todos los Servicios
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Proyectos -->
                <a class="nav-link-item d-flex align-items-center" href="{{ Route('proyectos') }}">
                    <i class="fas fa-project-diagram me-2"></i>
                    <span>Proyectos</span>
                </a>
                
                <!-- Contacto -->
                <a class="nav-link-item d-flex align-items-center" href="{{ Route('contacto') }}">
                    <i class="fas fa-envelope me-2"></i>
                    <span>Contacto</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Estilos base CORREGIDOS */
    .navbar-custom {
        background: linear-gradient(135deg, #2c5590, #1a3a6e) !important; /* ← NUEVO FONDO AZUL */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* ← Sombras más pronunciadas */
        padding: 0; /* ← Un poco más de padding */
        width: 100%;
    }
    .navbar-custom > .container-fluid {
        padding: 8px 1.5rem; /* ← Padding interno */
    }
        
    .logo-img {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #3a6ea5, #2c5590);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
       
    }
    
    .company-name {
        color: white !important;
        font-size: 1.6rem; /* Reducí un poco el tamaño */
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(90deg, #3a6ea5, #2c5590);
        background-clip: text;
        -webkit-background-clip: text;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
    }
    
    .tagline {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.8rem; /* Reducí un poco */
        font-style: italic;
        margin-top: 0.25rem;
    }
    
    .helen {
        color: #f5c505 !important;
    }
    
    /* Botón menú móvil */
    .navbar-toggler {
        background: rgba(255, 255, 255, 0.15);
        color: white !important;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        border: 1px solid rgba(245, 197, 5, 0.3);
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    
    .navbar-toggler:hover {
        background: linear-gradient(135deg, #2c5590, #1a3a6e);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    /* CONTENEDOR DE ENLACES EN LÍNEA */
    .nav-links-container {
        display: flex !important;
        flex-direction: row !important;
        align-items: center;
        gap: 8px;
        flex-wrap: nowrap;
        padding: 0;
        margin: 0;
    }
    
    /* ESTILOS DE LOS ENLACES - TODOS EN LÍNEA */
    .nav-link-item {
        background: rgba(255, 255, 255, 0.1);
         backdrop-filter: blur(10px);
        color: white !important;
        border-radius: 8px;
        padding: 0.75rem 1rem !important; /* Reducí el padding lateral */
        transition: all 0.3s ease;
        text-decoration: none !important;
        white-space: nowrap;
        min-width: 100px; /* Reducí el min-width */
        width: auto !important;
        justify-content: center;
        border: 1px solid rgba(245, 197, 5, 0.3);
        font-size: 0.9rem; /* Reducí el tamaño de fuente */
        position: relative;
    }
    
    .nav-link-item:hover {
          background: rgba(245, 197, 5, 0.2); /* ← Amarillo semi-transparente */
         border-color: #f5c505;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        color: white !important;
    }
    
    .nav-link-item i {
        font-size: 0.9rem; /* Reducí el tamaño de los íconos */
        width: 18px;
        text-align: center;
    }
    
    .fas {
        color: #ffcc00;
    }
    
    /* Dropdown */
    .dropdown {
        display: inline-block;
        position: relative;
    }
    
    .dropdown-menu {
        border: none;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        padding: 0.5rem;
        margin-top: 8px;
    }
    
    .dropdown-item {
        border-radius: 6px;
        padding: 0.75rem 1rem;
        margin: 0.15rem 0;
        transition: all 0.2s ease;
    }
    
    .dropdown-item:hover {
        background-color: #f0f8ff;
        padding-left: 1.25rem;
    }
    
    /* Responsive */
    @media (max-width: 1200px) {
        .company-name {
            font-size: 1.4rem;
        }
        
        .nav-link-item {
            padding: 0.65rem 0.8rem !important;
            min-width: 85px;
        }
        
        .nav-link-item span {
            font-size: 0.85rem;
        }
    }
    
    @media (max-width: 992px) {
        .company-name {
            font-size: 1.2rem;
        }
        
        .logo-img {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        
        .nav-links-container {
            gap: 6px;
        }
        
        .nav-link-item {
            padding: 0.6rem 0.7rem !important;
            min-width: 80px;
        }
    }
    
    @media (max-width: 768px) {
        .nav-links-container {
            flex-direction: column !important;
            align-items: stretch;
            gap: 10px;
            width: 100%;
            margin-top: 15px;
            padding: 0 15px;
        }
        
        .nav-link-item {
            width: 100%;
            justify-content: flex-start;
            padding: 0.8rem 1.2rem !important;
            min-width: auto;
        }
        
        .company-name {
            font-size: 1.1rem;
        }
        
        .tagline {
            font-size: 0.7rem;
        }
    }
    
    @media (max-width: 576px) {
        .company-name {
            font-size: 0.9rem;
        }
        
        .logo-img {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
        
        .nav-link-item {
            padding: 0.7rem 1rem !important;
        }
        
        /* Ajustes para móviles pequeños */
        .ms-3.ms-lg-4 {
            margin-left: 15px !important;
        }
        
        .me-3.me-lg-4 {
            margin-right: 15px !important;
        }
    }
    
    /* Para pantallas muy grandes */
    @media (min-width: 1400px) {
        .company-name {
            font-size: 1.8rem;
        }
        
        .nav-link-item {
            padding: 0.85rem 1.2rem !important;
            min-width: 120px;
            font-size: 1rem;
        }
    }
</style>

<script>
// Script para mantener el hover en dispositivos táctiles
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link-item');
    
    navLinks.forEach(link => {
        link.addEventListener('touchstart', function() {
            this.classList.add('hover-effect');
        });
        
        link.addEventListener('touchend', function() {
            setTimeout(() => {
                this.classList.remove('hover-effect');
            }, 150);
        });
    });
});
</script>