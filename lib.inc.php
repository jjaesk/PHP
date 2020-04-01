<?php
// Library of common functions for use by iMiT Suriname students during php classes 2018-2019.
// Owner:        Fabian Lewis <fabian.lewis@yahoo.co.uk>
// Date:         2019-06-02
// Version:      1.02
// License type: Attribution-NonCommercial-ShareAlike
//               CC BY-NC-SA

// reads the input from CLI keyboard and returns this.
function input($cleanup = true)
{
	$handle = fopen ("php://stdin","r");
	$line = fgets($handle);
	if($cleanup) $line = trim($line);
	return $line;
}




//example: open_connection('localhost', 'testdb');
//or
//open_connection('localhost', 'testdb', 'john', secretpass');
function open_connection($dbserver, $db, $dbuser = null, $dbpass = null)
{
	//$serverName = 'tcp:myserver.database.windows.net,1433';
//	try
//	{		
		if(!is_null($dbuser))
			$connectionOptions = array(
				'Database'=> $db,
				'UID'=>$dbuser,
				'PWD'=>$dbpass);
		else $connectionOptions = array('Database'=> $db);
		
		$conn = sqlsrv_connect($dbserver, $connectionOptions);
		if($conn === false)
			die(print_r(sqlsrv_errors()));
		else return $conn;
/*	}
	catch(Exception $e)
	{
		die('Error in open_connection function');
	}
*/
}




//example: $data = fetch_data($connection, 'SELECT TOP 10 * FROM STUDENTS');
function fetch_data(&$connection, $sql)
{
	$ret = array();
	$results  =  sqlsrv_query($connection, $sql);
	if($results === false)
	{
		echo 'Error in fetch_data execution: ' . "\n" . $tsql . "\n";
		die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		while($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC))
		{
			array_push($ret, $row);
		}
	}
	sqlsrv_free_stmt($results);

	return $ret;
}


?>