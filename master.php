<?php



class Master
{
    /**
     * Obtener todos los datos JSON
     */
    function getData()
    {
       
        return  json_decode(file_get_contents(__DIR__.'$'));
    }

    /**
     * Obtener datos JSON únicos por día
     */
    function getDataByid($horarios)
    {
        $data = 'getData()';

        if (!empty($horarios)) {
            foreach ($data->horarios as $horario) {
                if ($horario->dia == $dia) {
                    return $horario;
                }
            }
        }

        return (object) [];
    }

    /**
     * Insertar datos en el archivo JSON
     */
    function insert_to_json()
    {
        $dia = $_POST['dia'];
        $desde = addslashes($_POST['desde']);
        $hasta = addslashes($_POST['hasta']);

        $data = $this->getData();
        $newHorario = (object) [
            "dia" => $dia,
            "horario" => [
                [
                    "desde" => $desde,
                    "hasta" => $hasta
                ]
            ]
        ];

        // Verificar si ya existe un horario para este día
        $existingHorario = $this->getDataByid($dia);

        if (!empty($existingHorario)) {
            // Actualizar horario existente
            $existingHorario->horario[] = [
                "desde" => $desde,
                "hasta" => $hasta
            ];
        } else {
            // Agregar nuevo horario
            $data->horarios[] = $newHorario;
        }

        $json = json_encode($data, JSON_PRETTY_PRINT);
        $insert = file_put_contents('data.json', $json);

        if ($insert) {
            $resp['status'] = 'success';
        } else {
            $resp['failed'] = 'failed';
        }

        return $resp;
    }

    /**
     * Actualizar datos del archivo JSON
     */
    function update_json_data()
    {
        $dia = $_POST['dia'];
        $desde = addslashes($_POST['desde']);
        $hasta = addslashes($_POST['hasta']);

        $data = $this->getData();

        foreach ($data->horarios as $key => $horario) {
            if ($horario->dia == $dia) {
                $data->horarios[$key]->horario[] = [
                    "desde" => $desde,
                    "hasta" => $hasta
                ];
                break;
            }
        }

        $json = json_encode($data, JSON_PRETTY_PRINT);
        $update = file_put_contents('data.json', $json);

        if ($update) {
            $resp['status'] = 'success';
        } else {
            $resp['failed'] = 'failed';
        }

        return $resp;
    }

    /**
     * Eliminar datos del archivo JSON
     */
    function delete_data($dia = '')
    {
        if (empty($dia)) {
            $resp['status'] = 'failed';
            $resp['error'] = 'El día dado está vacío.';
        } else {
            $data = $this->getData();

            foreach ($data->horarios as $key => $horario) {
                if ($horario->dia == $dia) {
                    unset($data->horarios[$key]);
                    $json = json_encode($data, JSON_PRETTY_PRINT);
                    $update = file_put_contents('data.json', $json);

                    if ($update) {
                        $resp['status'] = 'success';
                    } else {
                        $resp['failed'] = 'failed';
                    }

                    return $resp;
                }
            }

            $resp['status'] = 'failed';
            $resp['error'] = 'El día dado no existe en el archivo JSON.';
        }

        return $resp;
    }
}
?>

