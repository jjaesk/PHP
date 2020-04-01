<?php
require('lib.inc.php');

$timezoneset = date_default_timezone_set("America/Fortaleza");
$filename = "groepstudenten.txt";
$teamname = null;
$lid = null;

file_put_contents($filename, "\nPROGRAM_START\n", FILE_APPEND);
while($teamname != "exit"){
  echo "Naam van je groep ? ('exit' om af te sluiten)\n";
  $teamname = strtoupper(input());

  if($teamname != "exit") file_put_contents($filename, "$teamname\n", FILE_APPEND);

  while(($teamname != "exit") && ($lid != "exit")){
    $date = date('r');
    echo "Naam van groeplid ? ('exit' om af te sluiten)\n";
    $lid = strtolower(input());

    if($lid != "exit") file_put_contents($filename, "$lid heeft ingelogd op $date\n", FILE_APPEND);
  }
}

$getfile = file_get_contents($filename);

file_put_contents($filename, "PROGRAM_END\n", FILE_APPEND);
echo "File opgeslagen!\n";
//echo $getfile;

?>
