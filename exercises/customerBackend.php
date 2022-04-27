<?php
$username = $_POST['username'];
$password = $_POST['password'];
$quantityPeanut = $_POST['quantitypeanut'];
$pricePeanut = 0.03;
$quantityFeather = $_POST['quantityfeather'];
$priceFeather = 15000.00;
$quantityHeart = $_POST['quantityheart'];
$priceHeart = 130000.00;
$shipping = $_POST['shipping'];

if ($shipping == "free") {
    $shippingCost = 0;
} elseif ($shipping == "overnight") {
    $shippingCost = 50;
} elseif ($shipping == "three") {
    $shippingCost = 5;
}

$total = $quantityPeanut*$pricePeanut+$quantityFeather*$priceFeather+$quantityHeart*$priceHeart+$shippingCost;

echo "<p>Welcome " . $username . ", your password is " . $password . ".</p>";

echo "<table>";
echo "<tr>";
echo "<th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th>";
echo "<tr>";
echo "<tr>";
echo "<th>Single Peanut M&M</th><td>" . $quantityPeanut . "</td><td>$" . $pricePeanut . "</td><td>$" . $quantityPeanut*$pricePeanut . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>1.23 Tons of Feathers</th><td>" . $quantityFeather . "</td><td>$" . $priceFeather . "</td><td>$" . $quantityFeather*$priceFeather . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Large Adult Human Heart</th><td>" . $quantityHeart . "</td><td>$" . $priceHeart . "</td><td>$" . $quantityHeart*$priceHeart . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Shipping</th><td colspan=\"2\">" . $shipping . "</td><td>$" . $shippingCost . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan=\"3\">Total Cost</th><th>$" . $total . "</th>";
echo "</tr>";
echo "</table>";
?>