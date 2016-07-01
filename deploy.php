<?php

	if(@$_GET["pass"] == "bolinhodearroz")
		print shell_exec("git pull origin master");
	else{
		header("HTTP/1.0 404 Not Found");
		print "Error 404";
	}

?>
