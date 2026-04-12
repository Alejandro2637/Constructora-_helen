{{-- resources/views/components/footer.blade.php --}}
<footer class="footer-constructora">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row g-4">
            <!-- Logo y Descripción -->
            <div class="col-lg-4 col-md-">
                <div class="footer-brand-section">
                    <div class="d-flex align-items-center mb-3">
                        <div class="footer-logo me-3">
                            CH
                        </div>
                        <div class="footer-company-info">
                            <h2 class="footer-company-name mb-0">
                                CONSTRUCTORA <span class="footer-helen">HELEN FERNANDEZ</span>
                            </h2>
                            <p class="footer-tagline mb-0">
                                Más de 25 años construyendo con calidad y compromiso
                            </p>
                        </div>
                    </div>
                    <p class="footer-description mt-3">
                        Especialistas en construcción de edificaciones residenciales, comerciales e industriales. 
                        Comprometidos con la excelencia, calidad y cumplimiento en cada proyecto.
                    </p>
                    
                    <!-- Redes Sociales -->
                    <div class="footer-social mt-4">
                        <a href="#" class="footer-social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navegación -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-section">
                    <h4 class="footer-section-title">Enlaces Rápidos</h4>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="{{ route('inicio') }}" class="footer-link">
                                <i class="fas fa-home me-2"></i> Inicio
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="{{ route('nosotros') }}" class="footer-link">
                                <i class="fas fa-users me-2"></i> Nosotros
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="{{ route('servicio') }}" class="footer-link">
                                <i class="fas fa-hard-hat me-2"></i> Servicios
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="{{ route('proyectos') }}" class="footer-link">
                                <i class="fas fa-project-diagram me-2"></i> Proyectos
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="{{ route('contacto') }}" class="footer-link">
                                <i class="fas fa-envelope me-2"></i> Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Servicios -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h4 class="footer-section-title">Nuestros Servicios</h4>
                    <ul class="footer-links-list">
                        <li class="footer-links-item">
                            <a href="#" class="footer-link">
                                <i class="fas fa-home me-2"></i> Construcción Residencial
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-link">
                                <i class="fas fa-building me-2"></i> Proyectos Comerciales
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-link">
                                <i class="fas fa-industry me-2"></i> Construcción Industrial
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-link">
                                <i class="fas fa-gem me-2"></i> Trabajo con Mármol
                            </a>
                        </li>
                        <li class="footer-links-item">
                            <a href="#" class="footer-link">
                                <i class="fas fa-hard-hat me-2"></i> Remodelaciones
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contacto -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h4 class="footer-section-title">Contacto</h4>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <div class="d-flex">
                                <div class="footer-contact-icon me-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <strong class="footer-contact-label">Dirección:</strong>
                                    <p class="footer-contact-info mb-0">
                                        Av. Principal #123, Zona Industrial<br>
                                        Holguin, Cuba
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <div class="d-flex">
                                <div class="footer-contact-icon me-3">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <strong class="footer-contact-label">Teléfono:</strong>
                                    <p class="footer-contact-info mb-0">+53 59487151</p>
                                </div>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <div class="d-flex">
                                <div class="footer-contact-icon me-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <strong class="footer-contact-label">Email:</strong>
                                    <p class="footer-contact-info mb-0">info@constructorahelen.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <div class="d-flex">
                                <div class="footer-contact-icon me-3">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <strong class="footer-contact-label">Horario:</strong>
                                    <p class="footer-contact-info mb-0">
                                        Lun-Vie: 8:00 AM - 6:00 PM<br>
                                        Sáb: 9:00 AM - 1:00 PM
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Línea divisoria -->
        <div class="footer-divider my-0"></div>

        <!-- Copyright y métodos de pago -->
        <div class="footer-bottom">
           <div class="row justify-content-center">
              <div class="col-md-8 col-lg-6 text-center">
                 <p class="footer-copyright mb-0">
                     © {{ date('Y') }} Constructora Helen Fernandez. Todos los derechos reservados.
                 </p>
              </div>
           </div>
        </div>

    </div>
</footer>