<?php
if(isset($_POST["tarea"])){
 
    //conexion
     $con = new PDO("mysql:host=localhost;dbname=test","root","");
    //FORMA 1 
    // $con->query("insert into tareas VALUES('','"."$_POST[tarea]"."')");
    

    //FORMA 2   
    $query = $con->prepare("insert into tareas VALUES('',:tarea)");
    $query->bindParam(':tarea',$_POST["tarea"],PDO::PARAM_STR);
    if($query->execute()){
        echo "Exitosamente Agregado";
    }else{
        echo "Ocurrio un error";
    }

  
}

?> 
 
<br>
<hr>
<form method=post >
    Tarea<input type=text name=tarea id=tarea>
    <br>
    <input type=submit value=enviar>
</form>