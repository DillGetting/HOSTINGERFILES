<html>
<head>
<title>LegalStuff</title>

<style>
    table, th, td {
    border:2px solid black;
    }
</style>
</head>

<body>

<h2>Legal Ledger for money</h2>

<table RecordsOFDeals style="width:60%">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Item</th>
    <th>TotalDue</th>
    <th>AmountPaid</th>
    <th>AmountOwed</th>
    <th>DateofTransaction</th>
    <th>Comments</th>
</tr>

<tr>
    <td><?php echo htmlspecialchars($_GET["ID"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Name"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Item"]);?></td>
    <td><?php echo htmlspecialchars($_GET["TotalDue"]);?></td>
    <td><?php echo htmlspecialchars($_GET["AmountPaid"]);?></td>
    <td><?php echo htmlspecialchars($_GET["AmountOwed"]);?></td>
    <td><?php echo htmlspecialchars($_GET["DateofTransaction"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Comments"]);?></td>
</tr>

</table>

<p>Ledger of LEGAL things</p>

<div>


<h3>Add a Row to the Table</h3>
<br><br>
<form action="index.php" method="post">
ID: <input type="hidden" name="ID"
<br><br>
Name: <input type="text" name="Name">
<br><br>
Item: <input type="text" name="Item">
<br><br>
TotalDue: <input type="Integer" name="TotalDue">
<br><br>
AmountPaid: <input type="Integer" name="AmountPaid">
<br><br>
AmountOwed: <input type="Integer" name="AmountOwed">
<br><br>
DateofTransaction: <input type="text" name="DateofTransaction">
<br><br>
Comments: <input type="text" name="Comments">
<br><br>
<input type="submit" name="submit" value="Submit">
<br><br>
</form>

</div>

</body>
</html>
