<?php 
$vendas = array(10, 40, 30, 50, 43);
$custos = array(12, 30, 22, 28, 30);
?>

<!DOCTYPE html>
<html>
<head>
<title>Projeto Gráfico</title>
</head>

<body>

	<div style="width: 500px">
		<canvas id="grafico"></canvas>
	</div>

	<script type="text/javascript" src="Chart.min.js"></script>
	<script type="text/javascript">
		window.onload = function() {
			var contexto = document.getElementById("grafico").getContext("2d");
			var grafico = new Chart(contexto, {
				type:'line',
				data:{
					labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
					datasets: [{
						label: 'Vendas',
						backgroundColor: '#FF0000',
						borderColor: '#FF0000',
						data: [<?php echo implode(',', $vendas); ?>],
						fill: false
						}, {
						label: 'Custos',
						backgrounColor: '#4169E1',
						borderColor: '#4169E1',
						data: [<?php echo implode(',', $custos); ?>],
						fill: false
							}]
				}
			});
		}	
	</script>
</body>
</html>