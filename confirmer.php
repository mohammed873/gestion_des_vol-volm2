<?php
include 'action.php';

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
            <div class="inner-container">
                <div id="logo">
                <h1 id='fixed'><a href="#">Moroco AirLines</a></h1>
               </div>
                <div id="search">
                    <input type="text" placeholder="Search for you flite ">
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about_us.php">About us</a></li>
                    </ul>
                </div>
            </div>
            <div class="entry-title">
                <h3>Why Morocco AirLines</h3>
                <p><a href="about_us.php">Discover more</a></p>
            </div>
        </div>


        <br><br>
        <?php if($modifier==true){
     die("<div id='messageConfirmation' class='add' >Bien Confirmer $fullName <a href='about_us.php' >Show More !</a>");
 }
        if($ajouter):
             echo "<div class='add'> Your welcome mister $fullName</div>";
        endif; ?>
        <br>
        <br>
        <br>

        <div class="confirm_header">
            <img src="https://www.hipi.info/wp-content/uploads/2014/07/1500x500-airplane-flying-twitter-header-4-1024x341.jpg" alt="">
        </div>
        <div class="confirm">
          <h2>This is your flight details</h2>
          <hr><br>
          <p> Id Reservation : <strong><?php echo $IdReservation;?></strong></p>
          <p> Full Name : <strong><?php  echo $fullName;?></strong></p>
          <p> numero Telephone : <strong><?php echo $numTelephone;?></strong></p>
          <p> email : <strong> <?php echo $email;?></strong></p>
          <p> numero Passport : <strong> <?php echo $numPassport;?></strong></p>
          <p> flying From : <strong> <?php echo $flyingFrom;?></strong></p>
          <p> flying To : <strong> <?php echo $flyingTo;?></strong></p>
          <p> departing Date : <strong> <?php echo $departingDate;?></strong></p>
          <p> returning Date : <strong> <?php echo $returningDate;?></strong></p>
          <p> Seats Adult : <strong> <?php echo $Adult;?></strong></p>
          <p> Seats children : <strong> <?php echo $children;?></strong></p>
          <p> travel class: <strong> <?php echo $TravelClass;?></strong></p>
          <p> price : <strong> <?php echo $Price;?></strong></p>
          <div id="c_bien_confirm"><a href="confirmer.php?idAir=<?php echo $idAir;?>&seats=<?php echo $seats ;?>" name="congirmer" id="confirmer">Confirmer</a></div>
          </div>
        </div>

        <div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>

        <div class="footer-div">
               <div class="footer-item">
                    <div id="icon">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                    <br>
                    <p>all right reseverd from youcode</p>
              </div>
              <div class="footer-item">
                  <input type="text"  placeholder="Enter your name" id="feedback-sender"><br><br>
                  <textarea name="" id="feedback-area" placeholder="enter your feedback"></textarea><br>
                  <div id="feedback-error"><p></p></div><br>
                  <button type="submit" id="btn-feedback">submit feedback</button>
              </div>
         </div>


        <!-- jquery link -->
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script>

        </script>
    </body>
</html>