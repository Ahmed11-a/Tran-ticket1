<?php 

require_once '../Models/station.php';
require_once '../Controllers/connectDB.php';

class StationtController
{
    protected $db;


    public function getStation()
    {
         $this->db=new connect;
         if($this->db->openConnection())
         {
            $query="select * from stationdb";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }

    public function addStation(station $STION)
    {
        $this->db = new connect;
        if ($this->db->openConnection()) {
            $query = "insert into stationdb values ('','$STION->stationF','$STION->stationT','$STION->FirstCp','$STION->SecondCp','$STION->Date','$STION->Time')";
            return $this->db->insert($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    public function getUser()
    {
        $this->db = new connect;
        if ($this->db->openConnection()) {
            $query = "select * from userd";
            return $this->db->select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }


     public function addUser(user $user)
    {
        $this->db = new connect;
        if ($this->db->openConnection()) {
            $query = "insert into userd values ('','$user->Fname','$user->lname','$user->email','$user->password')";
            return $this->db->insert($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }
}
?>

