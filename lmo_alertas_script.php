
<?php

//require_once "/produccion/var/www/html/produccion/lmo_ewcfg10.php";
//require_once "/produccion/var/www/html/produccion/lmo_ewmysql10.php";
//require_once "/produccion/var/www/html/produccion/lmo_phpfn10.php";


include_once "lmo_ewcfg10.php";
include_once "lmo_ewmysql10.php";
include_once "lmo_phpfn10.php";



set_time_limit(1000);



//conectar BD
//ejecuta procedimientos almancenados
//tarea correos
//Enviar correos

/*
///Empezamos con el procedimiento de recuperación de una fila
//Lo primero es crear un objeto mysqli
$mysqli = new mysqli("localhost", "produccion", "produccion", "documentacion");

/// comprobar conexión 
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}
 
 
//Y llamamos al procedimiento para recoger los datos
///Si falla imprimimos el error
if (!$mysqli->multi_query("CALL pp_pa_alertas_correos(1)")) {
    echo "Falló la llamada: (" . $mysqli->errno . ") " . $mysqli->error;
}
 
///Ahora con este bucle recogemos los resultados y los recorremos
do {
    //En el if recogemos una fila de la tabla
    if ($res = $mysqli->store_result()) {
        //Imprimimos el resultado de la fila y debajo un salto de línea
        var_dump($res->fetch_all());
        printf("\n");
        //La llamada a free() no es obligatoria, pero si recomendable para aligerar memoria y 
        //para evitar problemas si después hacemos una llamada a otro procedimiento
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());
//El bucle se ejecuta mientras haya más resultados y se pueda saltar al siguiente


*/

$Conexion = new mysqli("localhost", "produccion", "produccion", "documentacion");
 if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}


	$RefCAllSp = $Conexion->prepare("CALL pp_pa_alertas_marcar");
  $RefCAllSp->execute();
  $RefCAllSp->close();  

			  $RefCAllSp = $Conexion->prepare("CALL pp_pa_alertas_correos");			  
			  //$RefCAllSp->bind_param('i', $cod);				
				//$cod= 2;			  								
			  $RefCAllSp->execute();			  
			  $RefCAllSp->bind_result($id_tarea,$id_alerta,$fecha_tarea,$idusuario,$idarea,$idempresa,$correos,$diax,$fecha2,$empresa,$Area,$Nombre,$descripcion, $Correo, $tipoalerta, $IdSolDesarrollo, $Titulo, $descripcion1, $index_desc, $responsables);
			  
			    
			    
  
			  while ($RefCAllSp->fetch()) {
			  	echo "$id_tarea,$id_alerta,$fecha_tarea,$idusuario,$idarea,$idempresa,$correos,$diax,$fecha2,$empresa,$Area,$Nombre,$descripcion, $Correo, $tipoalerta, $IdSolDesarrollo, $Titulo, $descripcion1, $index_desc, $responsables";
			  	$alerta = $id_alerta . "," . $descripcion;	  	
					$sFn = "phptxt/alertatareas.txt";					
					//if ($tipoalerta == 1)
					//{
					//	$sSubject = "Alerta Temprana ";
					//}
					//elseif ($tipoalerta == 2)
					//{
					//	$sSubject = "Alerta Tardia ";
					//}
					
					//$sSubject = $sSubject . $alerta . " -   Tarea: " . $id_tarea;		
					
					
					$sSubject = "Monitor Online - Alerta: " . $alerta;
					$reque = $IdSolDesarrollo . " - " . $Titulo;
							
					// Get key value
					$destino= "operadoressistemas@efectiva.com.pe;lmerino@efectiva.com.pe" . $Correo;
					//$destino= "lmerino@efectiva.com.pe;" . $Correo;
					
					$Email = new cEmail();
					$Email->Load($sFn);
					$Email->ReplaceSender("sistemas@efectiva.com.pe"); // Replace Sender
					$Email->ReplaceRecipient($destino); // Replace Recipient
					$Email->AddCc($correos); // Replace Recipient
					
					$Email->ReplaceSubject($sSubject); // Replace Subject
					$Email->ReplaceContent("<!--alerta-->", $alerta);
					$Email->ReplaceContent("<!--reque-->", $reque);
					$Email->ReplaceContent("<!--periodo-->", $descripcion1);
					$Email->ReplaceContent("<!--detperiodo-->", $index_desc);
					
					//falta llenar la variable responsables
					$Email->ReplaceContent("<!--responsables-->", $responsables);											
				
					
					//$Email->ReplaceContent("<!--key-->", $id_tarea);
					//$Email->ReplaceContent("<!--fecha-->", $fecha_tarea);
					//$Email->ReplaceContent("<!--usuario-->", $Nombre);
					//$Email->ReplaceContent("<!--empresa-->", $empresa);
					//$Email->ReplaceContent("<!--area-->", $Area);						
					//$Email->ReplaceContent("<!--dias-->", $diax);																	
															
					$Email->Charset = EW_EMAIL_CHARSET;
					$bEmailSent = FALSE;
					$bEmailSent = $Email->Send();
					
					echo "<br>Se envio el correo correctamente:  " . $sSubject ;
							
			  } //end while
			  $RefCAllSp->close();

	$Conexion->close();
?>