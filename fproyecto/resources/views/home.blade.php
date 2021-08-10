@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-12 col-md-7 col-lg-9 mx-auto">
            <div class="card bg-dark text-white">
                <div class="card-header text-center text-warning">
                    <h1>Ferreteria "LA OBRA"</h1>
                </div>
                <div class="card-body">
                    <h4>En está aplicación web se tiene acceso a las funciones básicas del manejo de entidades de la ferreteria, estas son:</h4>
                </div>
                <div class="card-footer">
                    <h5> - Registro y eliminación de Clientes</h5>
                    <h5> - Registro y eliminación de Empleados</h5>
                    <h5> - Registro y eliminación de Productos</h5>
                    <h5> - Registro, actualización y eliminación de Categorias de Productos</h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-3 mx-auto">
            <div id="imagenes-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/carousel1.jpg')}}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carousel2.jpg')}}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carousel3.jpg')}}" class="d-block w-100">
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection