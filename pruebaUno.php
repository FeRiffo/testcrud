<?php 


$json = '{
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

   
$data = json_decode($json);





$fechasEspeciales = $data->fechasEspeciales;

foreach ($fechasEspeciales as $fechaEspecial) {
    $fecha = $fechaEspecial-> fecha;
    $horariosDia = $fechaEspecial-> horario;
       


    foreach ($horariosDia as $key => $value) {
        $desde = $value->desde;
        $hasta = $value->hasta;

       

      
        
    }

}
    
    


// Verificar horarios regulares
$horariosRegulares = $data->horarios;


foreach ($horariosRegulares as $horarios) {
    $dia = $horarios-> dia;
    $horariosDia = $horarios-> horario;

    echo "<br> dia=$dia";

    



    foreach ($horariosDia as $key => $value) {
        $desde = $value->desde;
        $hasta = $value->hasta;

          echo "<br> --> desde=$desde,
           hasta = $hasta";
      
        
    }

}

