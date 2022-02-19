<?php ob_start(); ?> 
				
		<table>
			<tr>
				<th></th>
				<th>1/2 journée</th>
				<th>Journée complète</th>
				<th>Forfait Week-End<br>(Samedi 10h jusqu'à Dimanche 16h)</th>
			</tr>
			<tr>
				<td><p class="ptable">Baby Aquarium</p><a href="images/baby/aquarium.jpg"><img src="images/baby/small_aquarium.jpg" alt="Chateau baby aquarium"></a></td>
				<td>24 910 TTC</td>
				<td>31 270 TTC</td>
				<td>42 135 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Baby Safari</p><a href="images/baby/safari.jpg"><img src="images/baby/small_safari.jpg" alt="Chateau baby safari"></a></td>
				<td>24 910 TTC</td>
				<td>31 270 TTC</td>
				<td>42 135 TTC</td>
			</tr>
		</table>

<?php $content = ob_get_clean(); ?> 
<?php include 'view/layout.php';?>

