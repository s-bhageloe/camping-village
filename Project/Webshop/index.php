<?php
session_start();

include_once("DBconfig.php")
include_once("header.html");

if(isset( $_GET["page"])) {
		$page = $_GET["page"];
} else {
		$page = "inloggen";
}
if($page) {
	include("pages/" . $page . ".php");
}
?>