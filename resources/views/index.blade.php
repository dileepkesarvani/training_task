<!DOCTYPE html>
<html>
<head>
	<title>file upload</title>
</head>
<body>

<h2>upload file</h2>
<form action="{{route('file/store')}}" mathod="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<label for="file">please choose a file to upload</label>
	<input type="file" name="file" id="file"><br>
	<button type="submit">Uplode</button>
</form>
</body>
</html>