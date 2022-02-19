<?php ob_start(); ?> 
		<table>
			<tr>
				<th></th>
				<th>1/2 journée</th>
				<th>Journée complète</th>
				<th>Forfait Week-End<br>(Samedi 10h jusqu'à Dimanche 16h)</th>
			</tr>
			<tr>
				<td><p class="ptable">Licorne</p><a href="images/moyen/licorne.png"><img src="images/moyen/small_licorne.png" alt="Chateau licorne"></a></td>
				<td>22 660 TTC</td>
				<td>28 090 TTC</td>
				<td>42 135 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Western</p><a href="images/moyen/western.png"><img src="images/moyen/small_western.png" alt="Chateau western"></a></td>
				<td>22 660 TTC</td>
				<td>28 090 TTC</td>
				<td>42 135 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Avengers</p><a href="images/moyen/avengers.jpg"><img src="images/moyen/small_avengers.jpg" alt="Chateau avengers"></a></td>
				<td>24 910 TTC</td>
				<td>31 270 TTC</td>
				<td>46 905 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Reine des Neiges</p><a href="images/moyen/reineDN.jpg"><img src="images/moyen/small_reineDN.jpg" alt="Chateau Reine des neiges"></a></td>
				<td>24 910 TTC</td>
				<td>31 270 TTC</td>
				<td>46 905 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Minions</p><a href="images/moyen/minions.png"><img src="images/moyen/small_minions.jpg" alt="Chateau minions"></a></td>
				<td>24 910 TTC</td>
				<td>31 270 TTC</td>
				<td>46 905 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Minnie Mickey</p><a href="images/moyen/mickey.jpg"><img src="images/moyen/small_mickey.jpg" alt="Chateau mickey"></a></td>
				<td>22 660 TTC</td>
				<td>28 090 TTC</td>
				<td>42 135 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Escalade</p><a href="images/moyen/escalade.jpg"><img src="images/moyen/small_escalade.jpg" alt="Chateau escalade"></a></td>
				<td>22 660 TTC</td>
				<td>28 090 TTC</td>
				<td>42 000 TTC</td>
			</tr>
		</table>
<?php $content = ob_get_clean(); ?> 
<?php include 'view/layout.php';?>

