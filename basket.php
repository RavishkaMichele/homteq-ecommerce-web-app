<?php
session_start();
include ("db.php");
$pageName="Smart Basket"; //Create and populate a variable called $pageName
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pageName."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pageName."</h4>"; //display name of the page on the web page
if (isset($_POST['h_prodid'])){
    $newProdId=$_POST['h_prodid'];
    $reqQuantity=$_POST['product_quantity'];

    echo"Id of the selected product:".$newProdId.'<br><br>';
    echo"Quantity of selected products:".$reqQuantity.'<br><br>';

    $_SESSION['basket'][$newProdId]=$reqQuantity;
}
else {
    echo "<p class= 'updateInfo'><b>Basket Unchanged</b></p>";
}

$total=0;
echo "<table style='border: 1px'>"; 
echo"<tr><th style='border: 1px'>Product Name</th><th style='border: 1px'>Price</th><th style='border: 1px'>Quantity</th><th style='border: 1px'>Subtotal</th></tr>";
if(isset($_SESSION['basket'])){
    foreach($_SESSION['basket'] as $key => $value){
        $SQL="SELECT prodName, prodPrice FROM product WHERE prodId=$key";
        $exeSQL=mysqli_query($conn, $SQL)or die(mysqli_error($conn));
        $arrayP=mysqli_fetch_assoc($exeSQL);
        $subTotal=$arrayP['prodPrice']*$value;
        echo"<tr><td>".$arrayP['prodName']."</td><td>£".$arrayP['prodPrice']."</td><td>".$value."</td><td>£".$subTotal."</td></tr>";
        $subTotal+=$subTotal;
    }
}

echo "<b>1 Item Added</b>";
include("footfile.html"); //include head layout
echo "</body>";
?>