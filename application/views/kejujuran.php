<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

<h2>Masukkan nama</h2>
<?php echo form_open('hitung/kejujuran'); ?>
<?php echo form_input('namal', $namal); ?>
<br>
<?php echo form_submit('submit', 'Lihat hasil'); ?>
<?php echo $hasil; ?>
<br>

<em>Page rendered in {elapsed_time} second </em>

</body>
</html>