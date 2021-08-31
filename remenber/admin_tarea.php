<?php
session_start();

if(!(isset($_SESSION['usuario']))){
    header("location: login.php");
    session_destroy();
    die();
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/stilos_tarea.css">
        <title>Remenber me</title>
    </head>

    <body>

        <div class="contenedor">
            <a href="php/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesion</a>
            <h1>Remember me</h1>


            <div class="add-tarea">
                <form action="./php/add_tarea_db.php" method="POST">
                    <h2>Agregar lista de tareas</h2>
                    <div class="formulario">
                        <input type="text" name="titulo" id="title" class="title" placeholder="Titulo">
                        <input type="text" name="tarea" id="description" placeholder="Tarea por Realizar"></input>
                        <input type="date" name="date" id="today" class="date" placeholder="Fecha">
                    </div>
                    <button>Agregar Tarea </button>
                </form>
            </div>

            <div class="add-table">
                <table>
                    <thead class="thead">

                        <th>#</th>
                        <th class="title-text">Titulo</th>
                        <th>Tarea</th>
                        <th class="fecha-text">Fecha</th>
                        <th>acciones</th>

                    </thead>
                    <tbody id="cuerpo">
                        <!-- pintar tareas -->


                    </tbody>
                </table>
            </div>
        </div>
        <!--TEMPLATE MODAL UPDATE-->
        <template class="template-update">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Titulo</label>
              <input type="email" class="form-control" name="titulo" id="exampleFormControlInput1" placeholder="Titulo">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Tarea</label>
              <textarea class="form-control"name="tarea" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Fecha</label>
              <input type="email" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
            </div>
          </div>
          </div>
        </template>
        <!--END CODE-->


        <script src="./js/today/today.js"></script>
        <script src="./js/add_table/pintar_table.js"></script>
        <script src="./js/add_table/funcion_btn.js"></script>
    </body>

    </html>