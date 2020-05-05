<?php
//digunakan untuk memanggil file koneksi database
include('koneksi.php');
//digunakan untuk memanggil file header laman yang sama pada setiap laman
include('header.php');
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
<div><h3>Perbandingan Total Kasus COVID-19 10 Negara</h3></div>
<!--//wadah yang digunakan sebagai tempat bagi chart yang akan ditampilkan-->
<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
</body>
</html>
	<script>
		//digunakan untuk menyimpan chart yang akan ditampilkan ke dalam variabel ctx dengan id myChart sebagai objek grafis
		var ctx = document.getElementById("myChart").getContext('2d');
		//fungsi dibawah ini untuk memanggil grafik tipe bar
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				//label yang akan ditampilkan diatas grafik berisi array variabel nama_negara
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					//label yang akan muncul ketika kita menyorot bagian dari grafik adalah Total kasus dengan jumlah data sejumlah array variabel jumlah_kasus
					label: 'Total Kasus',
					data: <?php echo json_encode($jumlah_kasus); ?>,
					//digunakan sebagai warna dasar dari grafik
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					//digunakan sebagai warna garis pembatas dari grafik
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							//membuat grafik akan dimulai dari titik nol pada skala sumbu x dan y
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
