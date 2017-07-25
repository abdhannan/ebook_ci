<!DOCTYPE html>
<html>
<head>
	<title>App menghitung dengan CI</title>
</head>
<body>

<h2>Silahkan pilih dibawah ini</h2>
<ul>
	<li><?php echo anchor('hitung/perkalian', 'Perkalian'); ?></li>
	<li><?php echo anchor('hitung/pembagian', 'Pembagian'); ?></li>
	<li><?php echo anchor('hitung/pengurangan', 'Pengurangan'); ?></li>
	<li><?php echo anchor('hitung/penambahan', 'Penambahan'); ?></li>
	<li><?php echo anchor('hitung/kejujuran', 'kejujuran'); ?> </li>
</ul>
<p>
	<br> Page renrered in {elapsed_time} second
</p>
</body>
</html>