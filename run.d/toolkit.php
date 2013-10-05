<?
// Generic tasks to read shell/environment settings into PHP
//

// Environment CHK_HOSTS holds hosts to check, get them in an array
//
if( getenv('CHK_HOSTS') == null ) {
  $hosts = null;
}else {
  $hosts = explode(' ', getenv('CHK_HOSTS'));
  if (implode($hosts)=='') die("No hosts to check.\n");
}

// Verbosity settings
//
if( getenv('VERBOSE') == null ) {
  $verbose = 0;
} else {
  $verbose = getenv('VERBOSE');
}
function verbose($msg, $loglevel=0) {
  global $verbose;
  if($loglevel <= $verbose) echo $msg."\n";
}

?>
