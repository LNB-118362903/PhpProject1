<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
    <style>
        html{  background-color: #3395c6;
      
        .button {
  background-color: #3395c6;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  
  .button:hover {opacity: 1}
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
  
    </style>
<!DOCTYPE html>


<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<ul>
  <li><a class="active" href="Consulting.html">Consulting Home Page</a></li>
</ul>
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
        <center>
        <h1>Shop Calculator</h1>
        </center>
        <hr />
        <center>
                    <table cellspacing="10">
            <tr>
                            <td>Blockchain @$1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required=" "/></td>
            </tr>
            <tr>
                            <td>Autonomous Things (Robots) @$2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" required=" "/></td>
                        </tr>              
            <tr>
                            <td>Immersive Experience @$3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" required=" "/></td>
                        </tr>             
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly ></td>
        </tr>
        <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly ></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
  
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
    </form>
</div>
      
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var Autonomous = parseFloat(document.getElementById('Autonomous').value);
            var Immersive = parseFloat(document.getElementById('Immersive').value);
          
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
              
            }
        else if (document.getElementById('Autonomous').checked) {
                document.intCalc.txtSubTot.value = Autonomous;
                subAmount = Autonomous;
                 calculation(subAmount);
             
            }
        else if (document.getElementById('Immersive').checked) {
                document.intCalc.txtSubTot.value = Immersive;
                subAmount = Immersive;
                 calculation(subAmount);
            }
        }  
      
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .10);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
         
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc;
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
        
        }
//    

    </script>
  
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}

    </script>
</body>
</html>

