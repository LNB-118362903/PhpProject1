<!DOCTYPE html>
<html>
    <body>
        <ul>
  <li><a class="active" href="Consulting.html">Consulting Home Page</a></li>
</ul>
    <center>
        <h1>Receipt</h1>
        <h2>Thank you for shopping at BIS Consulting!</h2>
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $PIN = $_POST['txtNum'];
        $fullNameValue = $_POST['txtName'];
        
        
        echo "The name is : ".$fullNameValue."."; 
        echo "<br></br>";
        echo "Your email is : ".$PIN.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        
        
        ?>
        </center>
    </body>
     <style>
           html {background-color: #3395c6;}
      </style>
</html>