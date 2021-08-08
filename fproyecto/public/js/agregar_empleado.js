document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let rut = document.querySelector("#rut-txt").value.trim();
    let nombre = document.querySelector("#nombre-txt").value.trim();

    let horario = document.querySelector("#horario-diurno-rb").checked ? 1: 0;

    let errores = [];
    //TODO: VALIDACION Y FORMATO DEL RUT MEDIANTE RUTJS

    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }

    if(errores.length == 0){

        
        let empleado = {};
        empleado.rut = rut;
        empleado.nombre = nombre;
        empleado.horario = horario;

        let res = await crearEmpleado(empleado);
        await Swal.fire("Empleado agregado","Empleado agregado con éxito", "success");
        //para redirigir a otra pagina
        window.location.href = "ver_empleados";
    }else{
        await Swal.fire({
            title: "Error de ingreso",
            icon: "warning",
            html: errores.join("<br />")
        });
    };
});