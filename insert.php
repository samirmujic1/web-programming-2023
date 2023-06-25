<?php

require_once("rest/dao/TodoDao.Class.php");

$UserID = $_REQUEST['UserID'];
$LastName = $_REQUEST['LastName'];

$dao = new TodoDao();
$results= $dao->add($UserID, $LastName);
print_r($results);



?>