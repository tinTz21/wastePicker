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
<div class="wastepicker">
<div class="pickerinstruction">
  <h2 style="text-align: center; font-size: 20px">Quick Instructions</h2><hr><br>
  <p>The form fields provided on right side of this page is used to capture waste pickers informations. If you are waste picker, fill the fields provided there<br>.The first three fields must be filled but the last two fields is optional, you may choose to fill or ignore it by filling null.</p>
</div>
<div class="callpickerbody">
	<form action="insertpicker.php" method="post">
                  <div class="legend"><legend>Register Your Details Below.</legend> </br></div>
                  <div class="label"><label for="names">Add Location</label>
                  <input type="text" id="address" placeholder="e.g. Mwananyamala,Mama Zacharia" name="address" style="width: 100%"></div>

                  <div class="label"><label for="contact">Full Name</label></br>
                  <input type="text" id="name" placeholder="e.g. Augustino Emanuel" name="name" style="width: 100%"></div>
                         
                 <div class="label"><label for="phone">Phone Number</label></br>
                 <input type="text" id="phone" placeholder="e.g. 0758477593" name="phone" style="width:100%"></div>

                 <div class="label"><label for="position">Organization(*Optional)</label></br>
                 <input type="text" id="organization" placeholder="e.g.infinity cleaness Company" name="organization" style="width: 100%"></div>

                 <div class="label"><label for="email">Email(*Optional)</label>
                 <input type="text" id="email" placeholder="e.g. wastepicker@infinitySky.com" name="email" style="width: 100%"></div>

                  <input type="submit" id="submit" value="Submit">
    </form>
</div>

</div>

</div>

<div class="footer">
	<p>Copyright @wastepicker</p>
</div>
</div>
</body>
</html>