//este archivo contiene las operaciones tipicas para comunicarse con el controlador

//getConsolas
const getConsolas = async ()=>{
    let resp = await axios.get("api/consolas/get");
    return resp.data;
}

//crearConsolas
const crearConsolas = async(consola)=>{
    //estructura de un post
    //(rut, objeto, tipo de objeto)
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
}