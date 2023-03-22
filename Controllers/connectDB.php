<?php

use LDAP\Result;

     class connect{
    public $dbHost="localhost";
    public $dbUser="trrrr";
    public $dbPassword="123456789";
    public $dbName="db_train";
    public $connection ;

    public function openConnection()
    {
           $this->connection=new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
           if($this->connection->connect_errno){
               echo "Error in connection";
               return false;
           }
           else{
               return true;
           }

    }
    

     
     public function closeConnection(){
         if($this->connection){
             $this->connection->close();
         }
         else{
             echo "Connection is not opend";
         }
        }


         public function select($qry){


            $result=$this->connection->query($qry);
            if(!$result){
                    echo "error :" .mysqli_error($this->connection);

            }
            else{

                 return $result->fetch_all(MYSQLI_ASSOC);
            }
         }


    public function insert($qry)
    {
        $result = $this->connection->query($qry);
        if (!$result) {
            echo "Error : " . mysqli_error($this->connection);
            return false;
        } else {
            return $this->connection->insert_id;
        }
    }



     }
    


?>