const cargarTabla = (consolas) => {
    //obtener referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-consola");
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