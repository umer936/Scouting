<?php

$myServer = "tfs.centaurisoftware.co\SCOUT";
$myUser = "umer";
$myPass = "1qazXSW@3edcVFR$";
$myDB = "BayouMatches"; 

//connection to the database
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer <hr> Error: " . mssql_get_last_message()); 

echo $dbhandle;
//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
  or die("Couldn't open database $myDB"); 

//declare the SQL statement that will query the database
$query = "SELECT * ";
$query .= "FROM BayouMatches ";
// $query .= "WHERE name='BMW'"; 

//execute the SQL query and return records
$result = mssql_query($query);

$numRows = mssql_num_rows($result); 
echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>"; 

//display the results 
while($row = mssql_fetch_array($result))
{
  echo "<li>" . $row["id"] . $row["name"] . $row["year"] . "</li>";
}
//close the connection
mssql_close($dbhandle);
?>