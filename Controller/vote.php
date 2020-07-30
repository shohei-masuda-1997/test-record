<?php

class Vote{
  private $_db;

  public function __construct(){
    try{
      $this->_db=new PDO("mysql:host=******;dbname=******","******","******"); 
      $this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);                                  
    }catch(Exception $e){
      echo $e->getMessage();
      exit;
    }
  }

  public function vote(){
    try{
      $this->_validate();
      $this->_save();
      header("Location:http://".$_SERVER["HTTP_HOST"]."/test-record/public_html/result.php");
    }catch(Exception $e){
      echo $e->getMessage();
      header("Location:http://".$_SERVER["HTTP_HOST"]."/test-record/public_html/index.php");
    }
  }

  private function _validate(){
    if(!isset($_POST["answer"])){
      throw new Exception("err:invalid answer!");
    }
  }

  private function _save(){
    $sql="insert into answers(answer,created) values(:answer,now())";
    $stmt=$this->_db->prepare($sql);
    $stmt->bindValue(":answer",$_POST["answer"],PDO::PARAM_INT);
    $stmt->execute();
  }

  public function getResults(){
    $data=array_fill(0,5,0);
    $sql="select answer,count(id) from answers group by answer";
    $stmt=$this->_db->query($sql);
    $stmt->execute();

    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($results as $result){
      $data[$result["answer"]]=$result["count(id)"];
    }
    return $data;
  }
}
