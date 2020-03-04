
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ESHEDULE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="frontpage1.css">
	
</head>
<body>
	
	<header>
		
		<h1><b>E      -      S            C           H            E            D            U            L            E</b></h1>

		<nav>
		<h2>

			<ul id="list1" >
				<li class="liclass1"><a class="same1"href="frontpage.php">CLASS ROUTINE </a>
				<br>

					<ul>    
					    <li><a class="ame"href="firstsemister.php">I/I </a></li>
						<li><a class="ame"href="ce3rdsemroutine.php">I/II </a></li>
						<li><a class="ame"href="5thsem.php">I/III</a></li>
						<LI><a class="ame"href="7thsem.php">I/IV
					</ul>
				</li>
				
				<li class="liclass1"><a class="same1" href="frontpage.php"> EVENTS </a> </li>
				<li class="liclass1"><a class="same1" href="map.php"> MAP </a></li>
				<li class="liclass1"><a class="same1" href="frontpage.php">OTHERS</a>
					<br>
				    <ul>    
					    <li><a class="ame"href="gallery.php">Gallery </a></li>
						<li><a class="ame"href="">About Us</a></li>
						<li><a class="ame"href="logout.php">Log Out</a></li>
				
					</ul></li>
	
			
			</ul>
        </h2>
        </nav>
    </header>
     <div class="divid">  </div>
    <br>
    <br>
    <div class ="divider"><h1> YOU ARE WELCOME TO E-SCHEDULE</h1></div>

    <div class = "divider"><h1 > <?php
         echo ($_SESSION['name']);
             ?>
    </h1>
       
</div>


</body>
</html>
	    