<!DOCTYPE html>
<html>
<head>
	<title>wastePicker</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/logo.css">
</head>
<body>

<div class="container">
<div class="header">
<div class="logo"></div>
<div class="menu">
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="../index.php">About</a></li>
		<li><a href="callpicker.php">CallPicker</a></li>
		<li><a href="wastepicker.php">WastePickers</a></li>
	</ul>
</div>
</div>

<div class="mainbody">
<div class="callpicker">
<div class="header2">
	<h2>Please type your location or company to get service</h2>
</div>
<div class="form1">
<form action="" method="post">
	Search: <input type="text" name="search" placeholder=" e.g. Posta, Zanaki "/></br>
	<input type="submit" value="Submit" />
</form>
</div>

<div class="table1">
<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "tinTz2108#";
    $database_name = "wastePicker";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from wastePicker where address LIKE '%$search%' OR organization LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result 
         if (!$query->rowCount() == 0) {
		 		echo "Search Results :<br/>";
				echo "<table style=\"font-family:arial;color:#f3f3f3;\">";	
echo "<tr>
<th style=\"border-style:solid;color:#fff;border-width:1px;border-color:#98bf21;background:#98bf21;\">Location/Address</th>

 <th style=\"border-style:solid;text-align:center;width:40px;border-width:1px;border-color:#98bf21;background:#98bf21;\">Name_of_Waste_Picker</th>

 <th style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Phone</th>

 <th style=\"border-style:solid;border-width:1px;width:20px;
 border-color:#98bf21;background:#98bf21;\">Name_Of_Organization   </th>
  <th style=\"border-style:solid;padding:10px;width:30px;border-width:1px;border-color:#98bf21;background:#98bf21;\">Email</th>
                </tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;color:#fff;border-width:1px;border-color:#98bf21;\">";		
                echo $results['address'];

				echo "</td><td style=\"border-style:solid;color:#fff;width:30px;border-width:1px;border-color:#98bf21;\">";
                echo $results['name'];

				echo "</td><td style=\"border-style:solid;color:#fff;border-width:1px;border-color:#98bf21;\">";
                echo " ".$results['phone'];
                echo "<td style=\"border-style:solid;color:#fff;width:20px; border-width:1px;border-color:#98bf21;\">";            
                echo $results['organization'];
                echo "<td style=\"border-style:solid;color:#fff;border-width:1px;border-color:#98bf21;\">";            
                echo $results['email'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo 'No one has registered to your location';
        }
?>
</div>

</div>

</div>

<div class="footer">
	<p>&copy; @wastepicker</p>
</div>
</div>
</body>
</html>

