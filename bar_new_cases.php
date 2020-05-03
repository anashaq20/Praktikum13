<?php
include('header.php');
include('koneksi.php');
$produk = mysqli_query($koneksi,"select * from penderita_covid_19");
while($row = mysqli_fetch_array($produk)){
	$nama_negara[] = $row['country_name'];
	$query = mysqli_query($koneksi,"select new_cases from penderita_covid_19 where country_id='".$row['country_id']."'");
	$row = mysqli_fetch_array($query);
	$kasus_baru[] = $row['new_cases'];
}
?>
<!doctype html>
<html>

<head>
	<title>Doughnut Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<div><h3>Perbandingan Kasus Baru COVID-19 10 Negara</h3></div>
	<div id="canvas-holder" style="width:50%">
		<canvas id="myChart"></canvas>
	</div>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Kasus Baru',
					data: <?php echo json_encode($kasus_baru); ?>,
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
