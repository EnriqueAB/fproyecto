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
const actualizar = async function(){
    let idCategoria = this.idCategoria;
    let categoria = await findById(idCategoria);
    
    categoria.nombre = document.querySelector("#nombre-txt").value;
    categoria.descripcion = document.querySelector("#descripcion-txt").value;
    await actualizarCategoria(categoria);
    let categorias = await getCategorias();
    cargarTabla(categorias);
};

const iniciarActualizacion = async function(){
    let idCategoria = this.idCategoria;
    let categoria = await findById(idCategoria);
    document.querySelector("#nombre-txt").value = categoria.nombre;
    document.querySelector("#descripcion-txt").value = categoria.descripcion;
    document.querySelector("#actualizar-btn").idCategoria = idCategoria;
    document.querySelector("#actualizar-btn").addEventListener("click",actualizar);
    
}

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

        let botonActualizar = document.createElement("button");
        botonActualizar.innerText = "Actualizar";
        botonActualizar.classList.add("btn","btn-success");
        botonActualizar.idCategoria = categorias[i].id;
        botonActualizar.addEventListener("click", iniciarActualizacion);
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idCategoria = categorias[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        tdAcciones.appendChild(botonActualizar);
        
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