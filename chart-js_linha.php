<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM clientes";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$mes = '';
$quantidade = '';



while ($dados = mysqli_fetch_array($buscar)) {

  $mes = $mes . '"' . $dados['mes_cliente'] . '",';
  $quantidade = $quantidade . '"' . $dados['quantidade'] . '",';
  

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
    <!-- CDN do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CDN do Chart.js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  </head>
  <body>
    <!-- https://www.colourlovers.com/ -->

    <div class="container" style="background-color: #F3F3F3;margin-top: 20px;">
      <canvas style="padding:30px" id="linha" class="sombra"></canvas>
    </div>

    <script type="text/javascript">
      var ctx = document.getElementById('linha').getContext('2d');
      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels:[<?php echo $mes; ?>],
          datasets:
          [{
            label:'quantidade',
            data:[<?php echo $quantidade; ?>],
            backgroundColor: 'transparent',
            borderColor: '#0000FF',
            borderWidth: 3


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
          scales: {
            xAxes: [{ 
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Meses',
                fontColor:'#000',
                fontSize:16

              },
              ticks: {
                fontColor: "black",
                fontSize: 20
                
              }
            }],
            yAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Quantidade',
                fontColor: '#000',
                fontSize:16
              },
              ticks: {
                fontColor: "black",
                fontSize: 20
              }

            }]
            

          }


        }

      });
    </script>
    <!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
  </body>
  </html>




