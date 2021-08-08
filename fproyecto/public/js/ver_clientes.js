const iniciarEliminacion = async function(){
    let id = this.idCliente;
    let resp = await Swal.fire({title:"Desea eliminar?", text:"Esta es una operación irreversible.", 
    icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarCliente(id)){
            let clientes = await getClientes();
            cargarTabla(clientes);
            Swal.fire("Cliente Eliminado", "Cliente eliminado con éxito.", "success");
        }else {
            Swal.fire("Error","No se pudo llevar a cabo la eliminación.","error");
        }

    }else{
        Swal.fire("Cancelado","Cancelado a peticion del usuario", "info");
    }
};


const cargarTabla = (clientes)=>{
    let tbody = document.querySelector("#tbody-cliente");
    tbody.innerHTML = "";
    for(let i=0; i < clientes.length; ++i){
        let tr = document.createElement("tr");
        let tdRut = document.createElement("td");
        tdRut.innerText = clientes[i].rut;
        let tdNombre = document.createElement("td");
        tdNombre.innerText = clientes[i].nombre;
        let tdDireccion = document.createElement("td");
        tdDireccion.innerText = clientes[i].direccion;
        let tdTelefono = document.createElement("td");
        tdTelefono.innerText = clientes[i].telefono;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idCliente = clientes[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);

        tr.appendChild(tdRut);
        tr.appendChild(tdNombre);
        tr.appendChild(tdDireccion);
        tr.appendChild(tdTelefono);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let clientes = await getClientes();
    cargarTabla(clientes);
});