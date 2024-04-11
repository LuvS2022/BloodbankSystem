<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
	<div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>
            <a class="navbar-brand" href="index.php"><img src="image/blood-donate.jpg" width="30" height="30" class="rounded-circle">Hospitals System</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="bloodinfo.php">Add blood info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="bloodrequest.php">Blood Request</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="abs.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>
            <a class="navbar-brand" href="index.php"><img src="image/blood-donate.jpg" width="30" height="30" class="rounded-circle">Receiver's System</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="sentrequest.php">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

         <?php }  else { ?>

            <a class="navbar-brand" href="index.php" style="padding-left: 30%;"><img src="image/blood-donate.jpg" width="30" height="30" class="rounded-circle">Welcome to Blood Bank System</a>
        <?php } ?> 
       </div>
    </div>
</nav>