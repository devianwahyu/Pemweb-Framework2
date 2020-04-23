<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Daftar Artikel</h1>
	<?php foreach ($posts as $post) : ?>
		<h2><?php echo $post->judul; ?></h2>
		<p><?php echo $post->konten; ?></p>
		<a href="<?php echo base_url('blog/delete/' . $post->id); ?>">Hapus</a>
		<a href="<?php echo base_url('blog/update/' . $post->id); ?>">Update</a>
	<?php endforeach; ?>
</body>

</html>
