     <?php

        $db = mysqli_connect("localhost", "root");
        if (!$db) {
            die('Não foi possível Conectar: ' . mysql_error());
        }
        mysqli_select_db($db, "bloqueadorChamadas_bd");
		
			echo "<div class='text-center'><h2><ins>Números telefônicos bloqueados </ins></h2><br></div>";
            echo "<div class = 'panel panel-default'>
            <table class = 'table'> <tr>
            <th width = '200' >Nome </th>
            <th width = '200' >Telefone Fixo </th>
			<th width = '200' >Telefone Celular </th>
            </tr> ";
			$query = ("select * from numerosBloqueados");
            $res = mysqli_query($db, $query);
			
           while ($consulta = mysqli_fetch_array($res)) {
                echo"<tr height='50'>                                    
                    
                    <td>". $consulta['nome'] . "</td>
                    <td>" . $consulta['telefoneFixo'] . "</td> 
					<td>" . $consulta['telefoneCelular'] . "</td>
                    </tr>";
            }
            echo" </table></div>";
            echo "<br><br><p align='center'><a href = 'numerosBloqueados.php'><input type='' name='voltar' class='btn btn-info btn-lg' value='Voltar'></a></p>";
            mysqli_close($db);
   
    ?>
