<?php
   require_once "../con.php";


?>

<html>
<head>
<title>LegalStuff</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="flexContainer">
</div>

<h2>Legal Ledger for money</h2>

<table RecordsOFDeals style="width:60%"
<tr>
    <th>ID</th>
    <th>CustomerName</th>
    <th>Item</th>
    <th>TotalDue</th>
    <th>AmountPaid</th>
    <th>AmountOwed</th>
    <th>Date</th>
    <th>Comments</th>
</tr>

<tr>
    <td><?php echo htmlspecialchars($_GET["ID"]);?></td>
    <td><?php echo htmlspecialchars($_GET["CustomerName"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Item"]);?></td>
    <td><?php echo htmlspecialchars($_GET["TotalDue"]);?></td>
    <td><?php echo htmlspecialchars($_GET["AmountPaid"]);?></td>
    <td><?php echo htmlspecialchars($_GET["AmountOwed"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Date"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Comments"]);?></td>
</tr>

</table>

<?php
    $ID = $CustomerName = $Item = $TotalDue = $AmountPaid = $AmountOwed = $Date = $Comments = "";

    if(isset($_POST['Submit'])); {
        $ID = $_POST['ID'];
        $CustomerName = $_POST['CustomerName'];
        $Item = $_POST['Item'];
        $TotalDue = $_POST['TotalDue'];
        $AmountPaid = $_POST['AmountPaid'];
        $AmountOwed = $_POST['AmountOwed'];
        $Date = $_POST['Date'];
        $Comments = $_POST['Comments'];
        $sql ="insert into Transaction (ID, CustomerName, Item, TotalDue, AmountPaid, AmountOwed, Date, Comments)
                values (:ID, :CustomerName, :Item, :TotalDue, :AmountPaid, :AmountOwed, :Date, :Comments)";
        $con = "";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":ID", $ID);
        $stmt->bindParam(":Name", $CustomerName);
        $stmt->bindParam(":Item", $Item);
        $stmt->bindParam(":TotalDue", $TotalDue);
        $stmt->bindParam(":AmountPaid", $AmountPaid);
        $stmt->bindParam(":AmountOwed", $AmountOwed);
        $stmt->bindParam(":Date", $Date);
        $stmt->bindParam(":Comments", $Comments);
        $stmt->execute();

    if(!$stmt)
        echo "Error inserting data";


    else
        echo "SUCCESSFUL POST";
    }
?>



<p>Ledger of LEGAL things</p>

<div>


<h3>Transaction</h3>
<form action="glossary.php" method="post">
ID: <input type="hidden" name="ID"
<br><br>
Name: <input type="text" name="CustomerName">
<br><br>
Item: <input type="text" name="Item">
<br><br>
TotalDue: <input type="text" name="TotalDue">
<br><br>
AmountPaid: <input type="text" name="AmountPaid">
<br><br>
AmountOwed: <input type="text" name="AmountOwed">
<br><br>
Date: <input type="date" name="Date">
<br><br>
Comments: <input type="text" name="Comments">
<br><br>
Submit: <input type="submit" name="submit" value="Submit">
<br><br>
</form>

</div>

</body>
</html>
