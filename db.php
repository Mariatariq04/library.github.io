
<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=library_managment_system","root","");
        
    }catch(PDOException $e){
        echo "Error";
      
    }
}

}