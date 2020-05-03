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
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Total Pasien Sembuh',
					data: <?php echo json_encode($total_sembuh); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>

</html>
