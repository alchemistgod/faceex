<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
$db_host = "dbserver.engr.scu.edu";
$db_user = "wchang";
$db_pass = "00000955018";
$db_name = "sdb_wchang";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
/* Check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO HOMEPAGE (FIRSTNAME, LASTNAME, STREETADDRESS, CITY, STATEORPROVINCE, COUNTRY, ZIPCODE, EMAIL, PHONENUMBER, MEMBERCODE) VALUES ('$_POST[reviewFirstName]','$_POST[reviewLastName]','$_POST[reviewStreetAddress]','$_POST[reviewCity]','$_POST[reviewState]','$_POST[reviewCountry]','$_POST[reviewZipCode]','$_POST[reviewEmail]','$_POST[reviewPhoneNumber]','$_POST[memberCode]')";

$result = $con->query($sql);
if (!$result)
{
    die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"/>
	<title>RecycleBots_CP Inc.</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="startpage.js" type="text/javascript"> </script>
    <link href="startpage.css" type="text/css" rel="stylesheet" />
 	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body onload="disableConfirm()">
	<div id="container">
    	<!-- ========== Header/Navigation ========== --> 
		<div class="topSection">
        	<header>
            	<div id="date">
                	<script>loadDate();</script>
            	</div>
            	<span>
                	<!-- ========== Logo ========== --> 
                	<svg class="logoIcon">
                    	<g class="beigeBodyTop" transform="translate(30,0)">
                        	<rect width="40" height="20" fill="#cc9b66" stroke="#af7437" stroke-width="5">
                    	</g>
                    	<g class="beigeBody" transform="translate(0,20)">
                        	<rect width="100" height="100" fill="#cc9b66">
                    	</g>
                    	<g class="horizontalPlus" transform="translate(35,42)">
                        	<line x1="0" y1="0" x2="30" y2="0" stroke="#4d3419" stroke-width="8">
                    	</g>
                    	<g class="verticalPlus" transform="translate(50,28)">
                        	<line x1="0" y1="0" x2="0" y2="30" stroke="#4d3419" stroke-width="8">
                    	</g>
                    	<g class="brownBody" transform="translate(0,70)">
                        	<rect width="100" height="100" fill="#4d3419">
                    	</g>
                    	<g class="leaf" transform="rotate(45 45 108)">
                        	<ellipse cx="50" cy="110" rx="20" ry="30" fill="#BAC955">
                    	</g>
                    	<g class="stem" transform="translate(26,80)">
                        	<line x1="55" y1="0" x2="0" y2="55" stroke="#59611e" stroke-width="3">
                    	</g>
                	</svg>
                	<div id="logo">RecycleBots Inc.</div>
            	</span>
        	</header>
        	<nav id="nav">
            	<ul>        
                	<li><a href="../start_page/startpage.html">About</a></li>
                	<li><a href="../quiz/quiz_game.html">Quiz</a></li>
                	<li><a href="../product_page/products.php">Products</a></li>
            	</ul>
        	</nav>
    	</div>

    	<!-- ========== Thank you section ========== --> 
    	<section class="returnHome">
    		<h1 id="thankYouRegister">Thank you for registering!</h1>

    		<div class="returnForm">
    			<form>
    				<input type="button" class="bttn large" id="backtohome" onclick="window.location.href='startpage.html';" value="Back to Home Page">
    			</form>
    		</div>
    	</section>

        <section class="sources">
            <h1>Sources</h1>
            <p>Information and Facts for this Page are Provided by the Following Sources</p>
            <ul>
                <li><a class="reference" href="http://www.zerowaste.sa.gov.au/e-waste/e-waste-recycling-your-questions-answered">http://www.zerowaste.sa.gov.au/e-waste/e-waste-recycling-your-questions-answered</a></li>
            </ul>
        </section>
   	</div> <!-- container close tag -->

   	<!-- ========== Footer ========== --> 
	<footer>
    	<div class="contactInformation">
        	<p>RecycleBots Inc.</p>
        	<p>We are a cool company</p>
    	</div>
    	<div class="winstonContact">
        	<address>
            	<p>
            		Winston Chang <br>
                	Email: <a href="mailto:wchang@scu.edu">wchang@scu.edu</a><br>
                	Phone: (510)585-5723
            	</p>
        	</address>
    	</div>
    	<div class="reneeContact">
    		<address>
    			<p>
    				Renee Prescilla <br>
    				Email: <a href="mailto:rprescilla@scu.edu">rprescilla@scu.edu</a><br>
                	Phone: (510)304-5932
            	</p>
        	</address>
    	</div>
    </footer>
</body>
</html>