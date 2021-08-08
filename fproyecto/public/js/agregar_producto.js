document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let descripcion = document.querySelector("#descripcion-txt").value.trim();
    let precio = document.querySelector("#precio-txt").value

    let errores = [];

    if(nombre===""){
        errores.push("Debe ingresar un nombre")
    }
    if(descripcion===""){
        errores.push("Debe ingresar una descripción")
    }
    if(precio==0){
        errores.push("Debe tener un precio mayor a 0")
    }else if(precio<0){
        errores.push("No puede tener un precio negativo")
    }
    if(errores.length == 0){

        
        let producto = {};
        producto.nombre = nombre;
        producto.descripcion = descripcion;
        producto.precio = precio;

        let res = await crearProducto(producto);
        await Swal.fire("Producto agregado","Producto agregado con éxito", "success");
        //para redirigir a otra pagina
        window.location.href = "ver_productos";
    }else{
        await Swal.fire({
            title: "Error de ingreso",
            icon: "warning",
            html: errores.join("<br />")
        });
    };
});