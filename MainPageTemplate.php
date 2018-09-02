<?php

$dbconnect=mysqli_connect("localhost","root","","avibe");

$sql="SELECT * FROM `upload_data`";
$query=mysqli_query($dbconnect,$sql);

$rows = mysqli_num_rows($query);

$NamesTV= array();
$ImagesTV = array();
$i=0;

while($rs=mysqli_fetch_assoc($query)){

	$NamesTV[$i]=strtoupper($rs['title']);
	$ImagesTV[$i]=$rs['img_cover'];
	$DirLocation[$i]=$rs['location'];
	$i++;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MainPage</title>
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
<script src="jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function(){
	   $(".Ele").hide();
	   $('.ImgX').hide();
	   $('.Titlz').hide();
	   $(".BacX").css("opacity","1");

	    $(".Ele").stop().slideDown(1000);


	   $(".Ele").hover(
	                function() {
	                    var d=$(this).attr("id");
	                    $("#"+d+"> .ImgX").stop().slideDown(200);
	                    $("#"+d+"> .Titlz").stop().slideDown(200);
	                    $("#"+d+"> .BacX").css("opacity","0.5");

	                },
	    
	                function() {
	                    var d=$(this).attr("id");
	                    $("#"+d+"> .ImgX")


.css("display","none");
	                    $("#"+d+"> .Titlz").css("display","none");
	                    $("#"+d+"> .BacX").css("opacity","1");

	                });
		});
</script>
</head>
<body style="width:100%;margin:0px;margin-left:auto;margin-right:auto;background-color:black;font-family: 'Yanone Kaffeesatz', sans-serif; ">

<div class="topnav" style="box-shadow:0px 0px 20px 1px #0099cc;margin-bottom:20px;">
  <a class="active" href="#home" style="background:#0099cc;font-size:30px">Fiction Foundry</a>
  <div class="search-container" style="margin-right:100px;width:70%">
    <form action="home.html">
    <button style="float:right;width:34px;height:34px;background-color:#0099cc;color:white;border:1px soild black;border-radius:90px"><i class="fas fa-folder-plus"></i></button>

          <button style="float:right;width:34px;height:34px;background-color:#0099cc;color:white"><i class="fas fa-search"></i></button>
      <input type="text" placeholder="Search.." name="search" style="width:40%;float:right;">
    </form>
  </div>
</div>

<div style="width:90%;height:550px;padding:5%;padding-top:0px;margin-left:auto;margin-right:auto;background:linear-gradient(to top,#1c1b1b 0%,#000000 100%);">
	
	<div id="MainBody"  style="width:29%;float:left;margin:2%;">
	<?php
		if($rows>=1){
	?>
		<a href="file:///<?php echo $DirLocation[0] ?>">
			<div class="Ele" id="d1" style="width:100%;height:300px;border:1px solid black;position:relative;top:0px;left:0px;" >
				<img class="BacX" src="Pics/<?php echo $ImagesTV[0] ?>" style="width:100%;height:300px;background-color:#000000;opacity:0.5;">
				<img class="ImgX" src="play-solid.svg" style="color:white;width:60px;position:absolute;top:35%;left:38%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:75%;color:white;font-size:25px;width:100%;padding-left:18px;"><?php echo $NamesTV[0] ?></p>
			</div>
		</a>
	<?php
		}
	?>	

		<div id="Big" style="width:100%;height:200px;margin-top:2%">

		<?php
		if($rows>=2){
		?>
			<a href="file:///<?php echo $DirLocation[1] ?>">
			<div class="Ele" id="d2" style="width:48%;height:200px;border:1px solid black;float:left;margin-right:1.5%;position:relative;top:0px;left:0px;">
				<img class="BacX" class="BacX" src="Pics/<?php echo $ImagesTV[1] ?>" style="width:100%;height:200px;background-color:#000000;opacity:0.5;">
				<img class="ImgX" src="play-solid.svg" style=" width:60px;position:absolute;top:30%;left:30%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:75%;color:white;font-size:18px;width:100%;padding-left:18px;"><?php echo $NamesTV[1] ?></p>
			</div>
			</a>

		<?php
		}
		?>	

		<?php
		if($rows>=3){
		?>
			<a href="file:///<?php echo $DirLocation[2] ?>">
			<div class="Ele" id="d3" style="width:48%;height:200px;border:1px solid black;float:left;margin-left:1.2%;position:relative;top:0px;left:0px;">
				<img class="BacX" src="Pics/<?php echo $ImagesTV[2] ?>" style="width:100%;height:200px;background-color:#000000;opacity:0.5;">
				<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:30%;left:30%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:75%;color:white;font-size:18px;width:100%;padding-left:18px;"><?php echo $NamesTV[2] ?></p>
			</div>
			</a>
		<?php
		}
		?>	
		</div>
	</div>


	<div id="MainBody" style="width:29%;float:left;margin:2%">

	<?php
		if($rows>=4){
	?>
		<a href="file:///<?php echo $DirLocation[3] ?>">
		<div class="Ele" id="d4" style="width:100%;height:120px;border:1px solid black;position:relative;top:0px;left:0px;">
			<img class="BacX" src="Pics/<?php echo $ImagesTV[3] ?>" style="width:100%;height:120px;background-color:#000000;opacity:0.5;">
			<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:16%;left:40%;padding:10px;">
			<p class="Titlz" style="position:absolute;top:60%;color:white;font-size:20px;width:100%;padding-left:35px;"><?php echo $NamesTV[3] ?></p>
		</div>
		</a>

	<?php
	}
		if($rows>=5){
	?>
		<a href="file:///<?php echo $DirLocation[4] ?>">

		<div class="Ele" id="d5" style="width:100%;height:250px;border:1px solid black;margin-top:2%;position:relative;top:0px;left:0px;">

			<img class="BacX" src="Pics/<?php echo $ImagesTV[4] ?>" style="width:100%;height:250px;background-color:#000000;opacity:0.5;">
			<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:30%;left:39%;padding:10px;">
			<p class="Titlz" style="position:absolute;top:70%;color:white;font-size:25px;width:100%;padding-left:35px;"><?php echo $NamesTV[4] ?></p>
		
		</div>
		</a>

	<?php
		}
		if($rows>=6){
	?>
		<a href="file:///<?php echo $DirLocation[5] ?>">

		<div class="Ele" id="d6" style="width:100%;height:120px;border:1px solid black;margin-top:2%;position:relative;top:0px;left:0px;">
			<img class="BacX" src="Pics/<?php echo $ImagesTV[5] ?>" style="width:100%;height:120px;background-color:#000000;opacity:0.5;">
			<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:16%;left:40%;padding:10px;">
			<p class="Titlz" style="position:absolute;top:60%;color:white;font-size:20px;width:100%;padding-left:35px;"><?php echo $NamesTV[5] ?></p>
		</div>
		</a>
	<?php
		}
		?>	
	</div>

	<div id="MainBody" style="width:29%;float:left;margin:1.4%;">
		<div id="Med-long" style="width:100%;height:250px;">

		<?php
			if($rows>=7){
		?>
		<a href="file:///<?php echo $DirLocation[6] ?>">

			<div class="Ele" id="d7" style="width:45%;height:245px;border:1px solid black;float:left;margin:2%;position:relative;top:0px;left:0px;">
				<img class="BacX" src="Pics/<?php echo $ImagesTV[6] ?>" style="width:100%;height:245px;background-color:#000000;opacity:0.5;">
				<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:30%;left:25%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:80%;color:white;font-size:15px;width:100%;padding-left:10px;"><?php echo $NamesTV[6] ?></p>
			</div>
		</a>
		<?php
		}
		if($rows>=8){
		?>
		<a href="file:///<?php echo $DirLocation[7] ?>">

			<div class="Ele" id="d8" style="width:45%;height:245px;border:1px solid black;float:left;margin:2%;position:relative;top:0px;left:0px;">
				<img class="BacX" src="Pics/<?php echo $ImagesTV[7] ?>" style="width:100%;height:245px;background-color:#000000;opacity:0.5;">
				<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:30%;left:25%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:80%;color:white;font-size:15px;width:100%;padding-left:10px;"><?php echo $NamesTV[7] ?></p>
			</div>
		</a>
		<?php
		
		}

		?>
		</div>

		<div id="Med-long" style="width:100%;height:250px;">

		<?php
		if($rows>=9){
		?>
		<a href="file:///<?php echo $DirLocation[8] ?>">

			<div class="Ele" id="d9" style="width:45%;height:245px;border:1px solid black;float:left;margin:2%;position:relative;top:0px;left:0px;">
				<img class="BacX" src="Pics/<?php echo $ImagesTV[8] ?>" style="width:100%;height:245px;background-color:#000000;opacity:0.5;">
				<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:30%;left:25%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:80%;color:white;font-size:15px;width:100%;padding-left:10px;"><?php echo $NamesTV[8] ?></p>
			</div>
		</a>
		<?php
		}
		if($rows>=10){
		?>
		<a href="file:///<?php echo $DirLocation[9] ?>">

			<div class="Ele" id="d10" style="width:45%;height:245px;border:1px solid black;float:left;margin:2%;position:relative;top:0px;left:0px;">
				<img class="BacX" src="Pics/<?php echo $ImagesTV[9] ?>" style="width:100%;height:245px;background-color:#000000;opacity:0.5;">
				<img src="play-solid.svg" class="ImgX" style=" width:60px;position:absolute;top:30%;left:25%;padding:10px;">
				<p class="Titlz" style="position:absolute;top:80%;color:white;font-size:15px;width:100%;padding-left:10px;"><?php echo $NamesTV[9] ?></p>
			</div>
		</a>
		<?php
		}
		?>	
		</div>

	</div>
</div>

</body>
</html>