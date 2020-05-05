<?php
include('koneksi.php');
//query select untuk mengambil seluruh data dari tabel
$produk = mysqli_query($koneksi,"select * from penderita_covid_19");
while($row = mysqli_fetch_array($produk)){
	$nama_negara[] = $row['country_name'];
	//digunakan untuk memanggil query database dari tabel untuk setiap negara
	$query = mysqli_query($koneksi,"select total_cases as jumlah from penderita_covid_19 where country_id='".$row['country_id']."'");
	//pengulangan untuk menyimpan data total kasus setiap negara dalam array $jumlah_kasus
	$row = $query->fetch_array();
	$jumlah_kasus[] = $row['jumlah'];
}
?>
<!doctype html>
<html>

<head>
	<title>Pie Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					//di bawah ini merupakan code untuk menampilkan jumlah kasus tiap negara yang tersimpan dalam query mySQL
					data:<?php echo json_encode($jumlah_kasus); ?>,
					//di bawah ini adalah warna yang digunakan untuk bagian dalam chart
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
					//di bawah ini merupakan warna garis batas dari setiap bagian grafik.
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
					label: 'Presentase Total Kasus'
				}],
				labels: <?php echo json_encode($nama_negara); ?>},
			options: {
				responsive: true
			}
		};
		//digunakan untuk meload grafik ketika laman dimuat
		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

	</script>
</body>

</html>
