<style>
  <?php include "style.css" ?>
</style>

<?php 
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $Footballnum = $_POST["Footballnum"];
    $footballtotal = $Footballnum*20.99;
    $Saltinesnum = $_POST["Saltinesnum"];
    $Saltinestotal = $Saltinesnum*3.00;
    $Grapesnum = $_POST["Grapesnum"];
    $Grapestotal = $Grapesnum*1.50;
    $shipping = $_POST["shipping"];
    if($shipping == "Free 7 day")
    {
        $shippingcost = 0;
    }
    else if($shipping == "$50.00 over night")
    {
        $shippingcost = 50;        
    }
    else
    {
        $shippingcost = 5;        
    }
    $totalcost = $footballtotal+$Saltinestotal+$Grapestotal+$shippingcost;
    echo "<title> Receipt </title>";
    echo "<center>";
    echo "<body>";
    echo "
    <h1>Thank you for your purchase ".$username."! <br>
        Your password is: ".$password."</h1> <br>
    <h3>Your receipt:</h3>
    <table class = 'receipt' border=\"3\">
    <tr class = 'Blue'>
    <td></td>
    <td>Quantity</td>
    <td>Cost Per Item</td>
    <td>Sub Total</td>
    </tr>
    <tr>
    <td class = 'Blue'>Item 1</td>
    <td class = 'red'>".$Footballnum."</td>
    <td class = 'red'>$53.75</td>
    <td class = 'red'>$".$footballtotal."</td>
    </tr>
    <tr>
    <td class = 'Blue'>Item 2</td>
    <td class = 'red'>".$Saltinesnum."</td>
    <td class = 'red'>$2.75</td>
    <td class = 'red'>$".$Saltinestotal."</td>
    </tr>
    <tr>
    <td class = 'Blue'>Item 3</td>
    <td class = 'red'>".$Grapesnum."</td>
    <td class = 'red'>$1.50</td>
    <td class = 'red'>$".$Grapestotal."</td>
    </tr>
    <tr>
    <td class = 'Blue'>Shipping</td>
    <td colspan=\"2\" class = 'red'>".$shipping."</td>
    <td class = 'red'>$".$shippingcost."</td>
    </tr>
    <tr>
    <td colspan=\"3\" class = 'Blue'>Total Cost</td>
    <td class = 'red'>$".$totalcost."</td>
    </tr>
    </table>
    ";

    echo "</body>";
    echo "</center>";
?> 