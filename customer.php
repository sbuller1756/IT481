<html>
<body>
<form action="customer.php" method="post">
<input type="submit" value="Home" name="but_home">
</form>

<br>


<?php
include "config.php";


$sql = 'SELECT count(CustomerID) as total FROM customers';
$sql2 = 'SELECT CompanyName FROM customers';

$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);

$numCustomers = mysqli_fetch_array($result);
$customerList = mysqli_fetch_all($result2, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_free_result($result2);

mysqli_close($con); ?>	

<h1><?php print("<br>The total number of customers is: ".$numCustomers['total']."<br>"); ?></h1> 
<h4><?php print("<br><br>CUSTOMER DATA:<br><br>"); ?></h4>

<?php for($i=0;$i<count($customerList);$i++) {
print("".join("",$customerList[$i])."<br>");
}

 if(isset($_POST['but_home'])){
		
		switch ($_SESSION['uname']) {
			case 'User_CEO':
			header('Location: homeCEO.php');
			break;
			case 'User_HR':
			header('Location: homeHR.php');
			break;
			case 'User_Sales':
			header('Location: homeSales.php');
			break;
		    }
}
 
?>




