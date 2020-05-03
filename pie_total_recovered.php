<?php
include('header.php');
include('koneksi.php');
$produk = mysqli_query($koneksi,"select * from penderita_covid_19");
while($row = mysqli_fetch_array($produk)){
	$nama_negara[] = $row['country_name'];
	$query = mysqli_query($koneksi,"select total_recovered from penderita_covid_19 where country_id='".$row['country_id']."'");
	$row = $query->fetch_array();
	$total_sembuh[] = $row['total_recovered'];
}
?>
<!doctype html>
<html>
<head>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<div><h3>Perbandingan Total Kesembuhan Pasien COVID-19 10 Negara</h3></div>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($total_sembuh); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(242, 130, 2, 0.2)',
					'rgba(81, 240, 7, 0.2)',
					'rgba(170, 7, 240, 0.2)',
					'rgba(255, 0, 170, 0.2)',
					'rgba(0, 247, 255, 0.2)',
					'rgba(85, 0, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(242, 130, 2, 1)',
					'rgba(81, 240, 7, 1)',
					'rgba(170, 7, 240, 1)',
					'rgba(255, 0, 170, 1)',
					'rgba(0, 247, 255, 1)',
					'rgba(85, 0, 255, 1)'
					],
					label: 'Total Pasien Sembuh'
				}],
				labels: <?php echo json_encode($nama_negara); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

	</script>
</body>

</html>
