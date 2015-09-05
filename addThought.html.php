<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Planner</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet"/>
	<link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
<div class="row">
<h1>Add a Thought</h1>
	<form action="?addThought" method="post">
		<div class="form-group">
			<label class="control-label" for="message">Message:</label>
			<input class="form-control" type="text" name="message" id="message" value="">
		</div>
		<div>
			<input id="addThought" class="btn btn-success btn-block" type="submit" value="Add Thought">
		</div>
		<br>
	</form>
<br>
<a class="btn btn-primary btn-block" href=".">Return to Home</a>
</div>
<script src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</div>
</body>
</html>
