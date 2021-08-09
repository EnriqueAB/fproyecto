@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-lg5 col-md-6 col-sm-12 mx-auto">
            <div class="card bg-dark text-white">
                <div class="card-header bg-secondary text-white">
                    <span>Registrar Cliente</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="rut-txt" class="form-label text-light">Rut:</label>
                        <input type="text" id="rut-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label text-light">Nombre:</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label text-light">Dirección:</label>
                        <input type="text" id="direccion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telefono-txt" class="form-label text-light">Teléfono:</label>
                        <input type="text" id="telefono-txt" class="form-control">
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
    <script src="{{asset('js/servicios/clientesService.js')}}"></script>
    <script src="{{asset('js/agregar_cliente.js')}}"></script>
@endsection