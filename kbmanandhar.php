<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="teachersroutine.css">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title> TEACHERS ROUTINE</title>

</head>

	<body>
		<style>

		table,th,td{
			border:1px solid black
		}
		table{
			border-collapse: collapse;
             width: 100%;
			width:100%;
		
			height:50px;
			font-size:50px;
		}
		
		</style>

   <h1>
        	<CENTER>YOUR SCHEDULE TODAY</CENTER>
        	<a id = "home" href="frontpage.php">HOMEPAGE</a>

        	<form action="notice.php" method="POST">

<input type="text" name="notice" placeholder="LEAVE NOTICE FOR STUDENTS" method="POST">


</form>
        </h1>
        
       
		<h2> DR KB MANANDHAR </h2>	
	</body>
	</html>
	

	<?php
		 date_default_timezone_set('Asia/Kathmandu');
		$day= date("w");
		$timeofday = date("G");
		
		
		
		if ($day==6 && ($timeofday==0||$timeofday==10)){
				?>	
			<h2>AT THIS CURRENT TIME 9-11 PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>9-11<B></th>
								<th><B>9<B></th>
					<th><B>404<B></th>
					<th><B>CE<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
						<th><B>11-12<B></th>
							<th><B>9<B></th>
					<th><B>302<B></th>
					<th><B>CE<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>

					<?php


			
		}
		elseif ($day==0 && $timeofday==11) {
					?>	
			<h2>AT THIS CURRENT TIME 11-12AM YOU HAVE CLASSES AT</h2>
			?><table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>10-11<B></th>
								<th><B>9<B></th>
					<th><B>302<B></th>
					<th><B>CE<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<h2> YOU HAVE LUNCH BREAK FROM 12-1PM.</h2>
					

					<?php
			
		}
		elseif($day==0 && $timeofday==12){
				?>	
			<h2>AT THIS CURRENT TIME 12-1</h2>
			<h2>YOU HAVE LUNCH BREAK FROM 12-1PM. ENJOY THE MEAL</h2>
			
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>1-3<B></th>
								<th><B>8<B></th>
					<th><B>205<B></th>
					<th><B>CE<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>

					<?php

		}
		elseif($day==0 && ($timeofday==12||$timeofday==14)){
			?>	
			<h2>AT THIS CURRENT TIME 1-3PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>1-3<B></th>
								<th><B>7<B></th>
					<th><B>301<B></th>
					<th><B>EE<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>AFTER THIS CLASS , YOU HAVE YOUR DAY OFF</h2>
					
					

					<?php
				}
				else{
					?>
					<h2>YOU HAVE YOUR DAY OFF! ENYOY</h2>
					<?php
				}

					if ($day==1 && ($timeofday==9||$timeofday==10)){
				?>	
			<h2>AT THIS CURRENT TIME 9-11 PM YOU HAVE CLASSES AT</h2>
			?><table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>9-11<B></th>
								<th><B>9<B></th>
					<th><B>301<B></th>
					<th><B>CE<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
					<br>
					<h2>YOU HAVE LUCH BREAK AFTER THIS CLASS!! ENJOY YOUR MEAL</h2>
				

					<?php


			
		}
		if ($day==1 && $timeofday==11) {
					?>	
			<h2>AT THIS CURRENT TIME 11-12AM YOU HAVE LUNCH BREAK!! ENJOY YOUR MEAL</h2>
			
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					
					 <table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
						<th><B>12-2<B></th>
							<th><B>10<B></th>
					<th><B>40<B></th>
					<th><B>CE<B></th>
					<th><B>IV/I<B></th>
					</tr>

					</table> 

					<?php
			
		}
		elseif($day==1 && ($timeofday==12||$timeofday==13)){
				?>	
			<h2>AT THIS CURRENT TIME 12-2 YOU HAVE CLASS AT</h2>
			
			 <table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>9<B></th>
					<th><B>302<B></th>
					<th><B>CS<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>AFTER THIS CLASS, YOU HAVE YOUR DAY OFF! ENJOY!!</h2>
					
					<?php

		}
		elseif($day==1 ){
			?>	
			<h2>YOU HAVE YOUR DAY OFF!! ENJOY!!</h2>
			
					

					<?php
				}







				elseif ($day==2 && ($timeofday==9||$timeofday==10)){
				?>	
			<h2>AT THIS CURRENT TIME 9-11 PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>9-11<B></th>
								<th><B>12<B></th>
					<th><B>404<B></th>
					<th><B>CIVIL<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
						<th><B>10-11<B></th>
							<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>CHEMICAL<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>

					<?php


			
		}
		elseif ($day==2 && $timeofday==11) {
					?>	
			<h2>AT THIS CURRENT TIME 11-12AM YOU HAVE CLASSES AT</h2>
			?><table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>10-11<B></th>
								<th><B>6<B></th>
					<th><B>302<B></th>
					<th><B>GEOMATICS<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<h2> YOU HAVE LUNCH BREAK FROM 12-1PM.</h2>
					

					<?php
			
		}
		elseif($day==2 && $timeofday==12){
				?>	
			<h2>AT THIS CURRENT TIME 12-1</h2>
			<h2>YOU HAVE LUNCH BREAK FROM 12-1PM. ENJOY THE MEAL</h2>
			
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>1-2<B></th>
								<th><B>9<B></th>
					<th><B>205<B></th>
					<th><B>CS<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>

					<?php

		}
		elseif($day==2 && ($timeofday==13||$timeofday==14)){
			?>	
			<h2>AT THIS CURRENT TIME 1-3PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>1-3<B></th>
								<th><B>7<B></th>
					<th><B>301<B></th>
					<th><B>EE<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>YOUR NEXT CLASS IS AT</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>3-4<B></th>
								<th><B>7<B></th>
					<th><B>301<B></th>
					<th><B>Es<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>

					
					

					<?php
				}
				elseif($day==2){
					?>
					<h2>YOU HAVE YOUR DAY OFF! ENYOY</h2>
					<?php
				}






				elseif ($day==3 && ($timeofday==9||$timeofday==10)){
				?>	
			<h2>AT THIS CURRENT TIME 9-11 PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>9-11<B></th>
								<th><B>8<B></th>
					<th><B>404<B></th>
					<th><B>MECHANICAL<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>AFTER THIS CLASS, YOU HAVE YOUR LUCNCH BREAK!! ENJOY YOUR MEAL!!</h2>

			<!-- 		<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
						<th><B>10-11<B></th>
							<th><B>9<B></th>
					<th><B>302<B></th>
					<th><B>CS<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table> -->

					<?php


			
		}
		elseif ($day==3 && $timeofday==11) {
					?>	
			<h2>AT THIS CURRENT TIME 11-12AM YOU HAVE YOUR LUNCH BREAK!! ENJOY YOUR MEAL</h2>
			<br>
			<h2>AFTER YOUR LUNCH BREAK, YOU HAVE YOUR CLASS AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>BIOTECH<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
					

					<?php
			
		}
		elseif($day==3 && ($timeofday==12||$timeofday==13)){
				?>	
			<h2>AT THIS CURRENT TIME 12-2, YOU HAVE YOUR CLASS AT</h2>
				<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>BIOTECH<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
			
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>2-4<B></th>
								<th><B>9<B></th>
					<th><B>205<B></th>
					<th><B>CE<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>

					<?php

		}
		
				elseif($day==3){
					?>
					<h2>YOU HAVE YOUR DAY OFF! ENYOY</h2>
					<?php
				}




						elseif ($day==4 && ($timeofday==9||$timeofday==10)){
				?>	
			<h2>AT THIS CURRENT TIME 9-11 PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>9-11<B></th>
								<th><B>8<B></th>
					<th><B>404<B></th>
					<th><B>MECHANICAL<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>AFTER THIS CLASS, YOU HAVE YOUR LUCNCH BREAK!! ENJOY YOUR MEAL!!</h2>

			<!-- 		<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
						<th><B>10-11<B></th>
							<th><B>9<B></th>
					<th><B>302<B></th>
					<th><B>CS<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table> -->

					<?php


			
		}
		elseif ($day==4 && $timeofday==11) {
					?>	
			<h2>AT THIS CURRENT TIME 11-12AM YOU HAVE YOUR LUNCH BREAK!! ENJOY YOUR MEAL</h2>
			<br>
			<h2>AFTER YOUR LUNCH BREAK, YOU HAVE YOUR CLASS AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>BIOTECH<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
					

					<?php
			
		}
		elseif($day==4 && ($timeofday==12||$timeofday==13)){
				?>	
			<h2>AT THIS CURRENT TIME 12-2, YOU HAVE YOUR CLASS AT</h2>
				<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>BIOTECH<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
			
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>2-4<B></th>
								<th><B>9<B></th>
					<th><B>205<B></th>
					<th><B>CE<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>

					<?php

		}
		
				elseif($day==4){
					?>
					<h2>YOU HAVE YOUR DAY OFF! ENYOY</h2>
					<?php
				}





						elseif ($day==5 && ($timeofday==9||$timeofday==10)){
				?>	
			<h2>AT THIS CURRENT TIME 9-11 PM YOU HAVE CLASSES AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>9-11<B></th>
								<th><B>8<B></th>
					<th><B>404<B></th>
					<th><B>MECHANICAL<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>
					<br>
					<h2>AFTER THIS CLASS, YOU HAVE YOUR LUCNCH BREAK!! ENJOY YOUR MEAL!!</h2>

			<!-- 		<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
						<th><B>10-11<B></th>
							<th><B>9<B></th>
					<th><B>302<B></th>
					<th><B>CS<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table> -->

					<?php


			
		}
		elseif ($day==5 && $timeofday==11) {
					?>	
			<h2>AT THIS CURRENT TIME 11-12AM YOU HAVE YOUR LUNCH BREAK!! ENJOY YOUR MEAL</h2>
			<br>
			<h2>AFTER YOUR LUNCH BREAK, YOU HAVE YOUR CLASS AT</h2>
			<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>BIOTECH<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
					

					<?php
			
		}
		elseif($day==5 && ($timeofday==12||$timeofday==13)){
				?>	
			<h2>AT THIS CURRENT TIME 12-2, YOU HAVE YOUR CLASS AT</h2>
				<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>12-2<B></th>
								<th><B>7<B></th>
					<th><B>302<B></th>
					<th><B>BIOTECH<B></th>
					<th><B>III/I<B></th>
					</tr>

					</table>
			
					<br>
					<h2>YOUR NEXT CLASS IS</h2>
					<table>
					<tr bgcolor="white">
						<th><B>TIME<B></th>
					<th><B>BLOCK<B></th>
					<th><B>ROOM NO<B></th>
					<th><B>GROUP<B></th>
					<th><B>LEVEL<B></th>
					</tr>
					<tr bgcolor="#AAB7B8">
							<th><B>2-4<B></th>
								<th><B>9<B></th>
					<th><B>205<B></th>
					<th><B>CE<B></th>
					<th><B>II/I<B></th>
					</tr>

					</table>

					<?php

		}
		
				elseif($day==5){
					?>
					<h2>YOU HAVE YOUR DAY OFF! ENYOY</h2>
					<?php
				}









?>

