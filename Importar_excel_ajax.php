<?php
if(is_array($_FILES['archivoexcel']) && count($_FILES['archivoexcel'])>0){
    //llamamos la libreria phphexcel
    require_once 'PHPExcel/Classes/PHPExcel.php';
    require_once 'Conexion.php';
    //excel temporar
    $tpmfname = $_FILES['archivoexcel']['tmp_name'];
    //creamos el excel 
    $leerexcel = PHPExcel_IOFactory::createReaderForFile($tpmfname);
    //cargar el excel
    $excelobj = $leerexcel -> load($tpmfname);
    //cargar la hoja del excel
    $hoja = $excelobj -> getSheet(0);
    $filas = $hoja -> getHighestRow();

    echo"<button style='width:100%' onclick='mostrar_dato()'>Mostrar Datos</button>
            <input type='text' value='' placeholder='ingrese el nombre de la maquina virtual' ></input>";

   
   
   
   
    
    //  $row=3;$row2=3;$row3=4;$row4=5;
   
    
        for($row=1;$row<=6;$row++){
        $VM = $hoja ->getCell('A'.$row)->getValue();
        $TEMPLATE = $hoja ->getCell('B'.$row)->getValue();
        $DNSName = $hoja ->getCell('C'.$row)->getValue();
        $Guest = $hoja ->getCell('D'.$row)->getValue();
        $PowerOn = $hoja ->getCell('E'.$row)->getValue();
        $CPUs = $hoja ->getCell('F'.$row)->getValue();

        if($VM=="AMB_COBIS02_BRANCH_WIN2012"){

        
            echo "<tr>";
            echo "<td style='display:none'id='perro'>".$VM."</td>";
            echo "<td style='display:none'id='perro'>".$TEMPLATE."</td>";
            echo "<td style='display:none'id='perro'>".$DNSName."</td>";
            echo "<td style='display:none'id='perro'>".$Guest."</td>";
            echo "<td style='display:none'id='perro'>".$PowerOn."</td>";
            echo "<td style='display:none'id='perro'>".$CPUs."</td>";
            echo "</tr>";
            
        }
        }
    
        // Primera fila
       
    
        

      
    //     // Segunda fila
    //     $VM2 = $hoja ->getCell('A'.$row2)->getValue();
    //     $TEMPLATE2 = $hoja ->getCell('C'.$row2)->getValue();
    //     $DNSName2 = $hoja ->getCell('E'.$row2)->getValue();
    //     $Guest2 = $hoja ->getCell('G'.$row2)->getValue();
    //     $PowerOn2 = $hoja ->getCell('J'.$row2)->getValue();
    //     $CPUs2 = $hoja ->getCell('M'.$row2)->getValue();

 
    //     echo "<tr>";
    //     echo "<td>".$VM2."</td>";
    //     echo "<td>".$TEMPLATE2."</td>";
    //     echo "<td>".$DNSName2."</td>";
    //     echo "<td>".$Guest2."</td>";
    //     echo "<td>".$PowerOn2."</td>";
    //     echo "<td>".$CPUs2."</td>";
    //     echo "</tr>";
        
    //     // Tercer fila

    //     $VM3 = $hoja ->getCell('A'.$row3)->getValue();
    //     $TEMPLATE3 = $hoja ->getCell('C'.$row3)->getValue();
    //     $DNSName3 = $hoja ->getCell('E'.$row3)->getValue();
    //     $Guest3 = $hoja ->getCell('G'.$row3)->getValue();
    //     $PowerOn3 = $hoja ->getCell('J'.$row3)->getValue();
    //     $CPUs3 = $hoja ->getCell('M'.$row3)->getValue();

        
    //     echo "<tr>";
    //     echo "<td>".$VM3."</td>";
    //     echo "<td>".$TEMPLATE3."</td>";
    //     echo "<td>".$DNSName3."</td>";
    //     echo "<td>".$Guest3."</td>";
    //     echo "<td>".$PowerOn3."</td>";
    //     echo "<td>".$CPUs3."</td>";
    //     echo "</tr>";

    //     $VM4 = $hoja ->getCell('A'.$row4)->getValue();
    //     $TEMPLATE4 = $hoja ->getCell('C'.$row4)->getValue();
    //     $DNSName4 = $hoja ->getCell('E'.$row4)->getValue();
    //     $Guest4 = $hoja ->getCell('G'.$row4)->getValue();
    //     $PowerOn4 = $hoja ->getCell('J'.$row4)->getValue();
    //     $CPUs4 = $hoja ->getCell('M'.$row4)->getValue();
        
    //     echo "<tr>";
    //     echo "<td>".$VM4."</td>";
    //     echo "<td>".$TEMPLATE4."</td>";
    //     echo "<td>".$DNSName4."</td>";
    //     echo "<td>".$Guest4."</td>";
    //     echo "<td>".$PowerOn4."</td>";
    //     echo "<td>".$CPUs4."</td>";
    //     echo "</tr>";
   
        

    echo "</tbody></table>";
    
}

?>