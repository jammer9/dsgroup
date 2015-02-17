<?php
session_start();
include 'db_connect.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->

    <head>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<title>Add New Record</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="images/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="css/new_add.css" />
		<link rel="stylesheet" type="text/css" href="css/style_3.css" />
	</head>

<body>
<?php

if($_SESSION['id1']) //session id is established
{
	$result = mysql_query( "SELECT * FROM sls_db" ) or die("SELECT Error: ".mysql_error());
	$num_rows = mysql_num_rows($result);
?>

<div class="container">
	<header>
		<h1>Displaying the Entries <span></span></h1>
				<!-- <nav class="codrops-demos">
					<span> <strong></strong> </span>
				</nav> -->
    </header>
    <section>		
		<div id="container_demo" >
		<!-- <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a> -->
			<div class="wrapper new1">			
				<div id="login" class="animate form">
					<section class="ac-container">
						<div class="accord">
							<input id="ac-1" name="accordion-1" type="checkbox" />
							<label for="ac-1"><?php echo "<p align=\"center\">There are<b> $num_rows </b>records</p>"; ?></label>
							<?php
								if($num_rows<=15)
								{
									echo "<article class=\"ac-small\">
											<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"db-table\">
											<tr><th>ID</th><th>PARTY</th><th>Quality</th><th>Quantity</th><th>Station</th><th>Invoice No.</th>
											<th>Bill Date</th><th>Firm</th><th>Color</th><th>Item</th><th>Transport</th><th>Agent</th></tr> ";
											while ($get_info = mysql_fetch_row($result)){
												echo '<tr>';
												foreach ($get_info as $field)
													echo '<td>',$field,'</td>';
													echo '</tr>';
													} //while
													echo '</table>
										</article>
						</div> <!-- accord -->
					</section> <!-- ac-container --> ';
								} //if
		
								elseif($num_rows >15 && $num_rows<=30)
								{
									echo"<article class=\"ac-medium\">
											<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"db-table\">
											<tr><th>ID</th><th>NAME</th><th>ADDRESS</th><th>SALARY</th><th>JOIN_DATE</th></tr> ";
											while ($get_info = mysql_fetch_row($result)){
												echo '<tr>';
												foreach ($get_info as $field)
													echo '<td>',$field,'</td>';
													echo '</tr>';
													} //while
													echo '</table>
										</article>
						</div> <!-- accord -->
					</section> <!-- ac-container -->';
								} //else if
		
								elseif($num_rows >30 && num_rows<50)
								{
									echo"<article class=\"ac-large\">
											<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"db-table\">
											<tr><th>ID</th><th>NAME</th><th>ADDRESS</th><th>SALARY</th><th>JOIN_DATE</th></tr> ";
											while ($get_info = mysql_fetch_row($result)){
												echo '<tr>';
												foreach ($get_info as $field)
													echo '<td>',$field,'</td>';
													echo '</tr>';
													} //while
													echo '</table>
										</article>
						</div> <!-- accord -->
					</section> <!-- ac-container -->';
								} //elseif
		
								else
								{
									echo"<article class=\"ac-vlarge\">
											<table cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"db-table\">
											<tr><th>ID</th><th>NAME</th><th>ADDRESS</th><th>SALARY</th><th>JOIN_DATE</th></tr> ";
											while ($get_info = mysql_fetch_row($result)){
												echo '<tr>';
												foreach ($get_info as $field)
													echo '<td>',$field,'</td>';
													echo '</tr>';
													} //while
													echo '</table>
										</article>
						</div> <!-- accord -->
					</section> <!-- ac-container -->';
								} //else						
								mysql_close($con);
}// session
else
{
	echo "<div style=\"color:red;margin:100px;background:rgba(255,255,255,1);font-size:40px;width:50%\"><strong>Please Log In First</strong></div>\n";
	echo "<script language=\"Javascript\" type=\"text/javascript\">alert(\"You dont belong here\");</script>";
	echo "<script language=\"Javascript\" type=\"text/javascript\">document.location.href='index.php'</script>";
}
?>

<p class="login button">
	<input type="submit" value="HOME" name="edit" onclick="window.location.href='home.php'; return false;"/>
</p>
<p class="login button"> 
	<input type="submit" value="LOGOUT" name="delete" onclick="window.location.href='logout.php'; return false;"/>
</p>
				</div> <!-- login -->
			</div> <!-- wrapper -->
		</div>  <!-- container demo -->
	</section>	
</div> <!-- container -->
</body>
</html>