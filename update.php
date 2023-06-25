<?php

require_once("rest/dao/TodoDao.Class.php");

$UserID = $_REQUEST['UserID'];
$LastName = $_REQUEST['LastName'];
$FirstName = $_REQUEST['FirstName'];
$Address = $_REQUEST['Address'];
$City = $_REQUEST['City'];



$dao = new TodoDao();
$dao->update($UserID, $LastName, $FirstName, $Address, $City);

echo "UPDATED $UserID";


?>