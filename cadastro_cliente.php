<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div style="text-align: right">
			<a href="#" role="button" class="btn btn-primary btn-sm">Relatórios</a>
			<a href="#" role="button" class="btn btn-danger btn-sm">Voltar</a>
		</div>

		<h2>Cadastro de Cliente</h2>
		<form action="cadastro_cliente2.php" method="post">
			<div class="form-group">
				<label>Selecione o Mês</label>
				<select class="form-control" name="mes">
					<option>JAN</option>
					<option>FEV</option>
					<option>MAR</option>
					<option>ABR</option>
					<option>MAI</option>
					<option>JUN</option>
					<option>JUL</option>
					<option>AGO</option>
					<option>SET</option>
					<option>OUT</option>
					<option>NOV</option>
					<option>DEZ</option>
				</select>
			</div>
			<div class="form-group">
				<label>Digite a Quantidade</label>
				<input type="number" name="quantidade" class="form-control" name="quantidade" autocomplete="off"> 
			</div>
			
			<div style="text-align: right">
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
		</form>
	</div>









	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>