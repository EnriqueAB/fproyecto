document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let descripcion = document.querySelector("#descripcion-txt").value.trim();

    let errores = [];

    if(nombre===""){
        errores.push("Debe ingresar un nombre")
    }

    if(descripcion===""){
        errores.push("Debe ingresar una descripción")
    }
    if(errores.length == 0){

        
        let categoria = {};
        categoria.nombre = nombre;
        categoria.descripcion = descripcion;

        let res = await crearCategoria(categoria);
        await Swal.fire("Categoria agregada","Categoria agregada con éxito", "success");
        //para redirigir a otra pagina
        window.location.href = "ver_categorias";
    }else{
        await Swal.fire({
            title: "Error de ingreso",
            icon: "warning",
            html: errores.join("<br />")
        });
    };
});