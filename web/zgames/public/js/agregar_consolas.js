
const cargarMarcas = async()=>{
    //1.Buscar las marcas a la api
    let marcas = await getMarcas();

    //2.Cargar las marcas dentro del select
    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m => {
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });

}

//esto asegura la carga de todos los recursos al momento de ejecutar la pagina
document.addEventListener("DOMContentLoaded", ()=>{
    cargarMarcas();
});
//cargarMarcas();

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let marca = document.querySelector("#marca-select").value.trim();
    let anno = document.querySelector("#anno-txt").value.trim();
    
    let errores =[];
    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }else{
        //validar si la consola existe en el sistema
        let consolas = await getConsolas();
        let consolaEncontrada = consolas.find(c=>c.nombre.toLowerCase()===nombre.toLowerCase());
        if(consolaEncontrada != undefined){
            errores.push("La consola ya existe");
        };
    };
    
    if(isNaN(anno)){
        errores.push("El año debe ser numerico")
    }else if(+anno < 1958){
        errores.push("El año es incorrecto")
    };

    if(errores.length == 0){

        let consola = {};
        consola.nombre = nombre;
        consola.marca = marca;
        consola.anno = anno;

        //esta linea hace lo siguiente:
        //va al controlador
        //el controlador crea el modelo
        //el modelo ingresa en la base de datos
        let res = await crearConsolas(consola);
        await Swal.fire("Consolada creada","Consola creada exitosamente","info");
        //por el await, la linea que sigue se va a ejecutar solo cuando la persona aprete el ok
        //redirigir a la otra seccion de la pagina
        window.location.href = "ver_consolas";
    }else{
        Swal.fire({
            title:"Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    };

}); 