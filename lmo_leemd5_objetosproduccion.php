<?php
session_start(); // Initialize Session data
ob_start(); // Turn on output buffering
define("EW_DEFAULT_LOCALE", "es-pe", TRUE);
@setlocale(LC_ALL, EW_DEFAULT_LOCALE);


include_once "lmo_ewcfg10.php";
include_once "lmo_ewmysql10.php";
include_once "lmo_phpfn10.php";

set_time_limit(0);

//include_once "validaciones.php";


//$ruta = $_FILES['archivo']['tmp_name'];

//$g_host= "90.0.0.147";
$g_host= "localhost";
$g_user= "produccion";
$g_clave= "produccion";
$g_bd= "documentacion";

global $Conexion;

		//$conexion = mysql_connect($g_host,$g_user,$g_clave);
		//mysql_select_db($g_bd, $conexion);
							
		//$cadena = "TRUNCATE pp_md5_objetos_produccion" ;
		//$res = mysql_query($cadena, $conexion) or die(mysql_error()); 
		//mysql_close($conexion);

	$Conexion = new mysqli($g_host,$g_user,$g_clave,$g_bd);
 	if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
	}



	$cadena = "TRUNCATE pp_md5_objetos_produccion" ;
	$RefCAllSp = $Conexion->prepare($cadena);
  $RefCAllSp->execute();
  //$RefCAllSp->close();  
  
  	
//#####################  SAI EFE ####################################
//$ruta = "D:/pases/acoronel/efedba/monitoreo/md5_app_tbase.txt";
$ruta= './objproduccion/tbase_efe_monterricoifx/md5_app_tbase.txt';
$idsistema= 2; //efe
$nomzip= './objproduccion/md5_tbase_monterricoifx.efe.pe.zip';
$descomprimidos= './objproduccion/tbase_efe_monterricoifx';
Descomprimir($nomzip, $descomprimidos);
Proceso_Importar_Incidencias($ruta, $idsistema);

	if (Proceso_Importar_Incidencias($ruta, $idsistema) == 1)
	{
  	  echo "<br>Importacion de Objetos del Sistema SAI EFE correcta";
	}
	else
  {	
	  //	echo "<script> alert('Operacion Cancelada, archivo incorrecto'); </script>";
	  echo "<br>Importacion de Objetos del Sistema SAI EFE FALLO";
	}


				
//#####################  S F I ####################################				
$ruta= './objproduccion/tbsfi_monterricoifx/md5_app_bexe.txt';
$idsistema= 3; //sfi
$nomzip= './objproduccion/md5_bexe_monterricoifx.efe.pe.zip';
$descomprimidos= './objproduccion/tbsfi_monterricoifx';
Descomprimir($nomzip, $descomprimidos);
Proceso_Importar_Incidencias($ruta, $idsistema);

	if (Proceso_Importar_Incidencias($ruta, $idsistema) == 1)
	{
  	  echo "<br>Importacion de Objetos del Sistema SFI Correcta";
	}
	else
  {	
	  //	echo "<script> alert('Operacion Cancelada, archivo incorrecto'); </script>";
	  echo "<br>Importacion de Objetos del Sistema SFI FALLO";
	}

//#####################  S A I   5 0 0 ####################################				
$ruta = "./objproduccion/tbsai_monterricoifx/md5_app_tbsai.txt";
$idsistema= 257; //sai 500
$nomzip= './objproduccion/md5_tbsai_monterricoifx.efe.pe.zip';
$descomprimidos= './objproduccion/tbsai_monterricoifx';
Descomprimir($nomzip, $descomprimidos);
Proceso_Importar_Incidencias($ruta, $idsistema);

	if (Proceso_Importar_Incidencias($ruta, $idsistema) == 1)
	{
  	  echo "<br>Importacion de Objetos del Sistema SAI 500 Correcta";
	}
	else
  {	
	  //	echo "<script> alert('Operacion Cancelada, archivo incorrecto'); </script>";
	  echo "<br>Importacion de Objetos del Sistema SAI 500 FALLO";
	}
	

  // PA que registra en la tabla historico de cambios , solo los cambios
  // luego debe registrar en la tabla de diferencias los cambios que no estan en el registro de los pases de la pagina
  // y tambien registrar en la tabla de diferencia los objetos de los pases que no estan en los cambios.

	$RefCAllSp = $Conexion->prepare("CALL pp_pa_md5_objprod_historico");
  $RefCAllSp->execute();
  $RefCAllSp->close();  
      



$query= "select distinct pp_md5_objprodpag_diff.idpase AS idpase,
	pp_md5_objprodpag_diff.objeto AS objeto,
	cast(pp_md5_objprodpag_diff.fechaproceso as date) AS fechaProceso,
	pp_md5_objprodpag_diff.valor_md5 AS valor_md5,
	pp_servicio.Servicio AS Sistema 
from (pp_md5_objprodpag_diff join pp_servicio on((pp_servicio.IdServicio = pp_md5_objprodpag_diff.idsistema))) 
where (cast(pp_md5_objprodpag_diff.fechaproceso as date) = cast((cast(now() as date) - 1) as date))
ORDER BY 3,5";


if ($resultado = $Conexion->query($query)) {

    /* obtener el array de objetos */
    
    $Objetos= "/ Fecha  / Sistema / objeto / Idpase / md5 \n";
    while ($fila = $resultado->fetch_row()) {
        //printf ("%s (%s)\n", $fila[0], $fila[1]);
        
    		$idpase     = $fila[0];
				$objeto     = $fila[1];
				$fechaProceso     = $fila[2];
				$valor_md5     = $fila[3];
				$Sistema     = $fila[4];

				
				$Objetos =  $Objetos. $fechaProceso ." / ". $Sistema ." / ". $objeto ." / ". $idpase  ." / ".  $valor_md5  . "\n";	  					  		
	  		        
    }

		echo $Objetos;
    /* liberar el conjunto de resultados */
    $resultado->close();
}



Enviar_Correo($Objetos);	
//$RefCAllSp->close();
$Conexion->close();









function Descomprimir($nomzip, $descomprimidos){
				//$nomzip= '201411131520_luda.zip';
				//$rutazip= '/produccion/var/www/html/produccion/objproduccion/';     
				//$descomprimidos= '/produccion/var/www/html/produccion/objproduccion/descomprimidos/';
				//mkdir($direc_descomprimir, 0700);        
				$zip = new ZipArchive;
				if ($zip->open($nomzip) === TRUE) {
					$zip->extractTo($descomprimidos);
					$zip->close();
					echo 'ok';
				} else {
					echo 'failed';
				}

}
				

function Proceso_Importar_Incidencias($ruta, $idsistema){
	

  	
		//$Conexion = new mysqli("localhost", "produccion", "produccion", "documentacion");
 		//if (mysqli_connect_errno()) {
	  //  printf("Conexión fallida: %s\n", mysqli_connect_error());
    //	exit();
		//}
			//global $conn;
			

		
	//$conexion = mysql_connect($GLOBALS['g_host'], $GLOBALS['g_user'], $GLOBALS['g_clave']);
	//mysql_select_db($GLOBALS['g_bd'], $conexion);
		
	//$Conexion = new mysqli($GLOBALS['g_host'], $GLOBALS['g_user'], $GLOBALS['g_clave'],$GLOBALS['g_bd']);
 	//if (mysqli_connect_errno()) {
  //  printf("Conexión fallida: %s\n", mysqli_connect_error());
  //  exit();
	//}

			 		
 		$contenido = file_get_contents($ruta);
    $lineas = explode("\n",$contenido);
    //$Conexion->BeginTrans();
    $i   = 0;
    $cnt = -1;
    $sw  = 0;
    
 		    
    foreach ($lineas as $linea)
    {		$i = $i + 1 ;
    	
    		//echo "<br> linea #" . $i . ": " . $linea;
    	 
       $campos = explode(" ", $linea);
       
       //echo "<br> linea #" . $i . ": " . $campos[0]." - ".$campos[2]." - ".$campos[3]." - ".$campos[4]." - ".$campos[5]." - ".$campos[6]." - ".$campos[7];
             
       if (strlen(trim($campos[0])) > 0) 
       {
					$objeto= "inicializando";
					$valor_md5= "inicializando";
					$objeto= "inicializando";
					$dia= "inicializando";
					$mes= "inicializando";
					$anio= "inicializando";
					$usuario_objeto= "inicializando";
					$grupo_objeto= "inicializando";
				
					$valor_md5= $campos[0];
					$objeto= $campos[2];
					$dia= $campos[3];
					$mes= $campos[4];
					$anio= $campos[5];
					$usuario_objeto= $campos[6];
					$grupo_objeto= $campos[7];					
					$llave_concat1= $idsistema ."#". $objeto ."#". $valor_md5;
					$llave_concat2= $idsistema ."#". $objeto;
					
       		$cadena = "INSERT INTO pp_md5_objetos_produccion(llave_concat1, llave_concat2,linea_fichero,fechaproceso,valor_md5,objeto,dia,mes,anio,usuario_objeto,grupo_objeto,idsistema) 
       					VALUES ('".$llave_concat1."','".$llave_concat2."','".$i."',now(), '".$valor_md5."', '".$objeto."','".$dia."','".$mes."','".$anio."','".$usuario_objeto."','".$grupo_objeto."', $idsistema)" ;
			 		//$res = mysql_query($cadena, $conexion) or die(mysql_error()); 

					$RefCAllSp = $GLOBALS['Conexion']->prepare($cadena);
  				$RefCAllSp->execute();
  				$sw = 1;

			 }
       
     }
     //mysql_close($conexion);
     //$RefCAllSp->close();  
    //$Conexion->CommitTrans();    
		
		return $sw;

}





function Enviar_Correo($Objetos){
					$sFn = "phptxt/control_objetos.txt";					
					$sSubject = "Alertas Cambios de Objetos Producción";
												
					// Get key value
					$ReplaceRecipient= "seguridadsistemas@efectiva.com.pe; operadoressistemas@efectiva.com.pe";					
					//$ReplaceRecipient= "lmerino@efectiva.com.pe";					
					$AddCc= "controlcalidad@efectiva.com.pe";
					//$AddCc= "lmerino@efectiva.com.pe";
					
					$Email = new cEmail();
					$Email->Load($sFn);
					$Email->ReplaceSender("sistemas@efectiva.com.pe"); // Replace Sender
					$Email->ReplaceRecipient($ReplaceRecipient); // Replace Recipient
					$Email->AddCc($AddCc); // Replace Recipient
					
					$Email->ReplaceSubject($sSubject); // Replace Subject
					$Email->ReplaceContent("<!--objetos-->", $Objetos);
					//$Email->ReplaceContent("<!--sai500-->", $sai500);
					//$Email->ReplaceContent("<!--sai-->", $sai);

															
					$Email->Charset = EW_EMAIL_CHARSET;
					$bEmailSent = FALSE;
					$bEmailSent = $Email->Send();
					
					echo "<br>Se envio el correo correctamente:  " . $sSubject ;	
	
}	




?>

