<?php
$nombreDias[1]="Lunes";
$nombreDias[2]="Martes";
$nombreDias[3]="Miercoles";
$nombreDias[4]="Jueves";
$nombreDias[5]="Viernes";
$nombreDias[6]="Sábado";
$nombreDias[7]="Domingo";

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
            "horario": []
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient">
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
                    <!-- Handling Messages Form Session -->
                    
                    <!--END of Handling Messages Form Session -->
                    <div class="card rounded-0 shadow">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="card-title col-auto flex-shrink-1 flex-grow-1">CRUD PHP con datos en JSON</div>
                                <div class="col-atuo">
                                    <a class="btn btn-danger btn-sm btn-flat" href="member_form.php"><i class="fa fa-plus-square"></i> Agregar horario</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body text-center">
                        <div class="container-fluid">
                                
                                    
                                                                           
                                      
                            <?php
                                        $data = json_decode($json_data);
                                        $horariosRegulares = $data->horarios;
                                        foreach ($horariosRegulares as $horarios){?> 
                                        <table class="table table-stripped table-bordered ">
                                        <tr>
                                           <th class="text-center">Desde</th>
                                           <th class="text-center">Hasta</th>  
                                       </tr>
                                       
                                            
                                        <?php $dia = $horarios ->dia;?>
                                        <?php $horariosDia = $horarios-> horario;?>
                                           <h3 class="text-center table table-stripped table-bordered bg-secondary  bg-gradient "><?php echo  $nombreDias[$dia] ?>
                                        </h3>
                                        <?php foreach ($horariosDia as $key =>$value){ ?>
                                            <tr>
                                                
                                                                                        
                                                <td><?= $desde = $value->desde;?></td>
                                                <td><?= $hasta = $value->hasta;?></td>
                                                <td class="text-center">
                                                    <a href="member_form.php?id=<?= $desde = $value->desde , $hasta = $value->hasta;  ?>" class="btn btn-sm btn-outline-info rounded-0">
                                                        <i class="fa-solid fa-edit"></i>
                                                    </a>
                                                    <a href="delete_data.php?id=<?= $desde = $value->desde , $hasta = $value->hasta; ?>" class="btn btn-sm btn-outline-danger rounded-0"
                                                     onclick="if(confirm(`¿Deseas eliminar el horario de <?= $desde = $value->desde ,' a ' , $hasta = $value->hasta; ?>?`) === false) 
                                                     event.preventDefault();">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                        <?php }; ?>
                                        <?php }; ?> 
                            
                                        
                                    </thead>                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>