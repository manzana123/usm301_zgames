@extends("layouts.master")

@section("contenido")
    <h1>Esto es el agregar consolas</h1>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Agregar Consola</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="marca-select" class="form-label">Marca</label>
                        <select class="form-select" id="marca-select">

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anno-txt" class="form-label">Año de lanzamiento</label>
                        <input type="number" class="form-control" id="anno-txt">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>    

@endsection
@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/agregar_consolas.js')}}"></script>
@endsection