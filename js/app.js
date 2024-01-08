const cambiar=(id)=>{
    let valor = document.querySelector("#"+id).value;
    alert(valor);
}

function elimina(id) {
    if (id=="deleteHorario1") {
        document.querySelector("#column1").innerHTML="";
    }else if (id=="deleteHorario2") {
        document.querySelector("#column2").innerHTML="";
    }else if (id=="deleteHorario3") {
        document.querySelector("#column3").innerHTML="";
    }
    
}


let bloqueInput=`  <tr id="column">

<td>

    <input id="desde" name="desde" 
    type="text" class="form-control rounded-0" required="required" 
    value=""
     onchange="cambiar('desde')">
</td>
<td>

    <input id="hasta" name="hasta"
     type="text" class="form-control rounded-0" required="required" 
     value="" 
     onchange="cambiar('hasta')">



<td class="text-center">

    </a>
    <a id="deleteHorario" 
    class="btn btn-sm btn-outline-danger rounded-0" 
    onclick="elimina('deleteHorario')">
        <i class="fa-solid fa-trash"></i>
    </a>
</td>
</tr>`;

function agregar(id) {
    console.log(id)
    /*if (id=="addHorario1") {
        document.querySelector("#column1").innerHTML="";
    }else if (id=="addHorario1") {
        document.querySelector("#column2").innerHTML="";
    }else if (id=="addHorario3") {
        document.querySelector("#column3").innerHTML="";
    }*/
    
}