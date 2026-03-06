<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de gestión de biblioteca — administra libros y usuarios de forma sencilla.">
    <title>BiblioAdmin — Gestión de Biblioteca</title>

    {{-- Estilos --}}
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body>

    {{-- ── NAVEGACIÓN ── --}}
    <nav>
        <a href="/" class="nav-logo">
            <div class="logo-icon">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5v14z"/>
                    <path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-2H6.5a.5.5 0 0 1 0-1H20"/>
                </svg>
            </div>
            <span>BiblioAdmin</span>
        </a>

        <a href="/login" class="nav-cta">
            Acceder
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </nav>

    {{-- ── HERO ── --}}
    <section class="hero">
        <div class="hero-content">
            <div class="hero-eyebrow">Sistema de Gestión</div>

            <h1>
                Tu biblioteca,<br>
                <em>siempre ordenada</em>
            </h1>

            <p class="hero-desc">
                Administra el catálogo de libros y los usuarios de tu biblioteca
                desde un panel limpio e intuitivo. Sin complicaciones.
            </p>

            <div class="hero-actions">
                {{-- ── BOTÓN PRINCIPAL → /login ── --}}
                <a href="/login" class="btn-primary">
                    Ingresar al sistema
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>

                <a href="#features" class="btn-secondary-link">
                    Ver funciones
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </a>
            </div>

            <div class="stats-row">
                <div class="stat">
                    <span class="stat-number">2</span>
                    <span class="stat-label">Módulos CRUD</span>
                </div>
                <div class="stat">
                    <span class="stat-number">∞</span>
                    <span class="stat-label">Registros</span>
                </div>
                <div class="stat">
                    <span class="stat-number">1</span>
                    <span class="stat-label">Panel unificado</span>
                </div>
            </div>
        </div>

        {{-- Decoración visual derecha --}}
        <div class="hero-visual" aria-hidden="true">
            <div class="book-stack">
                <div class="book-item">El nombre de la rosa</div>
                <div class="book-item">Cien años de soledad</div>
                <div class="book-item">Don Quijote de la Mancha</div>
                <div class="book-item">Ficciones</div>
                <div class="book-item">La casa de los espíritus</div>
                <div class="book-item">Pedro Páramo</div>
            </div>
        </div>
    </section>

    {{-- ── CARACTERÍSTICAS ── --}}
    <section class="features" id="features">
        <div class="section-header">
            <span class="section-tag">Funcionalidades</span>
            <h2 class="section-title">Todo lo que necesitas para gestionar tu biblioteca</h2>
        </div>

        <div class="features-grid">
            {{-- Card 1 --}}
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5v14z"/>
                    </svg>
                </div>
                <h3>Gestión de Libros</h3>
                <p>Crea, edita, consulta y elimina libros del catálogo. Mantén toda la información organizada en un solo lugar.</p>
            </div>

            {{-- Card 2 --}}
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Gestión de Usuarios</h3>
                <p>Administra los miembros de la biblioteca: altas, bajas y modificaciones desde un panel centralizado.</p>
            </div>

            {{-- Card 3 --}}
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="1"/>
                        <rect x="14" y="3" width="7" height="7" rx="1"/>
                        <rect x="3" y="14" width="7" height="7" rx="1"/>
                        <rect x="14" y="14" width="7" height="7" rx="1"/>
                    </svg>
                </div>
                <h3>Panel Unificado</h3>
                <p>Accede a todos los módulos desde un único panel intuitivo. Navegación sencilla entre libros y usuarios.</p>
            </div>
        </div>
    </section>

    {{-- ── CTA FINAL ── --}}
    <section class="cta-section">
        <div class="cta-text">
            <h2>Listo para comenzar a gestionar</h2>
            <p>Ingresa al sistema y empieza a administrar tu catálogo y usuarios ahora mismo.</p>
        </div>
        <a href="/login" class="btn-cta">
            Ir al sistema
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </section>

    {{-- ── FOOTER ── --}}
    <footer>
        <span class="footer-logo">BiblioAdmin</span>
        <span class="footer-copy">{{ date('Y') }} · Sistema de Gestión de Biblioteca</span>
    </footer>

</body>
</html>