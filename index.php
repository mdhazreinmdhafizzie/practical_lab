<?php
include 'process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electric Bill</title>
</head>

<body>

    <h1>Calculate House Electric Bill</h1>

    <table border="1" style="margin-bottom: 30px;">
        <tr>
            <th>Block Tariff</th>
            <th>Unit</th>
            <th>Rate</th>
        </tr>

        <tr>
            <td>For the first 200 kWh (1-200 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.218</td>
        </tr>

        <tr>
            <td>For the next 100 kWh (201 – 300 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.344</td>
        </tr>

        <tr>
            <td>For the next 300 kWh (301 – 600 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.516</td>
        </tr>

        <tr>
            <td>For the next 300 kWh (601 – 900 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.546</td>
        </tr>

        <tr>
            <td>For the next kWh (901 kWh onwards) per month</td>
            <td>sen/kWh</td>
            <td>0.571</td>
        </tr>

        <tr>
            <td colspan="3">The minimum monthly chafe is RM300</td>
        </tr>
    </table>

    <?php
    if ($error != "") {
        echo "<p style='color:red;'>" . $error . "</p>";
    }
    ?>

    <form method="post">
        <label for="">Enter your first 200 kWh (1-200 kWh) per month :</label>
        <input type="number" name="first" value="" placeholder="200kwh"><br>

        <label for="">Enter next 100 kWh (201 – 300 kWh) per month :</label>
        <input type="number" name="second" value="" placeholder="100kwh"><br>

        <label for="">Enter next 300 kWh (301 – 600 kWh) per month :</label>
        <input type="number" name="third" value="" placeholder="300kwh"><br>

        <label for="">Enter next 300 kWh (601 - 900 kWh) per month :</label>
        <input type="number" name="fourth" value="" placeholder="180kwh"><br>

        <label for="">Enter next kWh (901 kWh onwards) per month :</label>
        <input type="number" name="fifth" value="" placeholder="100kwh"><br>

        <input type="submit" name="calculate" value="Calculate">
        <input type="submit" name="reset" value="Reset">
    </form>



</body>

<?php
if ($showbill) {
    echo "<h2>Electric Bill</h2>";

    echo "<p>The charge for the first kwh is: RM" . $charge1 . "</p>";
    echo "<p>The charge for the second kwh is: RM" . $charge2 . "</p>";
    echo "<p>The charge for the third kwh is: RM" . $charge3 . "</p>";
    echo "<p>The charge for the fourth kwh is: RM" . $charge4 . "</p>";
    echo "<p>The charge for the fifth kwh is: RM" . $charge5 . "</p>";

    echo "<p>Total kWh used: " . $totalkwh . "</p>";
    echo "<p>Total charge: RM" . number_format($totalcharge, 2) . "</p>";
}

?>

</html>