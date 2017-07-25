<!DOCTYPE html>
<html>
<head>
	<title>Perkalian CI</title>
</head>
<body>

<h2>Perkalian</h2>
<?php echo form_open('hitung/perkalian'); ?>
<?php echo form_input('vi1', $vi1); ?>
<?php echo form_input('vi2', $vi2); ?><br>

<?php echo form_submit('submit', 'Hitung!!'); ?>

hasil = <?php echo $hasil; ?>
<br><br>
<em>Page rendered in {elapsed_time} second </em>

</body>
</html>