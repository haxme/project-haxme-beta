<?php

function fetch($filename) {
 if(!is_file($filename)) {
  die('<i>System is missing core files. Please re-upload <font color="red">' . $filename . '</font></i>');
  } else {
  include($filename);
  }
 }

?>