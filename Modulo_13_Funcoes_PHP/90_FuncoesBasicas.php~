<?php

	if ( isset( $_POST['nome'])) {
		echo 'iniciado nome <br />';
	} else{
		echo 'não iniciado nome <br />';
	}


	if ( isset( $_POST['nome'])) {
		echo 'iniciado cpf <br />';
	} else{
		echo 'não iniciado cpf <br />';
	}

	if ( empty( $_POST['nome']) ) {
		echo 'nome vazio <br />';
	}


	if ( empty( $_POST['cpf']) ) {
		echo 'cpf vazio<br />';
	}


	if ( isset( $_POST['nome']) && empty( $_POST['nome']) ) {
		echo 'nome isset e vazio <br />';
	}

	if ( isset( $_POST['cpf']) && !(is_numeric( $_POST['cpf']) )) {
		echo 'digite apenas números no CPF<br />';
	}



?>


<form method="post" action=""> <!--Quando o action fica vazio
ele manda carregar a própria página-->]
	<label>
		Nome completo:
		<input type="text" name="nome">
	</label>


	<label>
		CPF:
		<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">

</form>
