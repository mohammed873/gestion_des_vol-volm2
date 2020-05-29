<?php

include 'config.php';

$error= array();

//signning up
if(isset($_POST['signup'])){
    $username=($_POST['username']);
    $email=($_POST['email']);
    $password=$_POST['password'];
    $confpassword=$_POST['confpassword'];
    $picture=$_FILES['picture'];

    //validation
    if(empty($username)){
        $error['username']="Username required";
    }
    if(empty($email)){
        $error['email']="Email required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email']="Email adress is not valid";
    }
    if($password !== $confpassword){
        $error['password']="The two passwords don't match";
    }
    if(empty($password)){
        $error['password']="Password required";
    }
    if(empty($picture)){
        $error['picture']="Picture required";
    }

   $emailQuery = "SELECT * FROM users WHERE email = ? LIMIT 1";
   $stm=$con->prepare($emailQuery);
   $stm->bind_param('s',$email);
   $stm->execute();
   $result=$stm->get_result();
   $usercount=$result->num_rows;

   if($usercount > 0){
     $error['email']="Email already exists";
   }
 
   //checking if the number of error is 0
   if(count($error)===0){
    
        $picture=$_FILES['picture']['name'];
        $upload="uploads/".$picture;
        //storing pictures to the uploads file
        move_uploaded_file($_FILES['picture']['tmp_name'], $upload);

        $sql2="INSERT INTO `users`(username,email,password,picture) VALUES('$username','$email','$password','$upload')";
        if(mysqli_query($con,$sql2)){
            //set falsh message
            $_SESSION['message']="You are signned up";
        }
   }else {
      // wrong info
   }
}


// logging in 
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    //validation
    if(empty($username)){
        $error['username'] = "username required";
    }
    if(empty($password)){
        $error['password'] = "password required";
    }

    if (count($error)===0) {

        $sql = "SELECT * FROM `users` WHERE username = ? LIMIT 1 ";
        $stm = $con->prepare($sql);
        $stm->bind_param('s',$username);
        $stm->execute();
        $result = $stm->get_result();
        $user = $result->fetch_assoc();
         
        if(password_verify($password , $user['password'])){
            //login success
        }
       
        else{
            $error['login_fail'] = "wrong credition";
        }
    }
   
}

?>t