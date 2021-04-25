<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    

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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


</body>

</html>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
                alert(resp);

            }
        });
        return false;
    }
</script>