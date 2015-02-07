<?php
session_start();
include "db_connect.php";
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
        <title>HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="images/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="css/new_add.css" />
    </head>    
		<body>
<?php
if($_SESSION['id1'])
{
	echo "</br>";
	echo "<div class=\"container\">
	<header>
                <h1>WELCOME <span>HOME</span></h1>
				<!-- <nav class=\"codrops-demos\">
					<span> <strong></strong> </span>
				</nav> -->
    </header>
			
            <section>	
			
                <div id=\"container_demo\" >
            
					<a class=\"hiddenanchor\" id=\"toregister\"></a>
                    <a class=\"hiddenanchor\" id=\"tologin\"></a>
                    
					<div class=\"wrapper wide\">
						<div id=\"login\" class=\"animate form\">
						
                            <form autocomplete=\"on\" name=\"home_page\" method=\"post\"> 
                                <h1>ADD DETAILS</h1>

                                <p class=\"login button new\"> 
                                    <input title=\"Add New Entry\" type=\"button\" value=\"ADD\" name=\"add\" onclick=\"window.location.href='insert.php'; return false;\"/> 
									<span class=\"edited\"><strong>MAKE THE ENTRY</strong></span>
								</p>
                                
								<p class=\"login button new\"> 
                                    <input type=\"button\" value=\"EDIT\" name=\"edit\" onclick=\"window.location.href='edit_display.php'; return false;\"/>
									<span class=\"edited\"><strong>EDIT THE ENTRY</strong></span>
								</p>
								
								<p class=\"login button new\"> 
                                    <input type=\"submit\" value=\"DISPLAY\" name=\"edit\" onclick=\"window.location.href='display.php'; return false;\"/>
									<span class=\"edited\"><strong>DISPLAY THE ENTRIES</strong></span>
								</p>
								
								<p class=\"login button new\"> 
                                    <input type=\"submit\" value=\"UPDATE\" name=\"update\"onclick=\"window.location.href='update.php'; return false;\"/>
									<span class=\"edited\"><strong>UPDATE THE ENTRY</strong></span>
								</p>
								
                                <p class=\"login button new\"> 
                                    <input type=\"submit\" value=\"DELETE\" name=\"delete\" onclick=\"window.location.href='delete_display.php'; return false;\"/>
									<span class=\"edited\"><strong>DELETE THE ENTRY</strong></span>
								</p>
								
								<p class=\"login button new\"> 
                                    <input type=\"submit\" value=\"LOGOUT\" name=\"submit\" onclick=\"window.location.href='logout.php'; return false;\"/>
								</p>
								
                            </form>
							
                        </div> <!-- login -->

                    </div> <!-- wrapper -->
                </div>  <!-- container demo -->
            </section>
			
        </div> <!-- container -->"; 
}

else
{
	echo "<div style=\"color:red;margin:100px;background:rgba(255,255,255,1);font-size:40px;width:50%\"><strong>Please Log In First</strong></div>\n";
	echo "<script language=\"Javascript\" type=\"text/javascript\">alert(\"You dont belong here\");</script>";
	echo "<script language=\"Javascript\" type=\"text/javascript\">document.location.href='index.php'</script>";
}
?>
</body>
</html>