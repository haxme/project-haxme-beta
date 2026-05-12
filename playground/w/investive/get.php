<?php
include('../../../check.php');

error_reporting(0);

$page = 'index';
if (isset( $_GET['module'] ) )

$page = $_GET['module'];
$page = str_replace("http://", "", $page);
$page = str_replace("/", "", $page);
$page = str_replace("\\", "", $page);
$page = str_replace("../", "", $page);
$page = str_replace("..", "", $page);

require( $page . '.php' );
?>
