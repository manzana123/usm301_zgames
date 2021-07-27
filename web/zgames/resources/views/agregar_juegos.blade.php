@extends("layouts.master")

@section("contenido")
    <h1>Esto es el agregar juegos</h1>
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Registrar Juego</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripcion</label>
                        <input type="text" id="descripcion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha Lanzamiento</label>
                        <input type="date" id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for=""></label>
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection