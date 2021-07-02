
const cargarMarcas = async()=>{
    //1.Buscar las marcas a la api
    let resultado = await axios.get("api/marcas/get");
    let marcas = resultado.data;

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
    let nombre = document.querySelector("#nombre-txt").value;
    let marca = document.querySelector("#marca-select").value;
    let anno = document.querySelector("#anno-txt").value;
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


}); 