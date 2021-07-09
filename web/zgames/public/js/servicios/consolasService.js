//este archivo contiene las operaciones tipicas para comunicarse con el controlador

//getConsolas
const getConsolas = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/consolas/get"); 
    }else{
        resp = await axios.get(`api/consolas/filtrar?filtro=${filtro}`);
    };
    return resp.data;
}

//crearConsolas
const crearConsolas = async(consola)=>{
    //estructura de un post
    //(ruta, objeto, tipo de objeto)
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
}

//eliminarConsolas
const eliminarConsolas = async(id)=>{
    try{
        let resp = await axios.post("api/consolas/delete", {id}, {
            headers:{
                'Content-Type': 'application/json'
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};