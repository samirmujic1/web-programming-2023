<?php

require_once("rest/dao/TodoDao.Class.php");
$dao = new TodoDao();
$results= $dao->get_all();
print_r($results);

?>