@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-responsive table-striped">
                <thead class="bg-info">
                    <tr>
                        <td>Rut</td>
                        <td>Nombre</td>
                        <td>Direccion</td>
                        <td>Teléfono</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola"></tbody>

            </table>

        </div>
    </div>
@endsection