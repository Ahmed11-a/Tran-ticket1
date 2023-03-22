<?php
    require_once '../Models/user.php';
    require_once 'connectDB.php';

    class AuthControllor{
        
        
        protected $db;

        public function login(User $user){
            $this->db=new connect;
            if($this->db->openConnection()){
                $query="select * from userd where Email='$user->email' and password='$user->password'";
                $result=$this->db->select($query);
                if($result===false){
                    echo "error in query";
                    return false;
                }
                else{
                    if(count($result)==0){
                    session_start();
                    $_SESSION["errMsg"] = "You have entered wrong email or password";
                    return false;
                    }
                    else{
                    session_start();
                    $_SESSION["userId"] =$result[0]["id"];
                    $_SESSION["userName"] = $result[0]["fname"];
                    $_SESSION["userEmail"] = $result[0]["Email"];
                    $_SESSION["userPass"] = $result[0]["password"];
                        return true;
                    }

                }

            }
            else{
                echo "Error in Database Connection";
                return false;
            }


        }

    public function register(User $user)
    {
        $this->db = new connect;
        if ($this->db->openConnection()) {
            $query = "insert into userd values ('','$user->fname','$user->lname','$user->email','$user->password',)";
            $result = $this->db->insert($query);
            if ($result != false) {
                session_start();
                $_SESSION["userId"] = $result;
                $_SESSION["userEmail"] = $user->email;
                $_SESSION["userpass"] = "$user->password";
                $this->db->closeConnection();
                return true;
            } else {
                $_SESSION["errMsg"] = "Full  first name is required";
                $this->db->closeConnection();
                return false;
            }
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }



    }


?>