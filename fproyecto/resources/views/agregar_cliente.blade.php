@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-lg5 col-md-6 col-sm-12 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Registrar Cliente</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="rut-txt" class="form-label">Rut</label>
                        <input type="text" id="rut-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Dirección</label>
                        <input type="text" id="direccion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telefono-txt" class="form-label">Teléfono</label>
                        <input type="text" id="telefono-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-info" id="registrar-btn" type="button">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("javascript")
    <script src="{{assets('js/agregar_cliente.js')}}"></script>
@endsection