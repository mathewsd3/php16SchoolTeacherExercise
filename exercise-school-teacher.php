<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Title</title>
</head>

<body>

<form name="form_update" method="post" action="exercise-school-teacher.php">

<?php
// 1 - prepare the connection
$connectionDb = new PDO('mysql:host=localhost:3306;dbname=ecole;charset=utf8','root','');
// 2 – prepare the query
$result = $connectionDb->prepare("select  Nom , AnneeAffectation,Rang from profs where AnneeAffectation>2000  ORDER by Rang DESC");
// 3 – add the parameters (inutil)
echo "<table border='1'>
<tr>
<th>Nom</th>
<th>AnneeAffectation</th>
<th>Rang</th>
</tr>";
// 4 - run the query and retrieve thecursor
$result->execute();
// 5 fetch data line by line
//drop down
while($line=$result->fetch())
{
echo "<tr>";
echo "<td>" . $line['Nom'] . "</td>";
echo "<td>" . $line['AnneeAffectation'] . "</td>";
echo "<td>" . $line['Rang'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

</form>

</body>
</html>
