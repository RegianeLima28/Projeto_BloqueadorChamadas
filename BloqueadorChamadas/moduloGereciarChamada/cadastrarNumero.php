<?php include("cabecalho_funcionalidade.html"); ?>
  <div class="col-md-9 well admin-content" id="home">
  <div class="text-center">
            <h2><ins>Cadastro de números telefônicos a serem bloqueados</ins></h2><br></div>
    <form action="cadastrarNumeroValidacao.php" method="POST" id="form" name="frm" enctype="multipart/form-data">
		<b> Nome: </b> <input type="text" name="nome" size="20" maxlength="20"><br><br>
        <b> Telefone fixo: </b> <input type="tel" name="telefoneFixo" maxlength="15" name="telefone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" maxlength="20" placeholder="Ex.: (00) 0000-0000"><br><br>
        <b> Telefone celular: </b> <input type="tel" name="telefoneCelular" maxlength="15" name="telefone" pattern="\([0-9]{2}\) 9[0-9]{4,6}-[0-9]{3,4}$" maxlength="20" placeholder="Ex.: (00) 90000-0000"><br><br>
		<div class="row">
            <div class="col-sm-12">
                <div class="text-center">						
                    <input type="submit" name="cadastrar" class="btn btn-primary btn-lg" value="Cadastrar" onclick="">
                    <input type="reset" name="reset" class="btn btn-warning btn-lg" value="Limpar Campo">
                </div>	
            </div>
        </div>
    </form>
</body>
</html>

