<?php

include "config.php";

$error= array();

//inserting new admins
if(isset($_POST['add_admin'])){
    $admin_name=($_POST['admin_name']);
    $email=($_POST['email']);
    $password=$_POST['password'];
    $confpassword=$_POST['confpassword'];
    $picture=$_FILES['picture'];

    //validation
    if(empty($admin_name)){
        $error['admin_name']="admin name required";
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

   $emailQuery = "SELECT * FROM admins WHERE email = ? LIMIT 1";
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
        $upload="admin_uploads/".$picture;
        //storing pictures to the uploads file
        move_uploaded_file($_FILES['picture']['tmp_name'], $upload);

        $sql2="INSERT INTO `admins`(admin_name,email,password,picture) VALUES('$admin_name','$email','$password','$upload')";
        if(mysqli_query($con,$sql2)){
            //set falsh message
            $_SESSION['message']="You are successfuly added an admin";
            header('location:admin_panel.php');
        }
   }else {
      // wrong info
      $_SESSION['message']="You have inserted wrong data";
   }
}


//adding new flights
if(isset($_POST['add_flight'])){
    $flying_from=($_POST['flying_from']);
    $flying_to=($_POST['flying_to']);
    $departing_date=$_POST['departing_date'];
    $returning_date=$_POST['returning_date'];
    $seats=$_POST['seats'];

    //validation
    if(empty($flying_from)){
        $error['flying_from']="flying from required";
    }
    if(empty($flying_to)){
        $error['flying_to']="flying to required";
    }
    if(empty($departing_date)){
        $error['departing_date']="departing date required";
    }
    if(empty($returning_date)){
        $error['returning_date']="returning date required";
    }
    if(empty($seats)){
        $error['seats']="seats number required";
    }

   //checking if the number of error is 0
   if(count($error)===0){
    
        $sql2="INSERT INTO `flights_list`(flyingFrom,flyingTo,departingDate,returningDate,seats) VALUES('$flying_from','$flying_to','$departing_date','$returning_date','$seats')";
        if(mysqli_query($con,$sql2)){
            //set falsh message
            $_SESSION['message']="You have successfuly added a flight";
            header('location:admin_panel.php');
        }
   }else {
      // wrong info
      $_SESSION['message']="You have inserted wrong data";
   }
}
?>






        