<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

	<form class="pure-form pure-form-stacked" action="upload_file.php" method="post" enctype="multipart/form-data">
		<p>
			<label for="files">Upload:</label>
			<input type="file" name="files[]" id="files" class="inputFile" accept='image/*,video/*' multiple><br>
		</p>
		<p><input type="submit" name="submit" value="Submit" class="pure-button pure-button-primary"></p>
	</form>

	<img src="" alt="" id="preview">

	<script>

		function handleSelectedFile (e) {
			// FileList object
			var files = e.target.files;

			for (var i = files.length - 1; i >= 0; i--) {
				// File object
				var f = files[i];
				uploadFile(f);
				showImage(f);
			};
		}

		function uploadFile (file) {
			var fd = new FormData();
			fd.append("file", file);
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'upload_file_ajax.php', true);
			xhr.onload = function(e) {
				console.log('Files have been send.');
			};
			xhr.send(fd);
		}

		function showImage (file) {

			var reader = new FileReader();

			reader.onload = function (e) {
				var preview = document.getElementById('preview');
				preview.src = reader.result;
			}
			reader.readAsDataURL(file);
		}

		// document.getElementById('files').addEventListener('change', handleSelectedFile, false);
	</script>
  <a href="uploaded.php">View uploaded images</a>
</body>
</html>
