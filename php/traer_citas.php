<?php
    require ".php/dbconnect.php";
    class Consulta{
    	function Citas($tipo){
			$clase = new connect();
			$conexion=$clase->conectardb();
			$mes=date('m');

			echo "<table class="table table-striped">";	
			echo "<thead>";
			echo "<tr>";
			echo "	<th>Nombre</th>";
			echo "	<th>Número</th>";
			echo "	<th>Fecha</th>";		
			echo "</tr>";
			echo "</thead>";
			<?php foreach ($conexion->query('SELECT * from $tipo WHERE (substring(fecha,6,2)=$mes)') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
			<tr>
				<td><?php echo $row['nombre'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
			    <td><?php echo $row['numero'] ?></td>
			    <td><?php echo $row['fecha'] ?></td>
			 </tr>
				}
			?>
			</table>
    	}
    }