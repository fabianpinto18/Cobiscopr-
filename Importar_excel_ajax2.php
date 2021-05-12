<?php 
if(is_array($_FILES['archivoexcel2']) && count($_FILES['archivoexcel2'])>0){
    //llamamos la libreria phphexcel
    require_once 'PHPExcel/Classes/PHPExcel.php';
    require_once 'Conexion.php';
    //excel temporar
    $tpmfname = $_FILES['archivoexcel2']['tmp_name'];
    //creamos el excel 
    $leerexcel = PHPExcel_IOFactory::createReaderForFile($tpmfname);
    //cargar el excel
    $excelobj = $leerexcel -> load($tpmfname);
    //cargar la hoja del excel
    $hoja = $excelobj -> getSheet(0);
    $filas = $hoja -> getHighestRow();
    
   

    echo "<table id='tabla_detalle' class='table table-hover' style='width:90%;
    table-layout:fixed'>
    <thead>
    <tr>
        <th>VM</th>
        <th>TEMPLATE</th>
        <th>DNS Name</th>
        <th>Guest State</th>
        <th>PowerOn</th>
        <th>CPUs</th>
        
        </tr>

    </thead><tbody id='tbody_tabla_detalle'>";
   
   
   
    
    // $row=2;$row2=3;$row3=4;$row4=5;
        // Primera fila
        // $machine=$_POST['machine'];
        for($row=2;$row<=5;$row++){

            $VM = $hoja ->getCell('A'.$row)->getValue();
            $TEMPLATE = $hoja ->getCell('C'.$row)->getValue();
            $DNSName = $hoja ->getCell('E'.$row)->getValue();
            $Guest = $hoja ->getCell('G'.$row)->getValue();
            $PowerOn = $hoja ->getCell('J'.$row)->getValue();
            $CPUs = $hoja ->getCell('M'.$row)->getValue();

        
       
            
        if($VM=="AMB_COBIS02_BRANCH_WIN2012"){ 

        echo "<tr>";
        echo "<td id='$VM' >".$VM."</td>";
        echo "<td>".$TEMPLATE."</td>";
        echo "<td>".$DNSName."</td>";
        echo "<td>".$Guest."</td>";
        echo "<td>".$PowerOn."</td>";
        echo "<td>".$CPUs."</td>";
        echo "</tr>";
        }
    }

        // // Segunda fila
        // $VM2 = $hoja ->getCell('A'.$row2)->getValue();
        // $TEMPLATE2 = $hoja ->getCell('C'.$row2)->getValue();
        // $DNSName2 = $hoja ->getCell('E'.$row2)->getValue();
        // $Guest2 = $hoja ->getCell('G'.$row2)->getValue();
        // $PowerOn2 = $hoja ->getCell('J'.$row2)->getValue();
        // $CPUs2 = $hoja ->getCell('M'.$row2)->getValue();

 
        // echo "<tr>";
        // echo "<td>".$VM2."</td>";
        // echo "<td>".$TEMPLATE2."</td>";
        // echo "<td>".$DNSName2."</td>";
        // echo "<td>".$Guest2."</td>";
        // echo "<td>".$PowerOn2."</td>";
        // echo "<td>".$CPUs2."</td>";
        // echo "</tr>";
        
        // // Tercer fila

        // $VM3 = $hoja ->getCell('A'.$row3)->getValue();
        // $TEMPLATE3 = $hoja ->getCell('C'.$row3)->getValue();
        // $DNSName3 = $hoja ->getCell('E'.$row3)->getValue();
        // $Guest3 = $hoja ->getCell('G'.$row3)->getValue();
        // $PowerOn3 = $hoja ->getCell('J'.$row3)->getValue();
        // $CPUs3 = $hoja ->getCell('M'.$row3)->getValue();

        
        // echo "<tr>";
        // echo "<td>".$VM3."</td>";
        // echo "<td>".$TEMPLATE3."</td>";
        // echo "<td>".$DNSName3."</td>";
        // echo "<td>".$Guest3."</td>";
        // echo "<td>".$PowerOn3."</td>";
        // echo "<td>".$CPUs3."</td>";
        // echo "</tr>";

        // $VM4 = $hoja ->getCell('A'.$row4)->getValue();
        // $TEMPLATE4 = $hoja ->getCell('C'.$row4)->getValue();
        // $DNSName4 = $hoja ->getCell('E'.$row4)->getValue();
        // $Guest4 = $hoja ->getCell('G'.$row4)->getValue();
        // $PowerOn4 = $hoja ->getCell('J'.$row4)->getValue();
        // $CPUs4 = $hoja ->getCell('M'.$row4)->getValue();
        
        // // echo "<tr>";
        // echo "<td>".$VM4."</td>";
        // echo "<td>".$TEMPLATE4."</td>";
        // echo "<td>".$DNSName4."</td>";
        // echo "<td>".$Guest4."</td>";
        // echo "<td>".$PowerOn4."</td>";
        // echo "<td>".$CPUs4."</td>";
        // echo "</tr>";
   
        

    echo "</tbody></table>";
    
    
}
?>