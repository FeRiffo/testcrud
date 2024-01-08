<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingreso de Horario | PHP-JSON CRUD</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
        html,
        body {
            min-height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="./">PHP - JSON CRUD</a>
            <div>
    
            </div>
        </div>
    </nav>
    <div class="container px-5 my-3">
        <h2 class="text-center">Formulario de Ingreso de Fecha especial</h2>
        <div class="row">
            <!-- Contenedor de contenido de página -->
            <div class="col-lg-10 col-md-11 col-sm-12 mt-4 pt-4 mx-auto">
                <div class="container-fluid">
                    <!-- Sesión de formulario de manejo de mensajes -->
                    
                    <!--FIN de la Sesión del Formulario de Manejo de Mensajes -->

                    <div class="card rounded-0 shadow">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="card-title col-auto flex-shrink-1 flex-grow-1">CRUD PHP con datos en JSON</div>
                        
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <?php if (isset($data->id)) : ?>
                                    <p class="text-muted"><i>Actualizar los detalles de <b><?= isset($data->name) ? $data->name : '' ?></b></i></p>
                                <?php else : ?>
                                    <p class="text-muted"><i>Agregar Nueva Fecha especial</b></i></p>
                                <?php endif; ?>
                                <form id="member-form" action="" method="POST">
                                    <input type="hidden" name="id" value="<?= isset($data->id) ? $data->id : '' ?>">
                                    <div class="mb-3">
                                        <label for="dia" class="form-label">Fecha</label>
                                        <input type="text" class="form-control rounded-0" id="dia" name="dia" required="required" value="<?= isset($data->dia) ? $data->dia : '' ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="desde" class="form-label">Horario: Desde</label>
                                        <input type="text" class="form-control rounded-0" id="desde" name="desde" required="required" value="<?= isset($data->desde) ? $data->desde : '' ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="hasta" class="form-label">Horario: Hasta</label>
                                        <textarea  class="form-control rounded-0" id="hasta" name="hasta" required="required"><?= isset($data->hasta) ? $data->hasta : '' ?></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-danger rounded-0" form="member-form"> Guardar </button>
                            <a class="btn btn-light border rounded-0" href="index.php"><i class="fa-solid fa-times"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contenedor de contenido de fin de página -->
        </div>
    </div>
</body>

</html>