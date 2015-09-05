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
<div id="thoughtDisplay"></div>
<h3>Routines</h3>
<h3>Tasks</h3>


<form action="" method="post">
	<input type="submit" name="action" class="btn btn-primary btn-block" value="Add A Thought">
</form>

<br>
</div>
<script src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</div>
</body>
<script>
		var thoughts = [];
		var currentThought;
		
		<?php 
			if(isset($thoughts)){
			foreach($thoughts as $thought){ ?>
				thoughts.push(
				{
					'thought_id' : "<?php echo $thought['thought_id']; ?>",
					'thought_message' : "<?php echo $thought['thought_message']; ?>",
					'thought_active' : "<?php echo $thought['thought_active']; ?>",
					'thought_time_created' : "<?php echo $thought['thought_time_created']; ?>"
				}
				);
		<?php }} ?>
		
	 var displayThoughts = function(){
		for(i = 0; i < thoughts.length; i++){
			if(thoughts[i].thought_active){
				displayThoughtString = '<h4>"' + thoughts[i].thought_message + '"</h4>';
				currentThought = thoughts[i];
				break;
			}
		}
		displayThoughtString += '<button type="button" class="btn btn-default">';
		displayThoughtString += '<span class="glyphicon glyphicon-chevron-right"></span></button>';
		$('#thoughtDisplay').append(displayThoughtString);
	 }
	 
	 displayThoughts();
</script>
</html>
