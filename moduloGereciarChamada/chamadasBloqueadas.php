<?php include("cabecalho_funcionalidade.html"); ?>
 <div class="col-md-9 well admin-content" id="home">
     <?php

        $db = mysqli_connect("localhost", "root");
        if (!$db) {
            die('Não foi possível Conectar: ' . mysql_error());
        }
        mysqli_select_db($db, "bloqueadorChamadas_bd");
		
			echo "<div class='text-center'><h2><ins>Chamadas telefônicas bloqueadas </ins></h2><br></div>";
            echo "<div class = 'panel panel-default'>
            <table class = 'table'> <tr>
            <th width = '200' >Nome </th>
            <th width = '200' >Telefone Fixo </th>
			<th width = '200' >Telefone Celular </th>
			<th width = '200' >Data</th>
            </tr> ";
			$query = ("select * from chamadasBloqueadas");
            $res = mysqli_query($db, $query);
			
           while ($consulta = mysqli_fetch_array($res)) {
                echo"<tr height='50'>                                    
                    
                    <td>". $consulta['nome'] . "</td>
                    <td>" . $consulta['telefoneFixo'] . "</td> 
					<td>" . $consulta['telefoneCelular'] . "</td>
					<td>" . $consulta['data'] . "</td>
                    </tr>";
            }
            echo" </table></div>";
           mysqli_close($db);
   
    ?>
</div>
</body>
</html>


