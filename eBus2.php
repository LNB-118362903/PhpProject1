<?php
session_start();
$fullNameValue = "";
$PIN = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum'] = $PIN;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate The mobile number session variable to a text box
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
        <ul>
  <li><a class="active" href="Consulting.html">Consulting Home Page</a></li>
</ul>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10"
                            <tr>
                            <td><b></b></td>
                            <td><b>Enter Your details Below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required=" "/></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" required=" " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/></td>
                        </tr>
                        <tr>
                            <td>PIN</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value="" pattern="[0-9][0-9][0-9][0-9]" required="" /></td>
                        </tr>
                        <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
               
                <center>
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
        </div>
      </form>
      </body>
      <style>
           html {background-color: #3395c6;}
      </style>
            </html>
	
	
	
