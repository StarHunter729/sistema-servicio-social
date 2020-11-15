<?php

require_once $_SERVER['DOCUMENT_ROOT']."/../private/core/Database.php";

if (session_status() == PHP_SESSION_NONE ) 
{
    session_start();
}

class Admin extends Database {
    
    public function login_admin() {
        try {
			$email = $_POST['email'];
            $pass = $_POST['pass'];
            
            $query = "SELECT email, password FROM administradores WHERE email = :email";
			$stmt = $this->conn->prepare($query);
            $stmt ->bindParam(':email', $email, PDO::PARAM_STR);
				
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			if ($stmt->rowCount() >= 1) {    
                $admin = $stmt->fetch();
                if($pass == $admin['password'])
                {
                    $_SESSION['login'] = true;
                }
			}
		}
		catch(PDOException $e) {
			echo $e->getMessage();
        }
    }
    
}
