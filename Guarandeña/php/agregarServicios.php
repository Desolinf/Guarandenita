<?php
include("conexion.php");
error_reporting(E_ALL);
mysqli_set_charset($dbconn, "utf8");
$codigoLocal = $_POST['idLocal'];
$nombreServicio = $_POST['nombreServicio'];
$precioServicio=$_POST['precioServicio'];
$descripcionServicio=$_POST['descripcionServicio'];
$estadoServicio=$_POST['estadoServicio'];
$servicioNuevo=$_POST['servicioNuevo'];
$campo1=$_FILES['campo1']['name'];
$tamañoServicio=$_FILES['campo1']['size'];
$tamañoServicio1=$_FILES['campo2']['size'];
$tamañoServicio2=$_FILES['campo3']['size'];
$tamañoServicio3=$_FILES['campo4']['size'];
$tamañoServicio4=$_FILES['campo5']['size'];
$imagen=addslashes(file_get_contents($_FILES['campo1']['tmp_name'])
);
$imagen1=addslashes(file_get_contents($_FILES['campo2']['tmp_name'])
);
$imagen2=addslashes(file_get_contents($_FILES['campo3']['tmp_name'])
);
$imagen3=addslashes(file_get_contents($_FILES['campo4']['tmp_name'])
);
$imagen4=addslashes(file_get_contents($_FILES['campo5']['tmp_name'])
);
//********************Falta agregar el cod admin despues de haber iniciado sesion*******************************
$codAdmin=1;
$estado=1;
if (isset($campo1) && $campo1 != "") {
	if(($tamañoServicio <= 1000000) && ($tamañoServicio1 <= 1000000) && ($tamañoServicio2 <= 1000000) && ($tamañoServicio3 <= 1000000) &&($tamañoServicio4 <= 1000000)){
		/*$sql = "";
			if(mysqli_query($dbconn, $sql)){
				
				echo "<script>alert('Datos guardados'); window.location.href='index.php?p=editarLocales';</script>";
			}else{
				echo "Problemas en el servidor, intente nuevamente. Si el problema persiste contacte al administrador";
			}*/
			echo "Datos guardados";
	}
	else{
		echo "No se guardó, la imagen debe ser de tipo.png";
	}
}
else{
	$sql = "INSERT INTO `tiendaservicios` (`CODTIENDASERVICIO`, `CODCATEGORIASERVICIO`, `CODADMINISTRADOR`, `NOMBRESERVICIO`, `PROPIETARIO`, `DIRECCIONSERVICIO`, `UBICACIONSERVICIO`, `CELULARSERVICIO`, `TELEFONOSERVICIO`, `ESTADOSERVICIO`, `LOGOSERVICIO`, `CORREO`) VALUES (NULL, '$categoriaTienda', '$codAdmin', '$nombreLocalServicio', '$nombrePropietarioServicio', '$direccionServicio', '$ubicacionServicio', '$celularServicio', '$telefonoServicio', '$estado', ' ', '$emailServicio');";
	if(mysqli_query($dbconn, $sql)){
		//echo "Datos guardados";
		echo "<script>alert('Datos guardados'); window.location.href='index.php?p=editarLocales';</script>";
	}else{
		echo "Problemas en el servidor, intente nuevamente. Si el problema persiste contacte al administrador";
	}
}
?>