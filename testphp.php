<?php ob_start(); ?> 
<table>
			<tr>
				<th></th>
				<th>Taille</th>
				<th>1/2 journée</th>
				<th>Journée complète</th>
				<th>Forfait Week-End<br>(Samedi 10h jusqu'à Dimanche 16h)</th>
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
$sql = "SELECT * FROM Chateaux,Categories WHERE Chateaux.idCategorie = 1 AND Chateaux.idCategorie = Categories.idCategorie ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["idChat"]. " - Name: " . utf8_encode ($row["NomCh"]). "<br>";
        ?>
        <tr>
			<td><p class="ptable"><?php echo utf8_encode ($row["NomCh"]) ?></p><a href= <?php echo "images/petit/".strtolower(utf8_encode ($row["image"]))?>><img src=<?php echo"images/petit/small_".strtolower(utf8_encode ($row["image"]))?> alt="Chateau Vaiana"></a></td>
			<th><?php echo $row["Longueur"]."x".$row["Largeur"]."m" ?></th>
			<td><?php echo $row["PrixDemi"] ?> TTC</td>
			<td><?php echo $row["PrixComplet"] ?> TTC</td>
			<td><?php echo $row["PrixWE"] ?> TTC</td>
		</tr><?php
		//echo utf8_encode ($row["NomCh"])."Taille:".$row["Largeur"]."x".$row["Longueur"]."m<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
<?php $content = ob_get_clean(); ?> 
<?php include 'view/layout.php';?>

