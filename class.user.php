<?php

class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($fname,$lname,$name,$email,$pass,$phone,$year)
    {
       try
       {
           $new_password = password_hash($pass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO user  (Name, Email, Pass,FirstName,LastName,YearOld,PhoneNumber)
                                                       VALUES(:name, :email, :pass,:fname,:lname,:year,:phone)");
              
           $stmt->bindparam(":name", $name);
           $stmt->bindparam(":fname", $fname);          
           $stmt->bindparam(":lname", $lname); 
           $stmt->bindparam(":email", $email); 
           $stmt->bindparam(":pass", $pass); 
           $stmt->bindparam(":year", $year); 
           $stmt->bindparam(":phone", $phone); 

           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
//     public function login($uname,$umail,$upass)
//     {
//        try
//        {
//           $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
//           $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
//           $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
//           if($stmt->rowCount() > 0)
//           {
//              if(password_verify($upass, $userRow['user_pass']))
//              {
//                 $_SESSION['user_session'] = $userRow['user_id'];
//                 return true;
//              }
//              else
//              {
//                 return false;
//              }
//           }
//        }
//        catch(PDOException $e)
//        {
//            echo $e->getMessage();
//        }
//    }
 
//    public function is_loggedin()
//    {
//       if(isset($_SESSION['user_session']))
//       {
//          return true;
//       }
//    }
 
//    public function redirect($url)
//    {
//        header("Location: $url");
//    }
 
//    public function logout()
//    {
//         session_destroy();
//         unset($_SESSION['user_session']);
//         return true;
//    }
}
?>
