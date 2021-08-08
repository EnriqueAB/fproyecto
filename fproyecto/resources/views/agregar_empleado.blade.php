@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 col-sm-12 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Registrar Empleado</span>
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
                        <label for="horario-rb-txt" class="form-label">Horario</label>
                        <div class="form-check">
                            <input type="radio" name="horario-rb" id="horario-diurno-rb" checked class="form-check-input" value="diurno">
                            <label for="horario-diurno" class="form-check-label">Diurno</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="horario-rb" id="horario-nocturno-rb" class="form-check-input" value="nocturno">
                            <label for="horario-nocturno" class="form-check-label">Nocturno</label>
                        </div>
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
<script src="{{asset('js/servicios/empleadosService.js')}}"></script>
<script src="{{asset('js/agregar_empleado.js')}}"></script>
@endsection