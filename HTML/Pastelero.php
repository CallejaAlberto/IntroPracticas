<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelero</title>
</head>
<body>
<?php
$sabor=$_REQUEST['sabores'];
$adorno=$_REQUEST['adornos'];
?>

    <h1>Página del Pastelero</h1>
    <label>Cantidad de sabores restantes:</label><br><br><br>
    <label>Cantidad de adornos restantes: </label><br><br><br>

    <!-- Tabla de pedidos -->
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Descripción pastel</th>
            <th>Sabores</th>
            <th>Adornos</th>
            
        </tr>
        <tr>
            <td>
	    <?=
            	$nombre = $_REQUEST['nombre'];
            ?>
	    </td>
	    
	    <td>
	    <?=
            	$telefono = $_REQUEST['telefono'];
            ?>
	    </td>
	    
	    <td>
	    <?=
            	$correo = $_REQUEST['correo'];
            ?>
	    </td>

	    <td>
	    <?=
            	$descripcion = $_REQUEST['descripcion'];
            ?>
	    </td>

	    <td>
	    <?php
		$n = count($sabor);
            	for($i=0;$i<$n;$i++)
			print("$sabor[$i]<br>")
            ?>
	    </td>
	    
	    <td>
	   	<?php
		$n = count($adorno);
            	for($i=0;$i<$n;$i++)
			print("$adorno[$i]<br>")
	    ?>
	    </td>

        </tr>
	

        
    </table>

</body>
</html>