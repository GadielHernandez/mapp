<?php
$base = "../";
require '../config/config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $json_params = file_get_contents('php://input',false);
  $data = json_decode($json_params, true);
  switch ($data['query']) {
    case 'SelectProducts':
      $sql = 'SELECT id_products, name, description FROM products';
      $result = Query::execute($sql);
      header('Content-Type: application/json');
      echo json_encode($result);
      break;

    case 'InsertProducts':
      $statement = $con->prepare("INSERT INTO products(name,description) VALUES (:name,:description)");
      $statement->bindParam(':name', $data['name'], PDO::PARAM_STR);
      $statement->bindParam(':description',$data['description'], PDO::PARAM_STR);
      $statement->execute();
      break;
  }
}
?>
