const cuerpo = document.getElementById('cuerpo');
const btn_update = document.getElementById('btn-update');
const template_update = document.querySelector('.template-update').content;




cuerpo.addEventListener('click', update => {
    if (update.target.classList.contains('btn-update')) {
        let select = update.target.classList.contains('btn-update');
        select.forEach(select_update => {
            console.log(select_update);
        })
    }
});



// /*METODO DE ENVIO DE DATOS A LA BD */
// const optionMetodo = {
//     method: "POST"
// }


// /* TRAER LOS DATOS JSON Y CONVERTIRLO EN STRING */
// fetch('php/sql_function.php', optionMetodo)
//     .then(repuesta => repuesta.json())
//     .then(resultado => {
//         let i = 0

//         resultado.forEach(element => {
//             i++
//             tabla.innerHTML += `
//         <tr>
//              <td>${i}</td>
//              <td >${element.titulo}</td>
//               <td>${element.tarea}</td>
//               <td>${element.fecha}</td>
//               <td><button  class ="btn btn-update">Update</button> <button class ="btn btn-delete">Delete</button></td>
//         </tr>
//     `;

//         });
//     });





// /*MODAL BOOSTRAP */
// innertHTML = `<div class="modal-body">
//     <div class="container-fluid">
//       <div class="row">
//         <div class="col-md-4">.col-md-4</div>
//         <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
//       </div>
//       <div class="row">
//         <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
//         <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
//       </div>
//       <div class="row">
//         <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
//       </div>
//       <div class="row">
//         <div class="col-sm-9">
//           Level 1: .col-sm-9
//           <div class="row">
//             <div class="col-8 col-sm-6">
//               Level 2: .col-8 .col-sm-6
//             </div>
//             <div class="col-4 col-sm-6">
//               Level 2: .col-4 .col-sm-6
//             </div>
//           </div>
//         </div>
//       </div>
//     </div>
//     </div>`