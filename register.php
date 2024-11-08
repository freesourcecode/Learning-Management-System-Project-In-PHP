<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register An Account</title>

    <!-- Icons font CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo web_root;?>plugins/registration/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="register.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Firstname" name="FNAME">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Lastname" name="LNAME">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="ADDRESS">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Phone" name="PHONE">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Username" name="USERNAME">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="PASS">
                        </div>

                      
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="btnRegister">Submit</button>
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->




<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("register.php");

}

?> 