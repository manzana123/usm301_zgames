
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

cargarMarcas();

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
    Swal.fire("1","2","info");



}); 