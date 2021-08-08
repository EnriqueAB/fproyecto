const iniciarEliminacion = async function(){
    let id = this.idEmpleado;
    let resp = await Swal.fire({title:"Desea eliminar?", text:"Esta es una operación irreversible.", 
    icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarEmpleado(id)){
            let empleados = await getEmpleados();
            cargarTabla(empleados);
            Swal.fire("Empleado Eliminado", "Empleado eliminado con éxito.", "success");
        }else {
            Swal.fire("Error","No se pudo llevar a cabo la eliminación.","error");
        }

    }else{
        Swal.fire("Cancelado","Cancelado a peticion del usuario", "info");
    }
};


const cargarTabla = (empleados)=>{
    let tbody = document.querySelector("#tbody-empleado");
    tbody.innerHTML = "";
    for(let i=0; i < empleados.length; ++i){
        let tr = document.createElement("tr");
        let tdRut = document.createElement("td");
        tdRut.innerText = empleados[i].rut;
        let tdNombre = document.createElement("td");
        tdNombre.innerText = empleados[i].nombre;
        let tdHorario = document.createElement("td");
        if(empleados[i].horario == 1){
            tdHorario.innerText = "Diurno";
        }else{
            tdHorario.innerText = "Nocturno";
        }

        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idEmpleado = empleados[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);

        tr.appendChild(tdRut);
        tr.appendChild(tdNombre);
        tr.appendChild(tdHorario);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let empleados = await getEmpleados();
    cargarTabla(empleados);
});