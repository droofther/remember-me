const tabla = document.getElementById('cuerpo');

/*METODO DE ENVIO DE DATOS A LA BD */
const optionMetodo = {
    method: "POST"
}


/* TRAER LOS DATOS JSON Y CONVERTIRLO EN STRING */
fetch('php/pintar_table_db.php', optionMetodo)
    .then(repuesta => repuesta.json())
    .then(resultado => {
        let i = 0

        resultado.forEach(element => {
            i++
            tabla.innerHTML += `
    <tr>
         <td>${i}</td>
         <td >${element.titulo}</td>
          <td>${element.tarea}</td>
          <td>${element.fecha}</td>
          <td><button  class ="btn btn-update">Update</button> <button class ="btn btn-delete">Delete</button></td>
    </tr>
`;

        });
    });