    <?php

    $link = mysqli_connect("localhost", "root", "tinTz2108#", "wastePicker");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $address = mysqli_real_escape_string($link, $_REQUEST['address']);
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
    $organization = mysqli_real_escape_string($link, $_REQUEST['organization']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);


    $sql = "INSERT INTO wastePicker (address, name, phone,organization,email) VALUES ('$address', '$name', '$phone','$organization','$email')";

    if(mysqli_query($link, $sql)){
        header('Location: http://localhost/wastePicker/pages/callpicker.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
    ?>