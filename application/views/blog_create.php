<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Tulis Artikel Baru</h1>
	<form action="<?php echo base_url('blog/create_process'); ?>" method="post">
		<label>
			Judul: <input type="text" name="judul" autofocus>
		</label>
		<br>
		<label>
			Konten:<br>
			<textarea name="konten" cols="30" rows="10"></textarea>
		</label>
		<br>
		<input type="submit" value="Simpan">
	</form>
</body>

</html>
