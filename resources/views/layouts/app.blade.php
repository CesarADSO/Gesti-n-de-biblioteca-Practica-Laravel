<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <style>
        /* Un pequeño ajuste para que el sidebar no se vea plano */
        .nav-link { transition: 0.2s; border-radius: 5px; margin-bottom: 5px; }
        .nav-link:hover:not(.active):not(.disabled) { background-color: rgba(255,255,255,0.1); }
        .sidebar { box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1); }
    </style>
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row vh-100">

            <div class="col-md-3 col-lg-2 bg-dark text-white p-4 shadow-lg sidebar">

                <h4 class="text-center mb-4 pb-3 border-bottom border-secondary">
                    <i class="fa-solid fa-book-bookmark me-2 text-primary"></i>Panel
                </h4>

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/autores" class="nav-link text-white active shadow-sm">
                            <i class="fa-solid fa-user-pen me-2"></i> Autores
                        </a>
                    </li>

                    <li>
                        <a href="/libros" class="nav-link text-white">
                            <i class="fa-solid fa-book me-2"></i> Libros
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-chart-line me-2"></i> Reportes
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link text-white disabled opacity-50">
                            <i class="fa-solid fa-lock me-2"></i> Bloqueado
                        </a>
                    </li>
                </ul>

                <div class="mt-5 pt-5 opacity-25 text-center small">
                    v1.0.0
                </div>

            </div>

            <div class="col-md-9 col-lg-10 p-5 overflow-auto">
                <div class="container bg-white p-4 rounded-4 shadow-sm min-vh-100">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>