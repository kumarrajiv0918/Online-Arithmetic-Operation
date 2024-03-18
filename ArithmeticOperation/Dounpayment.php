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
<form method="POST" autocomplete="on">
<h3 color="white"> Byke Loan System </h3>
<input type="number" placeholder="Principle value" required name="value">
<input type="number" placeholder="Time" required name="time">
<input type="number" placeholder="Rate" required name="rate">
<label class="label"> Enter your payment </label>
<input type="number" placeholder="payment" required name="doun">
<label class="label"> Enter payment manthaly </label>
<input type="number" placeholder="Enter time manthaly" required name="mtime">
<button name="hello" onclick=>submit</button>
</form>
<?php
@$value=$_POST['value'];
@$time=$_POST['time'];
@$rate=$_POST['rate'];
@$doun=$_POST['doun'];
@$mtime=$_POST['mtime'];
	if(isset($_POST['hello']))
	{
 function Intrest($value,$time,$rate,$doun,$mtime)
  {
	   $total=$value-$doun;
	  $intrest = ($total*$time*$rate)/100;
     
	  $total1=$intrest+$total;
	  $amount=$total1/12/$time;
	  $amount1=$amount*$mtime;
 echo "<label class='label5'>your payment amount "."<b> Rupees : ".$amount1."</b></label>";
  }
  Intrest($value,$time,$rate,$doun,$mtime);
	}
?>
</div>
</body>
</html>













