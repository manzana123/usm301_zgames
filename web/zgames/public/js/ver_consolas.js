const iniciarEliminacion = async function(){
    //1.obtener id a eliminar
    let id = this.idConsola;
    let resp = await Swal.fire({title:"¿Esta seguro?", text:"Esta operacion es irreversible",
    icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        //1. eliminar
        if(await eliminarConsolas(id)){
            //2. si la eliminacion fue exitosa, recargar tabla
            let consolas = await getConsolas();
            cargarTabla(consolas);
            Swal.fire("Consola eliminada", "Consola eliminada exitosamente", "info");
        }
    }else{
        //3. si la eliminacion no se hace mostrar mensaje
        Swal.fire("Cancelado", "Cancelado a peticion del usuario","info");
    }
};

const cargarTabla = (consolas) => {
    //obtener referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-consola");
    tbody.innerHTML = "";
    //recorrer todas las consolas
    for(let i=0; i<consolas.length; ++i){
        //generar las filas
        let tr = document.createElement("tr");

        let tdNombre = document.createElement("td");
        tdNombre.innerText = consolas[i].nombre;

        let tdMarca = document.createElement("td");
        tdMarca.innerText = consolas[i].marca;

        let tdAnno = document.createElement("td");
        tdAnno.innerText = consolas[i].anno;

        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");

        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idConsola = consolas[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        
        tr.appendChild(tdNombre);
        tr.appendChild(tdMarca);
        tr.appendChild(tdAnno);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);

    }
    
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let consolas = await getConsolas();
    cargarTabla(consolas);
});