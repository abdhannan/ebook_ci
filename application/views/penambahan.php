<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

<h2>Penambahan</h2>
<?php echo form_open('hitung/penambahan'); ?>
<?php echo form_input('vi1', $vi1); ?>
<?php echo form_input('vi2', $vi2); ?>

<?php echo form_submit('submit', 'Hitung Boss !!'); ?>
<br>
Hasil = <?php echo $hasil; ?>
<br>
<em>Page rendered in {elapsed_time} Second</em>

</body>
</html>