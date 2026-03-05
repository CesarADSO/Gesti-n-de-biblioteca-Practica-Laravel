<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/autores-custom.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row vh-100">

            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 bg-dark text-white p-3">

                <h4 class="text-center mb-4">Panel</h4>

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/autores" class="nav-link text-white active">
                            Autores
                        </a>
                    </li>

                    <li>
                        <a href="/libros" class="nav-link text-white">
                            Libros
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link text-white">
                            Pricing
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link text-white disabled">
                            Disabled
                        </a>
                    </li>
                </ul>

            </div>

            <!-- Contenido -->
            <div class="col-md-9 col-lg-10 p-4">
                @yield('content')
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>