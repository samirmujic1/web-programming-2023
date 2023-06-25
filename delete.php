<?php

require_once("rest/dao/TodoDao.Class.php");

$UserID = $_REQUEST['UserID'];


$dao = new TodoDao();
$dao->delete($UserID);

echo "Deleted $UserID";

?>