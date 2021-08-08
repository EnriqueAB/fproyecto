
document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let rut = document.querySelector("#rut-txt").value.trim();
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let telefono = document.querySelector("#telefono-txt").value.trim();
    

    let errores = [];
    //TODO: VALIDACION Y FORMATO DEL RUT MEDIANTE RUTJS

    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }
    if(direccion === ""){
        errores.push("Debe ingresar una dirección");
    }
    if(telefono === ""){
        errores.push("Debe ingresar un número telefónico");
    }

    if(errores.length == 0){

        
        let cliente = {};
        cliente.rut = rut;
        cliente.nombre = nombre;
        cliente.direccion = direccion;
        cliente.telefono = telefono;

        let res = await crearCliente(cliente);
        await Swal.fire("Cliente agregado","Cliente agregado con éxito", "success");
        //para redirigir a otra pagina
        window.location.href = "ver_clientes";
    }else{
        await Swal.fire({
            title: "Error de ingreso",
            icon: "warning",
            html: errores.join("<br />")
        });
    };
});