<?php
echo '<html>';
	echo '<head>';
		echo '<title>User Profile</title>';
		echo '<meta name="author" content="Sophia Saint-Val">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '<link href="style.css" rel="stylesheet" type="text/css">';
	echo '</head>';
	echo '<body id="body">';
		echo '<header>';
			echo '<h1 id="title">User Profile</h1>';
		echo '</header>';
		echo '<div id="content" class="content">';
			echo '<label for="username">Username: ';
			echo $_POST["username"].'<br><br>';
			echo 'Please sign-up before logging in.<br><br>';
			echo '<button id="logout" type="button" value="Log-out" onclick="logout()">Log-out</button> <!--USE INNER HTML TO CHANGE PAGE TO SAY “You have successfully signed out.”-->';
		echo '</div>';
		echo '<script src="p1.js" type="text/javascript"></script>';
	echo '</body>';
echo '</html>';
?>