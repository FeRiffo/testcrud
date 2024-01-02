<?php 


$json = '{ "horarios": [{ "dia":"1", "horario":[ {"desde":"10:00", "hasta":"20:00"}] }, { "dia":"2", "horario":[ {"desde":"10:00", "hasta":"20:00"}] }, { "dia":"3", "horario":[
    {"desde":"10:00", "hasta":"20:00"}] }, { "dia":"4", "horario":[ {"desde":"10:00", "hasta":"20:00"}] }, { "dia":"5", "horario":[ {"desde":"10:00", "hasta":"20:00"}] },
     { "dia":"6", "horario":[ {"desde":"10:00", "hasta":"20:00"}] }, { "dia":"7", "horario":[ {"desde":"10:00", "hasta":"19:00"}] }],    "fechasEspeciales": [
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
       },
       {
        "fecha": "Lunes",
        "horario": [{
            "desde": "12:00",
            "hasta": "17:00"
        }]
    }
   ] }';

   
$data = json_decode($json);


// Obtener la fecha y hora actuales
$horarioEncontrado = false ;
$fechaHoraActual = date('2023-12-24 12:20:01');
$fechaHoraActual = strtotime($fechaHoraActual);
$diaActual = date("N", $fechaHoraActual);
$horaActual = date("H:i",$fechaHoraActual);
$fechaActual= date("Y-m-d",$fechaHoraActual);

$fechasEspeciales = $data->fechasEspeciales;

foreach ($fechasEspeciales as $fechaEspecial) {
    $fecha = $fechaEspecial-> fecha;
    $horariosDia = $fechaEspecial-> horario;
    
if ($fechaActual == $fecha ) {
    $fechaE= "si";


    foreach ($horariosDia as $key => $value) {
        $desde = $value->desde;
        $hasta = $value->hasta;

        if ($horaActual >= $desde and $horaActual< $hasta) {
            $horarioEncontrado = true ;

          

        }


      
        
    }

}
    
    }
if ($fechaE == "") {
    # code...

// Verificar horarios regulares
$horariosRegulares = $data->horarios;


foreach ($horariosRegulares as $horarios) {
    $dia = $horarios-> dia;
    $horariosDia = $horarios-> horario;
    
if ($diaActual == $dia) {
    # code...


    foreach ($horariosDia as $key => $value) {
        $desde = $value->desde;
        $hasta = $value->hasta;

        if ($horaActual >= $desde and $horaActual< $hasta) {
            $horarioEncontrado = true ;

            echo "desde=$desde, hasta= $hasta, horaActual=$horaActual ";

        }


      
        
    }

}
}
}

if ($horarioEncontrado) {
    echo "La fecha y hora actual está dentro del horario de atención.";
} else {
    echo "La fecha y hora actual está fuera del horario de atención.";
}

