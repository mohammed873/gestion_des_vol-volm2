<?php
include 'admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maroc airlines</title>
    <link rel="stylesheet" href="style_main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class=" header-container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Morocco AirLines</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                       <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about_us.php">About us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="profile.php">profile</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Log out</a>
                         </li>
                    </ul>
                </form>
            </div>
    </nav>
    <br><br><br>
            <div class="entry-title">
                <h3><a href="admin_panel.php">Admin Panel</a></h3>
            </div>
</div>

<div class="col-md-5 p-3" style="margin: auto;box-shadow: 0px 0px 11px !important;">
        <h2 class="text-center p-3">add new admin</h2>
        <?php if(count($error) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach($error as $error): ?>
                   <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>
         <?php endif; ?>
         <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
                <li><?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?></li>
            </div>
         <?php endif; ?>
        <br>
        <form action="add_admins.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="admin_name">Admin name</label>
                    <input type="text" name="admin_name" class="form-control" placeholder="admin name"  > 
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email" > 
                </div>
            </div>
            <div class="row">   
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" > 
                </div>
                <div class="form-group col-md-6">
                    <label for="confpassword"> Confirm password</label>
                    <input type="password" name="confpassword" class="form-control" placeholder="confir mpassword" > 
                </div>
            </div>
                <div class="form-group">
                    <input type="file" name="picture" class="costum file" > 
                </div>
               
            <div class="form-group">
             <button name="add_admin" class="btn btn-primary btn-block">add admin</button>
        </form>
    </div>


 <!-- jquery link -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>