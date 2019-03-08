<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http://www.w3.org/1999/xhtml">
      <head>
          <meta charset="utf-9" />
          <title>eBusiness1</title>
          <link rel="stylesheet" href="style.css" type=text.css" />
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="eBus3.php">
                <center>
                <h1>Shop Calculator</h1>
                </center>
                <br />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Select a Consulting Service</b></td>
                        </tr>
                        <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoBlockchain"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Autonomous Things (Robot) @ $2000</td>
                            <td><input type="radio" id="Robota" name="rdoRobots"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Immersive Experience</td>
                            <td><input type="radio" id="Immersive" name="rdoImmersive"/>
                            </td>
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
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td>Discount @ 10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>VAT @ 20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" readonly /></td>
                        </tr>
                    </table>
            </center>
                <br />
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value ="Calculate Amount"/>
                    <input type="button" name="btnClass" id="btnClass" onclick="AmountClear()" value ="Clear"/>
                    <input type="submit" name="btnPassword" id="btnPassword" onclick="" value ="Password"/>
                </center>
            </form>
        </div>
       
        <script type="text/javascript">
            function calcSub(){
                var subAmount = parsedfloat(document.getElementById("txtSubTot").value);
                var Blockchain = parsedfloat(document.getElementById("Blockchain").value);
                var Robots = parsedfloat(documetn.getElementById("Robots").value);
                var Immersive = parsedfloat(document.getElementById("Immersive").value);
               
                if (document.getElementById("Blockchain").checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
            }
        else if (document.getElentById("Robots").checked) {
            document.intCalc.txtSubTot.value = Robots;
            subAmount = Robots;
            calculation(subAmount);
        }
        else if (document.getElentById("Immersive").checked) {
            document.intCalc.txtSubTot.value = Immersive;
            subAmount = Immersive;
            calculation(subAmount);
    }
    }
     function calculation(parmSTotal){
         var subTotal = parsefloat(parmStotal);
         var discCalc = parsefloat(subTotal * 10%);
         var vatCalc = parsefloat(subTotal * 20%);
         var total = parsefloat(subTotal - discCalc + vatCalc);
     }
     function AmountClear(){
         document.getElementById("txtSub").value="";
         document.getElementById("txtDisc").value="";
         document.getElementById("txtVat").value="";
         document.getElementById("Total").value="";
     }
     </script>
    </body>
</html>



	
	
	
