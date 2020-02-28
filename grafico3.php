<?php
$vendas = array(5000, 3000, 8000);
$custos = array(2200, 1000, 4000);
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
				type:'bar',
				data:{
					labels: ['Janeiro', 'Fevereiro', 'Março'],
					datasets: [{
						label: 'Vendas',
						backgroundColor: '#00BFFF',
						borderColor: '#00BFFF',
						data: [<?php echo implode(',', $vendas); ?>],
						fill: false
						}, {
						label: 'Custos',
						backgrounColor: '#F0E68C',
						borderColor: '#F0E68C',
						data: [<?php echo implode(',', $custos); ?>],
						fill: false
							}]
				}
			});
		}	
	</script>
</body>
</html>
