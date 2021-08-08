const iniciarEliminacion = async function(){
    let id = this.idProducto;
    let resp = await Swal.fire({title:"Desea eliminar?", text:"Esta es una operación irreversible.", 
    icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarProducto(id)){
            let productos = await getProductos();
            cargarTabla(productos);
            Swal.fire("Producto Eliminado", "Producto eliminado con éxito.", "success");
        }else {
            Swal.fire("Error","No se pudo llevar a cabo la eliminación.","error");
        }

    }else{
        Swal.fire("Cancelado","Cancelado a peticion del usuario", "info");
    }
};

const cargarTabla = (productos)=>{
    let tbody = document.querySelector("#tbody-producto");
    tbody.innerHTML = "";
    for(let i=0; i < productos.length; ++i){
        let tr = document.createElement("tr");
        let tdNombre = document.createElement("td");
        tdNombre.innerText = productos[i].nombre;
        let tdDescripcion = document.createElement("td");
        tdDescripcion.innerText = productos[i].descripcion;
        let tdPrecio = document.createElement("td");
        tdPrecio.innerText = "$"+productos[i].precio;
        let tdAcciones = document.createElement("td");

        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idProducto = productos[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        
        tr.appendChild(tdNombre);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdPrecio);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let productos = await getProductos();
    cargarTabla(productos);
});