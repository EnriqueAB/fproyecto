
const getEmpleados = async ()=>{
    let resp = await axios.get("api/empleados/get");
    return resp.data;
};

const crearEmpleado = async(empleado)=>{
    let resp = await axios.post("api/empleados/post", empleado, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarEmpleado = async(id)=>{
    try{
        let resp = await axios.post("api/empleados/delete", {id}, {
            headers: {
                "Content-Type": "application/json"
            }
        });
        return resp.data =="ok";
    }catch(e){
        return false;
    }
};