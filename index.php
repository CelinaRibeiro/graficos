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
					labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
					datasets: [{
						label: 'Vendas',
						backgroundColor: '#FF0000',
						borderColor: '#FF0000',
						data: [
								3,
								6,
								7,
								4
							],
						fill: false
						}]
				}
			});
		}	
	</script>
</body>
</html>