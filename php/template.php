<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> "Flow" </title>
		<link rel="stylesheet" type="text/css" href="../styles/Stylesheet.css" />
	</head>
	<body>
		<div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home Page</a></li>
                    <li><a href="gettingStarted.php">Getting Started</a></li>
                    <li><a href="InternLogin.php">Login/Register</a></li>
                    <li><a href="usingTheApp.php">Using The App</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="help.php">Help</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
         <!--    <div id="sidebar">
                
            </div> -->
            
            <footer>
                <p>Copyright Justin Rohweller 2017 ©</p>
            </footer>
        </div>

	</body>
</html>