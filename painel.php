<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#sombra {
			-webkit-box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
			-moz-box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
			box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
		}

	</style>
</head>
<body >


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 18rem;" id="sombra">
					<div class="card-header">Total Clientes / Ano</div>
					<div class="card-body" >
						<h5 class="card-title" style="text-align: center;font-size: 40px">
							<?php

							include 'conexao/conexao.php';
							$sql = "SELECT SUM(quantidade) AS total FROM clientes";
							$consulta = mysqli_query($conexao,$sql);
							$dados = mysqli_fetch_array($consulta);
							echo $dados['total'];
							?>
							<span style="font-size: 10px"> / unid</span></h5>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-success mb-3" style="max-width: 18rem;" id="sombra">
						<div class="card-header">Faturamento / Ano</div>
						<div class="card-body">
							<h5 class="card-title" style="text-align: center;font-size: 40px">
								<?php

								include 'conexao/conexao.php';
								$sql = "SELECT SUM(valor_venda) AS total_venda FROM vendas";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								$valor = $dados['total_venda'];
								echo 'R$' . number_format($valor,2,'.','');

								?>

								<span style="font-size: 10px"> / BRL</span></h5>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-white bg-danger mb-3" style="max-width: 18rem;" id="sombra">
							<div class="card-header">Total Vendas / Ano</div>
							<div class="card-body">
								<h5 class="card-title" style="text-align: center;font-size: 40px">
									<?php

									include 'conexao/conexao.php';
									$sql = "SELECT SUM(quantidade_venda) AS total_quantidade FROM vendas";
									$consulta = mysqli_query($conexao,$sql);
									$dados = mysqli_fetch_array($consulta);
									echo $dados['total_quantidade'];


									?>
									<span style="font-size: 10px"> / qtd</span></h5>

								</div>
							</div>
						</div>

					</div>
				</div>




			</body>
			</html>