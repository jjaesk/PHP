<?php
$serverName = "SQL Server"; //Server name plaatsen.
$uid = "sqlusername";       //Username plaatsen
$pwd = "sqlpassword";       //password plaatsen
$databaseName = "DBName";   //database name plaatsen

$connectionInfo = array( "UID"=>$uid, //UID wordt gezien als $uid
                         "PWD"=>$pwd, // PWD wordt gezien als $pwd
                         "Database"=>$databaseName); //Database wordt gezien als $databaseName

// Connect using SQL Server Authentication.
$conn = sqlsrv_connect($serverName, $connectionInfo);

$tsql = "SELECT id, FirstName, LastName, Email FROM tblContact";

// Execute the query.

$stmt = sqlsrv_query( $conn, $tsql);

if ( $stmt ) {  
     echo "Statement executed.<br>\n";
} else {
     echo "Error in statement execution.\n";
     die( print_r( sqlsrv_errors(), true));
}

// Iterate through the result set printing a row of data upon each iteration.

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)) {
     echo "Col1: ".$row[0]."\n";
     echo "Col2: ".$row[1]."\n";
     echo "Col3: ".$row[2]."<br>\n";
     echo "-----------------<br>\n";
}

// Free statement and connection resources.
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>
