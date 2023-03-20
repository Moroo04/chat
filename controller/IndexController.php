<?php


class IndexController extends AbstractBase
{

  public function loginAktion(){
    unset($_SESSION['unique_id']);
  }

  public function registerAktion(){
    
  }

  public function zeigeChatAktion(){
    if(!isset($_SESSION['unique_id'])){
      header('Location: index.php');
    }
    
  }

 

  
}