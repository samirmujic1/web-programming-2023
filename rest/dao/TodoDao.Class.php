<?php

class TodoDao{

    private $conn;

/** constructor of dao class*/

public function __construct(){

    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $schema = "webdev";

      $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}

//* Method used to read all Users objects from database*/

public function get_all(){

    $stmt = $this->conn->prepare("SELECT * FROM Users") ;
      $stmt->execute();
      return $stmt ->fetchAll(PDO::FETCH_ASSOC);


}

/** Method used to add Users to the database*/ 

public function add($UserID, $LastName) {

    $stmt = $this->conn->prepare("INSERT INTO Users(UserID, LastName, FirstName, Address, City) VALUES('$UserID', '$LastName', 'Ahmed', 'Hamdije Cemerlica 16', 'Sarajevo')");
    $stmt->execute();


}

/** Method used to delete Users for the database  */

public function delete($UserID){

    $stmt = $this->conn->prepare("DELETE FROM Users WHERE UserID=$UserID");
    $stmt->execute();
}

/** Method to Update parameters */

public function update($UserID, $LastName, $FirstName, $Address, $City){

    $stmt = $this->conn->prepare("UPDATE Users SET LastName='$LastName', FirstName='$FirstName', Address='$Address', City='$City' WHERE UserID=$UserID");
    $stmt->execute();

}


}


?>