<?php
include "config.php";

if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}

if(isset($_POST['but_orders'])){
    header('Location: orders.php');
}

if(isset($_POST['but_customers'])){
    header('Location: customer.php');
}

?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
			<input type="submit" value="Orders" name="but_orders">
			<input type="submit" value="Customers" name="but_customers">
		</form>
    </body>
</html>