<?php
namespace Arden;
use PDO;

class DB {
  private $pdo = null;
  private $stmt = null;

  function __construct(){
    try {

		include 'configure.php';
		//$this->$pdo=new PDO("mysql:host=$host;dbname=$db_name",$db_user,$db_password);
		$this->pdo=new PDO("mysql:host=$host;dbname=$db_name",$db_user,$db_password, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
		
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  function __destruct(){
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  function select($sql, $cond=null){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
	 //print_r($this->pdo->errorInfo());
    } catch (Exception $ex) { die($ex->getMessage()); }
    $this->stmt = null;

	//echo "2223";
	//print_r($result);



    return $result;
  }

  function insert($name,$email,$message)
  {
  try {
  	  	 $this->insertstmt = $this->pdo->prepare("INSERT INTO contact_form (name, email, message)
	  VALUES (:name, :email, :message)");
	  $this->insertstmt->bindParam(':name', $name);
	  $this->insertstmt->bindParam(':email', $email);
	  $this->insertstmt->bindParam(':message', $message);
	  $this->insertstmt->execute();
	   } catch (Exception $ex) { die($ex->getMessage()); }
    $this->insertstmt = null;
  }



}
?>