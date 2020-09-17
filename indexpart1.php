<html>
<body>
<form action="index.php" method="post">
  <input type="submit" name="gen_Customers" value="Customers"><br></input>

</form>

<br>


<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'northwind';

$conn = mysqli_connect($server, $user, $pass, $db);

if($conn) {
print("Connected to ".$db);
} else {
print("Connection error: " .mysqli_connect_error());
}

if(isset($_POST["gen_Customers"])) {

$sql = 'SELECT count(CustomerID) as total FROM customers';
$sql2 = 'SELECT CompanyName FROM customers';

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

$numCustomers = mysqli_fetch_array($result);
$customerList = mysqli_fetch_all($result2, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_free_result($result2);

mysqli_close($conn); ?>	

<h1><?php print("<br>The total number of customers is: ".$numCustomers['total']."<br>"); ?></h1> 
<h4><?php print("<br><br>CUSTOMERS ARE LISTED BELOW:<br><br>"); ?></h4>

<?php for($i=0;$i<count($customerList);$i++) {
print("".join("",$customerList[$i])."<br>");
}
}
 
 
?>




