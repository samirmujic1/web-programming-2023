<?php

require_once("rest/dao/TodoDao.Class.php");

$dao = new TodoDao();
$op = $_REQUEST['op'];
$UserID = $_REQUEST['UserID'];

switch ($op) {
    case 'insert':
        $UserID = $_REQUEST['UserID'];
        $LastName = $_REQUEST['LastName'];
        
        $dao->add($UserID, $LastName);
        break;

    case 'delete':
        $UserID = $_REQUEST['UserID'];

        $dao->delete($UserID);
        echo "Deleted $UserID";
        break;

    case 'update':
        $UserID = $_REQUEST['UserID'];
        $LastName = $_REQUEST['LastName'];
        $FirstName = $_REQUEST['FirstName'];
        $Address = $_REQUEST['Address'];
        $City = $_REQUEST['City'];
        
        $dao->update($UserID, $LastName, $FirstName, $Address, $City);
        echo "UPDATED $UserID";
        break;
                
    case 'get':
    default:
        $results= $dao->get_all();
        print_r($results);
            break;
}


?>