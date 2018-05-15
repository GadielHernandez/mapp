<?php
class Query{
  private $con;
  static function execute($sql){
    $con = DB::getConnection();
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    //$jsonResult = json_encode($result);
    //return $jsonResult;
  }
}
 ?>
