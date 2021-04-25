<?php
if(is_array($_FILES['archivoexcel']) && count($_FILES['archivoexcel'])>0){
    //llamamos la libreria phphexcel
    require_once 'PHPExcel/Classes/PHPExcel.php';
    require_once 'Conexion.php';
    //excel temporar
    $tpmfname = $_FILES['archivoexcel']['tpmf_name'];
    //creamos el excel 
    $leerexcel = PHPExcel_IOFactory::createReaderForFile($tpmfname);
    //cargar el excel
    $excelobj = $leerexcel -> load($tpmfname);
    //cargar la hoja del excel
    $hoja = $excelobj -> getSheet(0);
    $filas = $hoja -> getHighestRow();

    echo $filas;
}



?>