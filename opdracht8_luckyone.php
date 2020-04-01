<?php
require('lib.inc.php');

#8 HELP HARVEY!
#Schrijf een programma waarmee je Harvey helpt kiezen uit zijn 5 vriendinnen.
#Het leven van Harvey is ook niet altijd makkelijk. Hij wordt oud en wil t rustiger aan doen, maar met 5 zal het niet gaan. Harvey kan zelf niet kiezen, jou programma wel!...
#Vraag naar de 5 namen.
#Genereer een willekeurig (random) getal en gebruik het om Harvey te vertellen wie miss lucky is: Print de naam van die bewuste dame.
#Ga een stapje verder en vertel hem ook wie ‘runner-up’ (vervanger) is, indien miss lucky intussen genoeg heeft van Harvey. (LOL!)

/*
$gf1 = input();
$gf2 = input();
$gf3 = input();
$gf4 = input();
$gf5 = input();
*/

$vriendin = array();
echo "Noem 5 meisje's die je in mind hebt\n";

while(count($vriendin) != 5) {
  $temp = strtolower(input());
  if($temp == "exit") break;
  $vriendin[] = $temp;
}
//var_dump($vriendin);

$luckyone = $vriendin[array_rand($vriendin, 1)];
echo "The lucky one is $luckyone";
do {
  $runnerup = $vriendin[array_rand($vriendin, 1)];
  if($runnerup != $luckyone) echo "\nAnd the runner up is $runnerup";
} while($runnerup == $luckyone);

// TEST \\
/*
$names = array();
echo "Voer name in:\n";
$input = input();
$names[] = $input;

print_r($names);
*/
?>
