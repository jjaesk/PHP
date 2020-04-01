<?php
// Main file used during php classes 2015-2016.
// Note that this is only for CLASS/DEMONSTRATION PURPOSES.
// Owner:        Fabian Lewis <fabian.lewis@yahoo.co.uk>
// Date:         2019-05-27
// Version:      1.01
// License type: Attribution-NonCommercial-ShareAlike
//               CC BY-NC-SA

// custom library supplied by lecturer for iMiT class PHP
require('lib.inc.php');


/*
#16 ENGINE CONTROL-PANEL
Schrijf een programma waarmee je drie turbines kan bedienen en een status weergave kan genereren.
Bouw een programma waarmee van drie turbines elk een individueel,
maar indien gewenst ook collectief, de performance (uitgedrukt in RPM) kan worden ingesteld.

Bediening
De bediening geschiedt via percentage waarden:
0 is “uit” (geen rotatie), 100 is draaien op volle toeren, en natuurlijk elke waarde daartussenin voor een percentage van de max RPM.
De bedieningswaarde kan gelden voor één specifieke machine, of allemaal tegelijk.

Status/dashboard:
Behalve het kunnen sturen van de performance, moet er ook een optie zijn om de huidige performance op te vragen.

Deze status optie laat per machine zien op hoeveel RPM de machine momenteel is ingesteld, en hoeveel procent van de max RPM dat is.
Via de command prompt kan de gebruiker steeds kiezen voor status of bedieningsopties.

Natuurlijk zorg je ook voor een nette exit faciliteit.
De max RPM is voor deze opdracht gesteld op 72916 RPM per machine.


*/

$Intro = ("\nPlease choose an ENGINE to operate:") . ("\n1) Turbine 1") . ("\n2) Turbine 2") .("\n3) Turbine 3\n") . ("4) All AT ONCE\n")
. ("5) Type EXIT to EXIT.\n");

$turb1 = 0;
$turb2 = 0;
$turb3 = 0;
$turb_all = 0;
$MAXRPM = 72916;
$Perc_MAXRPM = 729.16;

Main:
{
  echo $Intro;
  echo ("\nOther OPTIONS:\nA) TYPE STATUS to VIEW Turbine STATUS.\n"); //. ("C) Type EXIT to EXIT.\n");
  $temp = input();
    if ($temp == '1' or (strtolower($temp == 'turbine 1'))) goto TC1;
    if ($temp == '2' or (strtolower($temp == 'turbine 2'))) goto TC2;
    if ($temp == '3'or (strtolower($temp == 'turbine 3'))) goto TC3;
    if ($temp == '4' or (strtolower($temp == 'all at once'))) goto TC_A;
    if (strtolower($temp == 'status' OR (strtolower($temp == 'a' )))) goto Preview;
    if(strtolower($temp == 'exit' OR (strtolower($temp == '5' )))) exit;
    else goto Main;
};

//Turbelance 1
TC1:
{
      echo ("Insert your desired Percentage for Turbine 1\n");
      $turb1 = input();
      echo ("SUCCESS!\n");
      goto Main;
};



//Turbelance 2
TC2:
{
      echo ("Insert your desired Percentage for Turbine 2\n");
      $turb2 = input();
      echo ("SUCCESS!\n");
      goto Main;
};


//Turbelance 3
TC3:
{
      echo ("Insert your desired Percentage for Turbine 3\n");
      $turb3 = input();
      echo ("SUCCESS!\n");
      goto Main;
};


TC_A:
{
  echo ("Insert your desired Percentage for all the Turbines \n");
  $turb_all = input();
  $turb1 = + $turb_all;
  $turb2 = + $turb_all;
  $turb3 = + $turb_all;
  echo ("SUCCESS!\n");
  goto Main;
};



Preview:
{
  echo ("\nDo you wish to see the SINGLE VALUES or TOTAL VALUES?\n") . ("\nOPTIONS:\nA) Type SINGLE for SINGLE PREVIEW\n")
  . ("B) Type TOTAL for TOTAL PREVIEW") . ("\nC) Type OPERATE to OPERATE the TURBINES") . ("\nD) Type EXIT to EXIT\n");
  $preview = input();
  if (strtolower($preview == 'single' OR (strtolower($preview == 'a' )))) goto TOT_S;
  if (strtolower($preview == 'total' OR (strtolower($preview == 'b' )))) goto TOT_R;
  if (strtolower($preview == 'operate' OR (strtolower($preview == 'c' )))) goto Main;
  if (strtolower($preview == 'exit' OR (strtolower($preview == 'd' )))) exit;
  goto Preview;
};

/*
$RPM1 = $turb1 * $Perc_MAXRPM;
$RPM2 = $turb2 * $Perc_MAXRPM;
$RPM3 = $turb3 * $Perc_MAXRPM;
$RPM_Totaal = $RPM1 + $RPM2 + $RPM3;
*/



TOT_S:
{

  $RPM1 = $turb1 * $Perc_MAXRPM;
  $RPM2 = $turb2 * $Perc_MAXRPM;
  $RPM3 = $turb3 * $Perc_MAXRPM;


  echo ("\nWhich Turbine do you wish to know?") . ("\n1) Turbine 1") . ("\n2) Turbine 2") .("\n3) Turbine 3\n") . ("\nOTHER OPTIONS:")
  . ("\nA) Type BACK to BACK") . ("\nB) Type EXIT to EXIT\n");
  $single = input();
  if ($single == '1' OR (strtolower($single == 'turbine 1'))) echo ("\n***Turbine 1 is on ") . $turb1 . ('%') . (' which equals: ') . ("$RPM1") . (" RPM***\n");
  if ($single == '2' OR (strtolower($single == 'turbine 2'))) echo ("\n***Turbine 2 is on ") . $turb2 . ('%') . (' which equals: ') . ("$RPM2") . (" RPM***\n");
  if ($single == '3' OR (strtolower($single == 'turbine 3'))) echo ("\n***Turbine 3 is on ") . $turb3 . ('%') . (' which equals: ') . ("$RPM3") . (" RPM***\n");
  if (strtolower($single == 'exit' OR (strtolower($single == 'b' )))) exit;
  goto TOT_S;
};



TOT_R:
  {
    $RPM1 = $turb1 * $Perc_MAXRPM;
    $RPM2 = $turb2 * $Perc_MAXRPM;
    $RPM3 = $turb3 * $Perc_MAXRPM;
    $RPM_Totaal = $RPM1 + $RPM2 + $RPM3;

    $turb_all = $turb1 + $turb2 + $turb3;
    echo ("\nAll Turbines are on ") . $turb_all . ('% ') . ('which equals ') . $RPM_Totaal . (' RPM');
    echo ("\nOTHER OPTIONS:") . ("\nA) Type BACK to BACK") . ("\nB) Type EXIT to EXIT\n");
    $total = input();
    if (strtolower($total == 'back' OR (strtolower($total == 'a' )))) goto Preview;
    if (strtolower($total == 'exit' OR (strtolower($total == 'b' )))) exit;
    else goto TOT_R;
  };




?>
