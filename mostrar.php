<?php

    // if ($_POST["desde"]!=""){
    //     $desde=$_POST["desde"];
    //     $hasta=$_POST["hasta"];
    // }else{
    //     echo "no hay nada";
    // };

    // $json = '{
    //     "horarios": [
    //         {
    //             "dia": "1",
    //             "horario": [
    //                 {
    //                     "desde":" 10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "dia": "2",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "dia": "3",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "dia": "4",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "dia": "5",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "dia": "6",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "dia": "7",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 },
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "20:00"
    //                 }
    //             ]
    //         }
    //     ],
    //     "fechasEspeciales": [
    //         {
    //             "fecha": "2023-12-24",
    //             "horario": [
    //                 {
    //                     "desde": "10:00",
    //                     "hasta": "19:00"
    //                 }
    //             ]
    //         },
    //         {
    //             "fecha": "2023-12-25",
    //             "horario": []
    //         }
    //     ]
    // }';
    
       
    // $data = json_decode($json);
    
    
    
    
    
    // $fechasEspeciales = $data->fechasEspeciales;
    
    // foreach ($fechasEspeciales as $fechaEspecial) {
    //     $fecha = $fechaEspecial-> fecha;
    //     $horariosDia = $fechaEspecial-> horario;
           
    
    
    //     foreach ($horariosDia as $key => $value) {
    //         $desde = $value->desde;
    //         $hasta = $value->hasta;
    
           
    
          
            
    //     }
    
    // }
        
        
    
    
    // // Verificar horarios regulares
    // $horariosRegulares = $data->horarios;
    
    
    // foreach ($horariosRegulares as $horarios) {
    //     $dia = $horarios-> dia;
    //     $horariosDia = $horarios-> horario;
    
    //     echo "<br> dia=$dia";
    
        
    
    
    
    //     foreach ($horariosDia as $key => $value) {
    //          $desde = $value->desde;
    //         $hasta = $value->hasta;
    
    //           echo "<br> --><input type='text' value='$desde' onchange='alert(this.value)'/>,
    //            hasta = $hasta";
          
            
    //     }
    
    // }
//     $dia=addslashes($_POST['Lunes']);
//    echo $dia;
//    $dia=addslashes($_POST['Domingo']);
//    echo $dia;
//    $variable=array("horarios"=>["dia"=>"1","horario"=>["desde"=>"10:00","hasta"=>"20:00"]]);
//    print_r(json_encode($variable));
 class CrearJson{
    
   var $horarios;
    var $fechasEspeciales;
  
    function __construct($horarios,$fechasEspeciales) {
        $this->horarios=$horarios;
        $this->fechasEspeciales=$fechasEspeciales;
       
    }
 }
// $miarray=array("horarios"=>array(["dia"=>"1","horario"=>array(["desde"=>$_POST["desde"],"hasta"=>$_POST["hasta"]])]));
$misHorarios= new CrearJson(
    array(
    ["dia"=>"1","horario"=>array(["desde"=>$_POST["Lunesdesde1"],"hasta"=>$_POST["Luneshasta1"]],["desde"=>$_POST["Lunesdesde2"],"hasta"=>$_POST["Luneshasta2"]],["desde"=>$_POST["Lunesdesde3"],"hasta"=>$_POST["hasta3"]])],
    ["dia"=>"2","horario"=>array(["desde"=>$_POST["Martesdesde4"],"hasta"=>$_POST["hasta4"]],["desde"=>$_POST["desde5"],"hasta"=>$_POST["hasta5"]],["desde"=>$_POST["desde6"],"hasta"=>$_POST["hasta6"]])],
    ["dia"=>"3","horario"=>array(["desde"=>$_POST["Miercolesdesde7"],"hasta"=>$_POST["hasta7"]],["desde"=>$_POST["desde8"],"hasta"=>$_POST["hasta8"]],["desde"=>$_POST["desde9"],"hasta"=>$_POST["hasta9"]])],
    ["dia"=>"4","horario"=>array(["desde"=>$_POST["Juevesdesde10"],"hasta"=>$_POST["hasta10"]],["desde"=>$_POST["desde11"],"hasta"=>$_POST["hasta11"]],["desde"=>$_POST["desde12"],"hasta"=>$_POST["hasta12"]])],
    ["dia"=>"5","horario"=>array(["desde"=>$_POST["desde13"],"hasta"=>$_POST["hasta13"]],["desde"=>$_POST["desde14"],"hasta"=>$_POST["hasta14"]],["desde"=>$_POST["desde15"],"hasta"=>$_POST["hasta15"]])],
    ["dia"=>"6","horario"=>array(["desde"=>$_POST["desde16"],"hasta"=>$_POST["hasta16"]],["desde"=>$_POST["desde17"],"hasta"=>$_POST["hasta17"]],["desde"=>$_POST["desde18"],"hasta"=>$_POST["hasta18"]])],
    ["dia"=>"7","horario"=>array(["desde"=>$_POST["desde19"],"hasta"=>$_POST["hasta19"]],["desde"=>$_POST["desde20"],"hasta"=>$_POST["hasta20"]],["desde"=>$_POST["desde21"],"hasta"=>$_POST["hasta21"]])],
    ),
    array(
        ["fecha"=>"2023-12-24","horario"=>array(["desde"=>$_POST["desde1"],"hasta"=>$_POST["hasta1"]],["desde"=>$_POST["desde2"],"hasta"=>$_POST["hasta2"]],["desde"=>$_POST["desde3"],"hasta"=>$_POST["hasta3"]])],
        ["fecha"=>"2023-12-25","horario"=>array(["desde"=>$_POST["desde4"],"hasta"=>$_POST["hasta4"]],["desde"=>$_POST["desde5"],"hasta"=>$_POST["hasta5"]],["desde"=>$_POST["desde6"],"hasta"=>$_POST["hasta6"]])],
        ["fecha"=>"2023-01-01","horario"=>array(["desde"=>$_POST["desde7"],"hasta"=>$_POST["hasta7"]],["desde"=>$_POST["desde8"],"hasta"=>$_POST["hasta8"]],["desde"=>$_POST["desde9"],"hasta"=>$_POST["hasta9"]])]
    
));


// print_r(json_encode($misHorarios));
// // $misHorarios->anadirHijo("fechasEspeciales",array(["fecha"=>"2023-12-24","horario"=>array(["desde"=>"10:00","hasta"=>"20:00"])]));
// echo "<br/>";


print_r(json_encode($misHorarios));
echo "<br/>";
// print_r(json_encode($miarray));

// echo $_POST["dia"];


//echo $_POST["dia1"];
//echo $_POST["desde1"];
//echo $_POST["dia2"];
//echo $_POST["dia3"];
//echo $_POST["dia4"];
//echo $_POST["dia5"];
//echo $_POST["dia6"];
//echo $_POST["dia7"];

//Delete



?>
<?php
$hoy = getdate();
$date="H: ".$hoy["hours"]."-".$hoy["minutes"]."-".$hoy["seconds"];
print_r($hoy);
print_r($date);

?>