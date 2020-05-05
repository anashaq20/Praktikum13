<?php
//digunakan untuk memanggil file koneksi database
include('koneksi.php');
$produk = mysqli_query($koneksi,"select * from penderita_covid_19");
while($row = mysqli_fetch_array($produk)){
	//digunakan untuk menyimpan nama setiap negara dalam array nama_negara
	$nama_negara[] = $row['country_name'];
	//query di bawah digunakan untuk mengambil total kasus dari tabel sesuai negara yang disimpan pada array jumlah_kasus
	$query = mysqli_query($koneksi,"select total_cases as jumlah from penderita_covid_19 where country_id='".$row['country_id']."'");
	$row = $query->fetch_array();
	$jumlah_kasus[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Bar dengan ChartJS</title>
</head>
<script type="text/javascript" src="Chart.js"></script>
<body>
<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
</body>
</html>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Total Kasus',
					data: <?php echo json_encode($jumlah_kasus); ?>,
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