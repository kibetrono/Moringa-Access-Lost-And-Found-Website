<?php  ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'connect.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="navigation.css">


    <title>Register-Form</title>

</head>
<body>
   
   <!--navigation-->

   <div class="navigation">
    <ul>
      <a href=''> <img  src="logo.png"></a> 

        <li><a href=""><i class='fa fa-address-card'></i> About Us</a></li>
        <li><a href=""><i class='fa fa-phone'></i> Contact Us</a></li>
        <li><a href="login.php"><i class='fa fa-users'></i> Login</a></li>
    </ul>
   </div> 
   <!--/navigation-->
    <form action="validateregister.php" method= "POST" enctype="multipart/form-data" autocomplete="off" >
<h1>Registration Form</h1>
<input type="text"  name="firstname" placeholder="Your first name" required><br>


<input type="email"   name="email" placeholder = "Your email address" required><br>

<input type="password"  name="password" placeholder="Password" required><br>
<input type="submit" name="submit" value="Register"><br>

</form>
   <!--footer-->
   <div class="footer1">

<div id="div1">
    <h3>Contact -us </h3>
<p><i class="fa fa-phone"></i> +254 728234794</p>
<p><i class="fa fa-address-card"></i> BURUBURUU PHASE 4 <br> OPPOSITE KAMAGRA <br>STATION 3RD FLOOR</p>
</div>


<div id="div2">
<form action="" autocomplete="off">
<h3>Comments</h3>
  <input type='teext' name='name' placeholder='Username'><br><br>
  <textarea type='text' name='comment' placeholder="Your Comment"></textarea><br>
  <button type="button" name="button">Send</button>
</form>
</div>

</div>
<!--/footer-->
</body>
</html>