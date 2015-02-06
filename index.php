<?php
session_start();

include "db_connect.php";
if (!isset($_POST['submit']) || ($_POST['submit'] != 'Login')){
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="images/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="css/new_add.css" />
    </head>

    <body>
        <div class="container">
            
			<div class="header-container">
            <header class="header_wrapper clearfix">
                <h1></h1>
			</header>
			</div>
			
			<!-- <header>
                <h1>Login <span>50%off and 50%on</span></h1>
				<!-- <nav class="codrops-demos">
					<span> <strong></strong> </span>
				
				</nav> 
            </header> -->
			<nav class="codrops-demos">
					<span> <strong></strong> </span>
				
				</nav> 
            <section>	
			
                <div id="container_demo" >
            
					<a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    
					<div class="wrapper wide">
						<div id="login" class="animate form">
						
                            <form autocomplete="on" name="login_form" method="post" action="index.php"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" /> 
                                </p>
								
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit"/> 
								</p>
                            </form>
							
                        </div> <!-- login -->

                    </div> <!-- wrapper -->
                </div>  <!-- container demo -->
            </section>
			
        </div> <!-- container -->
	 <div class="footer-container">

    <footer class="foot_wrapper">
	<p align="center"><b>&copy; AMP iNNOVATORS 2013</b></p>
	</footer>
	</div>
	</body>
</html>

<?php
}

else
{
	$user = protect($_POST['username']);
	$pass = protect($_POST['password']);
 
	if($user && $pass)
	{
		//compare the encrypted password
		$sql="SELECT id1,u_name FROM `user_details` WHERE `u_name`='$user' AND `pwd`='$pass'";
		$query=mysql_query($sql) or die(mysql_error());
	 
		if(mysql_num_rows($query) == 1)
		{
			$row = mysql_fetch_assoc($query); // mysql_fetch_assoc gets the value for each field in the row
			$_SESSION['id1'] = $row['id1']; //creates the first session var
			$_SESSION['u_name'] = $row['u_name']; // second session var
	 
			echo "<script type=\"text/javascript\">window.location=\"home.php\"</script>";
		}
		
		else
	   {
			echo "<script type=\"text/javascript\">
			alert(\"Username and password combination is incorrect!\");
			window.location=\"index.php\"</script>";
		}	
	}

	else
	{			
		echo "<script type=\"text/javascript\">
		alert(\"You need to gimme a username & password!!\");
		window.location=\"index.php\"</script>";
	}

}
?>