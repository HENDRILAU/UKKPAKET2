<!DOCTYPE html>
<html>
<head>
	<title> Kalkulator Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}

	if(isset($_POST['reset'])) {
		$_POST['bil1'] = '';
		$_POST['bil2'] = '';
		$_POST['hasil'] = '0';
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<marquee direction="alternate">SELAMAT DATANG DIKALKULATOR</marquee>
		<form method="post" action="">			
			<input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="HITUNG" class="tombol">	
			<input type="submit" name="reset" value="RESET" class="tombol">									
		
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil" readonly>
		<?php }else{ ?>
			<input type="text" value="" class="bil" readonly>
		<?php } 
		?>
		<div class="button">
		<button type="submit"><a href="kalku.html">Back To Menu</a></button>
	</div>
</body>
</html>
