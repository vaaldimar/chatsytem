<?php
require "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="jsonload.js"></script>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
<h1>Messaging system</h1>

<!-- Display -->
<div id="messages"></div>


<!-- Post -->
<form id="userArea">
	<label>Message</label>
	<input type ="text" maxlength="255" name="messages" />
	
	<input type ="submit" value="Post Message" />
</form>
</body>
</html>