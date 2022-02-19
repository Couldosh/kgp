<?php ob_start(); ?> 
<table>
			<tr>
				<th></th>
				<th>Taille</th>
				<th>Age</th>
			</tr>

<?php
$servername = "localhost";
$username = "fabrice";
$password = "n64jhQT_hB(z76+";
$dbname = "KGP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Chateaux,Categories WHERE (Chateaux.idCategorie = 4)  AND Chateaux.idCategorie = Categories.idCategorie AND Chateaux.Localisation = 'NORTH' ORDER BY Chateaux.idCategorie DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
			<td><p class="ptable"><?php echo utf8_encode ($row["NomCh"]) ?></p><a href= <?php echo "images/moyen/".strtolower(utf8_encode ($row["image"]))?>><img src=<?php echo"images/moyen/small_".strtolower(utf8_encode ($row["image"]))?> alt=<?php echo "Chateau ".utf8_encode ($row["NomCh"]) ?>></a></td>
			<td><?php echo $row["Longueur"]."x".$row["Largeur"]."m" ?></td>
			<td><?php echo $row["LimiteAge"] ?></td>
		</tr><?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
<?php $content = ob_get_clean(); ?> 
<?php include 'view/layout.php';?>

