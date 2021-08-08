const iniciarEliminacion = async function(){
    let id = this.idCategoria;
    let resp = await Swal.fire({title:"Desea eliminar?", text:"Esta es una operación irreversible.", 
    icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarCategoria(id)){
            let categorias = await getCategorias();
            cargarTabla(categorias);
            Swal.fire("Categoria Eliminada", "Categoria eliminada con éxito.", "success");
        }else {
            Swal.fire("Error","No se pudo llevar a cabo la eliminación.","error");
        }

    }else{
        Swal.fire("Cancelado","Cancelado a peticion del usuario", "info");
    }
};

const cargarTabla = (categorias)=>{
    let tbody = document.querySelector("#tbody-categoria");
    tbody.innerHTML = "";
    for(let i=0; i < categorias.length; ++i){
        let tr = document.createElement("tr");
        let tdNombre = document.createElement("td");
        tdNombre.innerText = categorias[i].nombre;
        let tdDescripcion = document.createElement("td");
        tdDescripcion.innerText = categorias[i].descripcion;
        let tdAcciones = document.createElement("td");

        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idCategoria = categorias[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        
        tr.appendChild(tdNombre);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let categorias = await getCategorias();
    cargarTabla(categorias);
});