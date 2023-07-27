<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    </head>

    <body>
    <?php
        //conexion con la BD y seleccion de la BD
        $conexion =mysqli_connect("localhost","root","","phpavanzado");
        //ejecutamos la sentencia sql
        $result=mysqli_query($conexion,"SELECT * from clases ORDER BY fecha");
    ?>
              
        <table class="table" align="center">
        <thead class="table-light">
        <tr>
            <th class="table-secondary" scope="col">Id_clase</th>
            <th class="table-secondary" colspan="4" scope="col">Unidad</th>
            <th class="table-secondary" scope="col">Fecha</th>
            </tr>
        
    <?php
        //mostramos los registros
        while($row=mysqli_fetch_array($result))
    { ?>
            <tr>
            <th scope="col" ><?php echo $row['id_clase']; ?></th>                  
            <th colspan="4" scope="col"><?php echo $row['unidad'];?></th>
            <th scope="col"><?php echo $nuevaFecha = date("d/m/Y", strtotime($row['fecha']));?></th>
            </tr>
    <?php }
        mysqli_free_result($result)
    ?>

        </thead>  
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
        </html>