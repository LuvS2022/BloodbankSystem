<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Bank System"; ?>
<?php require 'head.php'; ?>

<body>
    <!-- include the header.php -->
    <!-- note that require is the keyword which is helping to call other files  -->
    <?php require 'header.php'; ?>
    <!-- start of mid section -->
    <div class="container " style="padding-top: 20px; padding-bottom : 20px;">
        <div class="row">
            <div class="col md 6">
            <img style="padding-top:25px;" src="image/bg.png" class="card-img-top" height="60%" width="10%">
            </div>
            <div class="col md 6">
                <style> .hov:hover{background-color: red;}</style>
                <ul class="navbar-nav ml-auto" style="padding-top: 80px;">
                    <li class="nav-item">
                    <h1 style="color: red;padding-left:150px;"><i>kindly choose</i></h1>
                        <a class="nav-link btn btn-light hov" href="abs.php"><i class="fa fa-ambulance"  style="font-size:20px;color:green"></i> Available blood samples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light hov" href="register.php"><i class="fa fa-address-card-o" style="font-size:24px"></i><i> Register</i>  : Hostitals/Receivers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light hov" href="login.php"><i class="fa fa-sign-in" style="font-size:24px"></i><i> Login</i>  : Hostitals/Receivers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php require 'footer.php'; ?>

</body>

</html>