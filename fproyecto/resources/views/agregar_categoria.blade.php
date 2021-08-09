@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-lg5 col-md-6 col-sm-12 mx-auto">
            <div class="card bg-dark text-white">
                <div class="card-header bg-secondary text-white">
                    <span>Registrar Categoría de Productos</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripción</label>
                        <input type="text" id="descripcion-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" id="registrar-btn" type="button">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("javascript")
    <script src="{{asset('js/servicios/categoriasService.js')}}"></script>
    <script src="{{asset('js/agregar_categoria.js')}}"></script>
@endsection