<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
/**
 * Project: HaxMe
 * Release: 1.0.0-beta
 * http://haxme.org/
 *
 * @author     cwade12c
 * @license    GNU
 * @version    Rev: 2
 *
 * HaxMe beta keeps the April 2012 hxmf bootstrap style while routing the
 * restored alpha training surface through modules.
 */

DEFINE('hxm_here', '');
DEFINE('DENYDIRECT', 'GOOD2GO');

require_once('initSystem.php');

bridge('engine/hxmCore.php');

$engine = new Engine();
$engine->start();

?>
