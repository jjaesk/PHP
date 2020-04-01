<?php
// Main file used during php classes 2015-2016.
// Note that this is only for CLASS/DEMONSTRATION PURPOSES.
// Owner:        Fabian Lewis <fabian.lewis@yahoo.co.uk>
// Date:         2019-07-02
// Version:      1.01
// License type: Attribution-NonCommercial-ShareAlike
//               CC BY-NC-SA

// custom library supplied by lecturer for iMiT class PHP
require('lib.inc.php');


//examples:
//open_connection('localhost', 'testdb');
//open_connection('localhost', 'testdb', 'john', secretpass');
//$connection = open_connection('tcp:localhost,1433', 'AdventureWorks2016');
$connection = open_connection('tcp:192.168.1.250\SQLEXPRESS', 'AdventureWorks2014', 'Jaeden', 'Imit3000');



//example: $data = fetch_data($connection, 'SELECT TOP 10 * FROM STUDENTS');
$data = fetch_data($connection, 'SELECT TOP 4 BusinessEntityID, FirstName, LastName FROM AdventureWorks2014.Person.Person');
print_r($data);



echo("\nHi! Welke Voornaam zoek jij? ");
$search_for = input();

$data = fetch_data($connection, "SELECT TOP 1 * FROM AdventureWorks2014.Person.Person WHERE FirstName = '$search_for'");
print_r($data);


// Note dat er in dit voorbeeld nog geen escape/filtering is voor bescherming tegen invoeren van allerlei vreemde tekens etc!


?>
