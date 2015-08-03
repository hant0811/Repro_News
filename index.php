<?php
	//define path
	require_once("config/define_path.php");
	require_once("config/define_database.php");
	//end define path
	require_once(LIB_PATH."Session.php");
	require_once(LIB_PATH."Functions.php");
	require_once(LIB_PATH."Controller.php");
	require_once(LIB_PATH."View.php");
	require_once(LIB_PATH."Model.php");
	require_once(LIB_PATH."Bootstrap.php");
	require_once(LIB_PATH."RewriteUrl.php");
	require_once(LIB_PATH."Authorization.php");
	require_once(LIB_PATH."Validate.php");
	$bootstrap = new Bootstrap;
?>