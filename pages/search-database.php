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
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Location/Address</td>
                <td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Name of Picker</td>
                <td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Phone</td>
                <td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Organization</td>
                <td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Emanil</td>
                </tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['address'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['name'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['phone'];
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";            
                echo $results['organization'];
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";            
                echo $results['email'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo 'No one has registered to your location';
        }
?>