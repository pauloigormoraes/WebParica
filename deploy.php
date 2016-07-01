<php

	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors', true);
	header('Content-Type: text/html; charset=UTF-8');

	if(@$_GET["pass"] == "bolinhodearroz"){
		if($a = shell_exec("git pull origin master"))
			print $a;
		else
			print "error";
	}else{
		header("HTTP/1.0 404 Not Found");
		print "Error 404";
	}

?>
