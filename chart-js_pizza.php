<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM vendas";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$mes = '';
$quantidade = '';



while ($dados = mysqli_fetch_array($buscar)) {

  $mes = $mes . '"' . $dados['mes_venda'] . '",';
  $quantidade = $quantidade . '"' . $dados['quantidade_venda'] . '",';
  

   $mes = trim($mes); #tira os espaços da variável
   $quantidade = trim($quantidade);

  }

  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <style type="text/css">
    .sombra {
      -webkit-box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
      -moz-box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
      box-shadow: 6px 9px 7px 0px rgba(176,176,176,0.75);
    }

  </style>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CDN do Chart.js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  </head>
  <body>
    <!-- https://www.colourlovers.com/ -->

    <div class="container" style="background-color: #F3F3F3;margin-top: 20px;">
      <canvas style="padding:30px; height: 150px; width: 150px" id="pizza" class="sombra"></canvas>
    </div>

    <script type="text/javascript">
      var ctx = document.getElementById('pizza').getContext('2d');
      var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels:[<?php echo $mes; ?>],
          datasets:
          [{
            label:'quantidade',
            data:[<?php echo $quantidade; ?>],
            backgroundColor: [
            '#F7464A',
      			'#46BFBD',
      			'#FDB45C'],
            highlight: [
            '#FF5A5E',
      			'#5AD3D1',
      			'#FFC870'
            ],
            borderWidth: 3,
            hoverBorderWidth: 10
            



          },
          ]

        },
        options: { 
          legend: {
            labels: {
              fontColor: "black",
              fontSize: 18
            }
          },

          


        }

      });
    </script>
    <!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
  </body>
  </html>