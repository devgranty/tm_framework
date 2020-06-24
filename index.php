<?php
/**
 * ---------------------------------------
 * LOAD UP APPLICATION
 * ---------------------------------------
 * Let us load up all helpers, classes
 * and application configuration.
 * Feels good to take a nap now!
 */
require_once __DIR__.'/bootstrap/app.php';

use Classes\{Filesystem};

$filesystem = new Filesystem;
	
$upload_r = $filesystem->upload('file_input', true, 'uploads/', ['jpg', 'png'], 2097152);
print_r($upload_r);
?>

<html>
<head>
	<title>Simple file upload test / <?= get_page_name() ?></title>
</head>

<body>
	<h1 style="text-align:center;">Hello & Welcome to TM Framework: Build PHP based applications fast and easy using custom build classes and functions!</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="file_input"/>
		<button type="submit">Upload</button>
	</form>
</body>

</html>