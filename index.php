<?php
$nombreDias[1] = "Lunes";
$nombreDias[2] = "Martes";
$nombreDias[3] = "Miercoles";
$nombreDias[4] = "Jueves";
$nombreDias[5] = "Viernes";
$nombreDias[6] = "Sábado";
$nombreDias[7] = "Domingo";
$fechaE[2023 - 12 - 24] = "2023-12-24";
$fechaE[2023 - 12 - 25] = "2023-12-25";
$fechaE[2024 - 01 - 01] = "2024-01-01";


$json_data = '{
    "horarios": [
        {
            "dia": "1",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        },
        {
            "dia": "2",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        },
        {
            "dia": "3",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        },
        {
            "dia": "4",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        },
        {
            "dia": "5",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        },
        {
            "dia": "6",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        },
        {
            "dia": "7",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                },
                {
                    "desde": "10:00",
                    "hasta": "20:00"
                }
            ]
        }
    ],
    "fechasEspeciales": [
        {
            "fecha": "2023-12-24",
            "horario": [
                {
                    "desde": "10:00",
                    "hasta": "19:00"
                }
            ]
        },
        {
            "fecha": "2023-12-25",
            "horario": [  {
                "desde": "10:00",
                "hasta": "20:00"
            }]
        },
        {
            "fecha": "2024-01-01",
            "horario": [{
                "desde": "12:00",
                "hasta": "19:00"
            }]
        }
    ]
}';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP con datos en JSON</title>

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
            <a class="navbar-brand" href="./">CRUD PHP con datos en JSON</a>
            <div>

            </div>
        </div>
    </nav>
    <div class="container px-5 my-3">
        <h2 class="text-center">Creación, lectura, actualización y eliminación de datos JSON en PHP</h2>
        <div class="row">
            <!-- Page Content Container -->
            <div class="col-lg-10 col-md-11 col-sm-12 mt-4 pt-4 mx-auto">
                <div class="container-fluid">


                    <!--END of Handling Messages Form Session -->
                    <div class="card rounded-0 shadow">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="card-title col-auto flex-shrink-1 flex-grow-1">CRUD PHP con datos en JSON</div>

                            </div>
                        </div>

                        <form  class="row g-3" action="mostrar.php" method="POST" onsubmit="guardarDatos()">
                            <div class="container-fluid">

                                <!-- Horarios Regulares -->
                                <div class="card-body text-center">
                                    <h3 class=""> Horarios Regulares </h3>
                                    <?php
                                    $data = json_decode($json_data);
                                    $horariosRegulares = $data->horarios;
                                    //echo $horariosRegulares;
                                    $count = 0;
                                    $count2 = 0;
                                    foreach ($horariosRegulares as $horarios) {
                                        $count++;
                                        //echo $count;
                                    ?>

                                        <table class="table table-stripped table-bordered ">
                                            <tr>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                            </tr>

                                            <?php $dia = $horarios->dia; ?>
                                            <?php $horariosDia = $horarios->horario; ?>
                                            <input type="text" value="<?= $nombreDias[$dia] ?>" name="dia<?= $count ?>" hidden>
                                            <h3 class="text-center table table-stripped table-bordered bg-danger text-light bg-gradient "><?php echo $nombreDias[$dia] ?>
                                            
                                            
                                            </h3>
                                            <?php foreach ($horariosDia as $key => $value) {

                                                $count2++;
                                            ?>

                                                <tr id="column<?= $count2 ?>">

                                                    <td>

                                                        <input id="<?=$nombreDias[$dia]?>desde<?= $count2 ?>" name="desde<?= $count2 ?>" 
                                                        type="text" class="form-control rounded-0" required="required" 
                                                        value="<?= $desde = $value->desde;?>"
                                                         onchange="cambiar('desde<?= $count2 ?>')">
                                                    </td>
                                                    <td>

                                                        <input id="<?=$nombreDias[$dia]?>hasta<?= $count2 ?>" name="hasta<?= $count2 ?>"
                                                         type="text" class="form-control rounded-0" required="required" 
                                                         value="<?= $hasta = $value->hasta; ?>" 
                                                         onchange="cambiar('hasta<?= $count2 ?>')">



                                                    <td class="text-center">

                                                        </a>
                                                        <a id="deleteHorario<?=  $count2?>" 
                                                        class="btn btn-sm btn-outline-danger rounded-0" 
                                                        onclick="elimina('deleteHorario<?= $count2?>')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                        <a id="addHorario<?= $count2 ?>" 
                                            class="btn btn-sm btn-outline-danger rounded-0 "
                                                 onclick="agregar('addHorario<?= $count2?>')">
                                                                <i class='far fa-plus-square'
                                                                 style='font-size:20px;color:black'></i>
                                                            </a>

                                                    </td>
                                                </tr>

                                            <?php }; ?>
                                        <?php }; ?>



                                </div>


                                <!-- Fechas Especiales -->
                                <div class="card-body text-center">
                                <h3>Fechas Especiales
                                        <a id="addFechaE" class="btn btn-danger btn-sm btn-flat" href="form.php"><i class="fa fa-plus-square"></i> Agregar Fecha Especial</a>
                                        
                                    </h3>
                                
                                    <?php

                                    $data = json_decode($json_data);

                                    $fechasEspeciales = $data->fechasEspeciales;

                                    $count = 0;
                                    $count3 = 0;

                                    foreach ($fechasEspeciales as $fechaEspecial) {
                                        $count++;
                                        //echo $count; 
                                    ?>
                                        
                                        <table class="table table-stripped table-bordered ">
                                        
                                            
                                            <tr>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>

                                            </tr>



                                            <?php $fecha = $fechaEspecial->fecha; ?>
                                            <?php $horariosDia = $fechaEspecial->horario; ?>
                                            <input type="text" value="<?= $fechaE = "$fecha" ?>" name="fecha<?= $count ?>" hidden>
                                            <h3 class="text-center table table-stripped table-bordered bg-danger text-light bg-gradient "><?php echo  $fechaE = "$fecha" ?>
                                            
                                            <a id="addHorario<?= $count2 ?>" href="addHorario.php" class="btn btn-sm btn-outline-danger rounded-0 "
                                                 onclick="agregar('addHorario<?= $count2?>')">
                                                                <i class='far fa-plus-square' style='font-size:20px;color:black'></i>
                                                            </a>

                                            </h3>

                                            <?php foreach ($horariosDia as $key => $value) {
                                                $count3++;
                                            ?>

                                                <tr id="column<?= $count3 ?>">

                                                    <td>

                                                        <input id="desde<?= $count3 ?>" name="desde<?= $count3 ?>" type="text" class="form-control rounded-0" required="required" value="<?= $desde = $value->desde; ?>" onchange="cambiar('desde<?= $count3 ?>')">
                                                    </td>
                                                    <td>

                                                        <input id="hasta<?= $count3 ?>" name="hasta<?= $count3 ?>" type="text" class="form-control rounded-0" required="required" value="<?= $hasta = $value->hasta; ?>" onchange="cambiar('hasta<?= $count3 ?>')">

                                                    <td class="text-center">

                                                    <a id="deleteHorario<?= $count3?>" 
                                                        class="btn btn-sm btn-outline-danger rounded-0" 
                                                        onclick="elimina('deleteHorario<?= $count3?>')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>

                                                    </td>

                                                </tr>


                                            <?php }; ?>
                                        <?php }; ?>

                                </div>








                            </div>
                            <input  type="submit" value="Guardar" class="btn btn-danger rounded-0" />     


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>