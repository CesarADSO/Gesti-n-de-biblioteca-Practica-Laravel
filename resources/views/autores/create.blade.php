<x-app-layout>

    <div class="container">
        <h1>Registrar autor</h1>
        <form action="/autores" method="POST">
            <!-- SINTAXIS DE SEGURIDAD -->
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese los nombres del autor">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Ingrese los apellidos del autor">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nacionalidad</label>
                    <input type="text" name="nacionalidad" class="form-control" placeholder="Ingrese la nacionalidad del autor">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Ingrese la nacionalidad del autor">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Premios ganados</label>
                    <input type="number" name="premios_ganados" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Biografía breve</label>
                    <textarea name="biografia_breve" id="" placeholder="ingrese una biografía breve del autor" class="form-control"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-dark">Registrar autor</button>

        </form>
    </div>



</x-app-layout>