<?php
require('lib.inc.php');

$action = "";

while(strtolower($action) != "done") {
  echo "voer de dagkoers van CBvs in:\n";
  $koers = input();
  echo "voer het bedrag in USD in:\n";
  $USD = input();
  echo "USD $USD komt met de dagkoers van $koers op SRD " . $USD*$koers . "\n ";
  echo "type KOERS to calculate a new transaction or DONE to exit\n";
  $action = input();
  if(strtolower($action) == "done") echo "Thank you and have a nice day";
}


?>
