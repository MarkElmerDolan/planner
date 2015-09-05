<?php
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/magicquotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/plannerFunctions.inc.php';
	
	if(isset($_POST['action']) && $_POST['action'] == 'Add A Thought'){
		include 'addThought.html.php';
		exit();
	}
	
	if(isset($_GET['addThought'])){
		addThought($_POST['message']);
		header('Location: .');
		exit();
	}
	
	$thoughts = getThoughts();
	include 'main.html.php';
?>
