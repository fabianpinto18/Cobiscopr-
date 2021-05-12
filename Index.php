<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="Styles.css" >
    <title>Cobiscorp</title>

</head>
<body>
    <div class="col-lg-12" style="padding-top:20px">
        <div class="card">
            <div class="row">
                <div class="card-header"><b>Importar Excel<b></div>
                <div class="card-body">
                    <form action="#" enctype="miltipart/form-data">
                        <div class="row">
                            <div class="col-lg-10">
                                <input type="file" id="txt_archivo" class="form-control" accept="csv,.xlsx,.xls">
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-danger" style="width:100%" onclick="CargarExcel()">Cargar Excel</button>
                            </div>
                            <div class="col-lg-12" id="div_table"><br>
                       
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table id="table_id" class="table table-hover" style="width:100%">
    <thead>
        <tr>
        <th>VM</th>
        <th>TEMPLATE</th>
        <th>DNS Name</th>
        <th>Guest State</th>
        <th>PowerOn</th>
        <th>CPUs</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          
        </tr>
        <tr>
            
        </tr>
    </tbody>
</table>
   
</body>
<footer>
<div class="col-lg-12" style="padding-top:20px">
        <div class="card">
            <div class="row">
               
                <div class="card-body">
                    <form action="#" enctype="miltipart/form-data">
                        <div class="row">
                            <div class="col-lg-10">
                                <input type="file" id="txt_archivo2" class="form-control" accept="csv,.xlsx,.xls">
                                <!-- <input type="text" name="machine"> -->
                            </div>
                            <div class="col-lg-2">
                                <button  class="btn btn-danger" style="width:100%" onclick="CargarExcel2()">Cargar Excel</button>
                            </div>
                            <div class="col-lg-12" id="div_table2"><br>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
</footer>

</html>
<script>
     function CargarExcel() {
        var excel = $("#txt_archivo").val();
        if (excel === "") {
            return Swal.fire("Mensaje de advertencia", "Seleccionar un archivo excel", "warning");
        }
        var formData = new FormData();
        //traer el nombre del archivo e instanciarlo en un objeto
        var files = $("#txt_archivo")[0].files[0];
        formData.append('archivoexcel', files);
        $.ajax({
            url: 'Importar_excel_ajax.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp) {
                $("#table_id").html(resp);
            }
        });
        return false;
    }
    </script>
<script>
    
    function CargarExcel2() {
        var excel = $("#txt_archivo2").val();
        if (excel === "") {
            return Swal.fire("Mensaje de advertencia", "Seleccionar un archivo excel", "warning");
        }
        
        var formData2 = new FormData();
        //traer el nombre del archivo e instanciarlo en un objeto
        var files = $("#txt_archivo2")[0].files[0];
        formData2.append('archivoexcel2', files);
        var machine='AMB_COBIS02_BRANCH_WIN2012';
        $.ajax({
            url: 'Importar_excel_ajax2.php',
            type: 'post',
            data: formData2,
            contentType: false,
            processData: false,
            success: function(resp2) {
                $("#div_table2").html(resp2);
            }
        });
        return false;
    }

    </script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
     function mostrar_dato() {
        var x = document.getElementById("perro");
        x.style.display="inline-block";
        return x.style.display="inline-block";
        }
</script>
<script>$(document).ready( function () {
    $('#table_id').DataTable();
} );</script>
<script>

    $('input[type="file"]').on('change', function() {
        var ext = $( this ).val().split('.').pop();
        if ($( this ).val() != '') {
            if (ext == "xls" || ext == "xlsx" || ext == "csv") {
            } 
            else
            {
                $( this ).val('');
                Swal.fire("Mensaje De Error", "Extensión no permitida: " + ext + "", "error");
            }
        }
    });
   
    
</script>