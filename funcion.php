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
       }
   ] }';
$data = json_decode($json);

// Obtener la fecha y hora actuales
$fechaHoraActual = date('2023-12-28 22:20:01');

// Verificar horarios regulares
$horariosRegulares = $data->horarios;
$horarioEncontrado = false;

foreach ($horariosRegulares as $horario) {
    $dia = $horario->dia;
    $horariosDia = $horario->horario;

    foreach ($horariosDia as $key => $value) {
        $desde = $value->desde;
        $hasta = $value->hasta;

        $horaInicio = strtotime("$dia $desde");
        $horaFin = strtotime("$dia $hasta");

        if (strtotime($fechaHoraActual) >= $horaInicio && strtotime($fechaHoraActual) <= $horaFin) {
            $horarioEncontrado = true;
            break;
        }
    }
}

// Verificar fechas especiales
$fechasEspeciales = $data->fechasEspeciales;

foreach ($fechasEspeciales as $fechaEspecial) {
    $fecha = $fechaEspecial->fecha;
    $horarios = $fechaEspecial->horario;

    foreach ($horarios as $key => $value) {
        $desde = $value->desde;
        $hasta = $value->hasta;

        $horaInicio = strtotime("$fecha $desde");
        $horaFin = strtotime("$fecha $hasta");

        if (strtotime($fechaHoraActual) >= $horaInicio && strtotime($fechaHoraActual) <= $horaFin) {
            $horarioEncontrado = true;
            break;
        }
    }
}

// Mostrar resultado
if ($horarioEncontrado) {
    echo "La fecha y hora actual está dentro del horario de atención.";
} else {
    echo "La fecha y hora actual está fuera del horario de atención.";
}

?>