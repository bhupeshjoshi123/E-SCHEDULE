<!DOCTYPE html>
<html>
<head>
	   <title>ESHEDULE</title>
	 
	<link rel="stylesheet" type="text/css" href="frontpage1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>
       <body>
	
	             <header>
		
		             <h1><b>E      -      S            C           H            E            D            U            L            E</b></h1>

		               <nav>
		         <h2>
		    	<ul id="list1" >
				<li class="liclass1"><a class="same1">CLASS ROUTINE </a>
				     <br>
                     <ul>    
					    <li class="liclass"><a class="ame"href="firstsemister.php">I/I </a></li>
						<li class="liclass"><a class="ame"href="ce3rdsemroutine.php">I/II </a></li>
						<li class="liclass"><a class="ame"href="5thsem.php">I/III</a></li>
						<LI class="liclass"><a class="ame"href="7thsem.php">I/IV</a></LI>
					</ul>
				</li>
				
				<li class="liclass1"><a class="same1" href="events.php"> NOTICE  </a> </li>
				<li class="liclass1"><a class="same1" href="map.php"> MAP </a></li>
				<li class="liclass1"><a class="same1">OTHERS</a>
					<br>
				    <ul>    
					    <li class="liclass"><a class="ame"href="gallery.php">Gallery </a></li>
						<li class="liclass"><a class="ame"href="ABOUTUS.php">About Us</a></li>
						<li class="liclass"><a class="ame"href="logout.php">Log Out</a></li>
				
					</ul></li>
	
			
			</ul>
        </h2>
        </nav>
    </header>
    
	    <div class="divid">  </div>
	   
	    <br>
	    <br>
	    <br>
	    <br>
<div id="100">	    
<div id="login";>
        <form  id = "form1" Action="login.php" method="post">
    	

	    <label class="label1"><H class = "headinglog"><B> LOG IN</B> </h></label>
	    <br>
	    <br>
	    <input type="email" placeholder="email" name="email">
	    <br>
	    <br>
	   <input type="password" placeholder="Enter password" name="pass">
	    <br>
	    <br>
        <div id="login1">
	    <button id="loginlast"><a id="l" href="homepage.html">Log In</a></button>

       
	    </div>
       
	</form>
     <br>
     <br>
     <br>
     
	  
        <form action="register.php" method="POST">
        <label class="label1"><H class="headinglog"><b>REGISTRATION </b></H></label>
        <br>
        <br>
        <input type= "name" method="POST" placeholder="Enter name" name="name">
        <br>
	    <br>
	    <input type="email"method="POST" placeholder="Enter Email" name="email">
	    <br>
	    <br>
	    <input type="password" method="POST" placeholder="Enter password" name="pass">
	    <br>
	    <br>
	    <input type="password" method="POST" placeholder="re-enter password" name="repass">
	    <br>
	    <br>
        <div id="login1">
	    <button id="loginlast"><a id="l" href="">Sign up</a></button>

   </form> 
  </div> 
  
 

	 
</body>
</html>