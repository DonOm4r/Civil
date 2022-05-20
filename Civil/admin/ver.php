<!doctype html>
<html lang="en">

<head>
    <title>Lee Imagen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Cedula</th>
                            <th>Formacion</th>
                            <th>Construccion</th>
                            <th>Constructora</th>
                            <th>Nombre constructora</th>
                            <th>area</th>
                            <th>Foto Vivienda</th>
                            <th>Ubicacion</th>
                            <th>Elementos Cercanos</th>
                            <th>Uso</th>
                            <th>Uso anterior?</th>
                            <th>Uso anterior</th>
                            <th>Uso Primer piso</th>
                            <th>Nro de Pisos</th>
                            <th>Piso Vivienda</th>
                            <th>Nro de Sotanos</th>
                            <th>Muro Vecinos</th>
                            <th>Elementos</th>
                            <th>Altura Pisos</th>
                            <th>Material</th>
                            <th>Tipo</th>
                            <th>Piso</th>
                            <th>Techo</th>
                            <th>Asentamiento</th>
                            <th>Foto 1 Asentamiento</th>
                            <th>Foto 2 Asentamiento</th>
                            <th>Grietas</th>
                            <th>Foto 1 Grietas</th>
                            <th>Foto 2 Grietas</th>
                            <th>Vulnerabilidad</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="civil";

$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

$cedu=$_POST['cedulaf'];

$query = "SELECT cedula, formacion, construccion, constructora, nombre_constructora, area, foto_vivienda, 
ubicacion, elementos_cercanos, uso, uso_anterior_resp, uso_anterior, uso_primer_piso, nro_pisos, piso_de_vivienda,
nro_sotanos, muro_vecinos, elementos, altura_pisos, material, tipo, piso, techo, asentamiento,foto_asentamiento1,foto_asentamiento2, grietas, foto_grieta1,foto_grieta2,vulnerabilidad FROM respuestas WHERE cedula='".$cedu."' ;";

$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <tr>


    <td><?php echo $row['cedula']; ?></td>
    <td><?php echo $row['formacion']; ?></td>
    <td><?php echo $row['construccion']; ?></td>
    <td><?php echo $row['constructora']; ?></td>
    <td><?php echo $row['nombre_constructora']; ?></td>
    <td><?php echo $row['area']; ?></td>
    <td>
        <img width="100" src="data:image/jpeg ;base64,<?php echo  base64_encode($row['foto_vivienda']); ?>">
                                    
    </td>
    <td><?php echo $row['ubicacion']; ?></td>
    <td><?php echo $row['elementos_cercanos']; ?></td>
    <td><?php echo $row['uso']; ?></td>
    <td><?php echo $row['uso_anterior_resp']; ?></td>
    <td><?php echo $row['uso_anterior']; ?></td>
    <td><?php echo $row['uso_primer_piso']; ?></td>
    <td><?php echo $row['nro_pisos']; ?></td>
    <td><?php echo $row['piso_de_vivienda']; ?></td>
    <td><?php echo $row['nro_sotanos']; ?></td>
    <td><?php echo $row['muro_vecinos']; ?></td>
    <td><?php echo $row['elementos']; ?></td>
    <td><?php echo $row['altura_pisos']; ?></td>
    <td><?php echo $row['material']; ?></td>
    <td><?php echo $row['tipo']; ?></td>
    <td><?php echo $row['piso']; ?></td>
    <td><?php echo $row['techo']; ?></td>
    <td><?php echo $row['asentamiento']; ?></td>
    <td>
        <img width="100" src="data:image/jpeg ;base64,<?php echo  base64_encode($row['foto_asentamiento1']); ?>">
                                    
    </td>
    <td>
        <img width="100" src="data:image/jpeg ;base64,<?php echo  base64_encode($row['foto_asentamiento2']); ?>">
                                    
    </td>
    <td><?php echo $row['grietas']; ?></td>
    <td>
        <img width="100" src="data:image/jpeg ;base64,<?php echo  base64_encode($row['foto_grieta1']); ?>">
                                    
    </td>
    <td>
        <img width="100" src="data:image/jpeg ;base64,<?php echo  base64_encode($row['foto_grieta2']); ?>">
                                    
    </td>
    <td><?php echo $row['vulnerabilidad']; ?></td>




    </tr>
    <?php
    }
?>
</tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>