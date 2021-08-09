@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-responsive table-striped table-dark">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-categoria"></tbody>

            </table>

        </div>
    </div>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/categoriasService.js')}}"></script>
    <script src="{{asset('js/ver_categorias.js')}}"></script>
@endsection