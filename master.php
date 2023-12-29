<?php



class Master
{
    /**
     * Obtener todos los datos JSON
     */
    function get_all_data()
    {
        $json = json_decode(file_get_contents('data.json'));
        return $json;
    }

    /**
     * Obtener datos JSON únicos por día
     */
    function get_data_by_day($day = '')
    {
        $data = $this->get_all_data();

        if (!empty($day)) {
            foreach ($data->horarios as $horario) {
                if ($horario->dia == $day) {
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
        $day = $_POST['day'];
        $desde = addslashes($_POST['desde']);
        $hasta = addslashes($_POST['hasta']);

        $data = $this->get_all_data();
        $newHorario = (object) [
            "dia" => $day,
            "horario" => [
                [
                    "desde" => $desde,
                    "hasta" => $hasta
                ]
            ]
        ];

        // Verificar si ya existe un horario para este día
        $existingHorario = $this->get_data_by_day($day);

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
        $day = $_POST['day'];
        $desde = addslashes($_POST['desde']);
        $hasta = addslashes($_POST['hasta']);

        $data = $this->get_all_data();

        foreach ($data->horarios as $key => $horario) {
            if ($horario->dia == $day) {
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
    function delete_data($day = '')
    {
        if (empty($day)) {
            $resp['status'] = 'failed';
            $resp['error'] = 'El día dado está vacío.';
        } else {
            $data = $this->get_all_data();

            foreach ($data->horarios as $key => $horario) {
                if ($horario->dia == $day) {
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

