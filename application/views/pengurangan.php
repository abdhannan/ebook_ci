<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>

<h2>Pengurangan</h2>
<?php echo form_open('hitung/pengurangan'); ?>
<?php echo form_input('vi1',$vi1); ?>
<?php echo form_input('vi2',$vi2); ?>

<?php echo form_submit('submit', 'Hitung!!'); ?>
<br>
Hasil = <?php echo $hasil; ?>
<br>
<em>Page rendered in {elapsed_time} second</em>


</body>
</html>