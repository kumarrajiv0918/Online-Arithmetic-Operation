<h<!DOCTYPE html>
<html lang="en">
<head>
<title>Rajiv</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="styledoun1.css">
<link rel="stylesheet" href="styledoun.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="body">
     <header >
	   <div class="navbar">
				 <div class="nav-search">
			     <select class="search-select">
			         <option>All</option>
					  <option >Simple Intrest</option> 
				     <option>Bike Loan</option>
				     <option>Check Vote Age</option>
					 <option>Factorial number</option>
					  <option>Fabnacci Series</option>
					  <option>Prime Number</option>
			     </select >
			     <input placeholder="search calculation" class="search-input">
			     <div class="search-icon">
			         <i class="fa fa-search" aria-hidden="true"></i>
			     </div>
			 </div>
			 </div>
  <div class="head-box">
		<div class="all-button">
		 <a href="SimpleIntrest.php">
				<div class="Button-box border">
				     Simple Intrest</a>
				</div>
				 <a href="Dounpayment.php" >
				<div class="Button-box border2">
				     Bike Loan  </a>
				</div>
				<a href="rajiv.php" >
				<div class="Button-box border3">
				      Check Vote Age </a>
				</div>
				 <a href="factorial.php" >
				<div class="Button-box border4">
				     Factorial Number</a>
				</div>
				 <a href="febinnic.php" >
				<div class="Button-box border5">
					  Fabnacci Series</a>
				</div>
				 <a href="Prime.php" >
				<div class="Button-box border6">
					  Prime Number</a>
				</div>
		</div>
		</div>
</header>
	    
<div class="table border">
<form method="POST" autocomplete="on" >
<h3 color="white"> Check vote Age</h3>
<input type="text" name="name" placeholder="First Name" required >
<input type="text" name="mname" placeholder="Middle Name" >
<input type="text"  name="lname" placeholder="Last Name" required>
<input type="number" name="vote" placeholder="Age" required>
<button name="hello">submit</button>
</form>
<?php

@$vote=$_POST['vote'];
@$name=$_POST['name'];
@$mname=$_POST['mname'];
@$lname=$_POST['lname'];
if(isset($_POST['hello']))
{	
	function vote($data)
	 {
		 if($data>=18&&$data<=65)
			 echo "<br>"."<label class='vote-box'>you are eligible for vote"."<br>"."  your age "." ".$data."</label>";
		 else 
			 echo "<br>"."<label class='vote-box'> not eligible "."<br>"."   your age "." " .$data."</label>";
	 }
	 function display($name,$mname,$lname)
	 {
		echo $name." ".$mname." ".$lname;
	 }

	display ($name,$mname,$lname);
	 vote($vote);
 }
?>
</div>
</body>
</html>