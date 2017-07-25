<!DOCTYPE html>
<html>
<head>
	<title>Pembagian CI</title>
</head>
<body>

<h2>Pembagian</h2>

<?php echo form_open('hitung/pembagian'); ?>
<?php echo form_input('vi1', $vi1); ?>
<?php echo form_input('vi2', $vi2); ?>

<?php echo form_submit('submit', 'Hitung!!'); ?>
<br>
Hasil = <?php echo $hasil; ?>

<br><br><em>Page rendered in {elapsed_time} second</em>

</body>
</html>