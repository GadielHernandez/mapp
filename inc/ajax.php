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

    case 'InsertMerma':
      $statement = $con->prepare("INSERT INTO percent(id_product,percent) VALUES (:id,:percent)");
      $statement->bindParam(':id', $data['id'], PDO::PARAM_INT);
      $statement->bindParam(':percent',$data['percent'], PDO::PARAM_STR);
      $statement->execute();
      break;

    case 'getPercents':
      $sql = 'SELECT products.id_products, products.name, percent.percent FROM products INNER JOIN percent ON products.id_products = percent.id_product WHERE products.id_products = ' . $data['id'];
      $result = Query::execute($sql);
      header('Content-Type: application/json');
      echo json_encode($result);
      break;

    case 'calculateMerma':
      $sql = 'SELECT AVG(percent) FROM percent WHERE id_product = ' . $data['id'];
      $result = Query::execute($sql);
      header('Content-Type: application/json');
      echo json_encode($result);
      break;

    case 'SelectUsers':
      $sql = 'SELECT user_id, name, privileges FROM users';
      $result = Query::execute($sql);
      header('Content-Type: application/json');
      echo json_encode($result);
      break;

    case 'updateUser':
      $statement = $con->prepare("UPDATE users SET privileges = :privileges WHERE user_id = :id");
      $statement->bindParam(':id', $data['id'], PDO::PARAM_INT);
      $statement->bindParam(':privileges',$data['privileges'], PDO::PARAM_STR);
      $statement->execute();
      break;
  }
}
?>
