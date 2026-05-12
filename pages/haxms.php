<?PHP

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

 $file = 'extension/downloads/131/haXMS 0.1 [Alpha].zip';
 
 if(!file)
 {
     die('Bandwith limit for the requested file has been reached. Please try again later.');
 }
 else
 {
  if(isset($_COOKIE['471048581'])) {
     die('Your IP has already downloaded this file today. Please try again in 6 hours.');
     } else {
     // Set headers
     header("Cache-Control: public");
     header("Content-Description: File Transfer");
     header("Content-Disposition: attachment; filename=$file");
     header("Content-Type: application/zip");
     header("Content-Transfer-Encoding: binary");
    
     // Read the file from disk
     setcookie("471048581","xy3910", time()+3600*6);
     readfile($file);
 }
}
 ?>
