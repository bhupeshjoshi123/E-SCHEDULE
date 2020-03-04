
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>notice from teachers</title>
</head>
<body>

<h1>NOTICES AND ANNOUNCEMENT FROM TEACHERS</h1>


<br>
<h2>
<?php 
   

 include('connect.php');

$query = "SELECT * FROM noticetbl order by time desc"; 

$lol = mysqli_query($con,$query);

while($row = mysqli_fetch_array($lol, MYSQLI_ASSOC)){
       echo '<h2>';
       echo '<ul class = "ppp">';
       echo '<li class = "ooo">';
       echo $row['time'];
       echo '</li>';
       echo "<pre>";
       echo '<li>';
       echo $row['notice'];
       echo '</li>';
       echo '</ul>';
       echo '<h2>';
}
?> 

 
</body>
</html>
 
<style>

body{
  background:lightblue;
}
h1{        font-family:"Lucida Sans Unicode", "Lucida Grande  ", sans-serif;;
           font-size:65px;
           padding:0px;
           margin:0px;
           text-align:center;
           background-color:#008080;
           height:120px;
           text-decoration:none;  
}
ul{

  font-size:45px;
}
li{
  font-size:35px;
}

</style>