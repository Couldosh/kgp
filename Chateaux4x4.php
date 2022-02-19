<?php ob_start(); ?> 
		<table>
			<tr>
				<th></th>
				<th>1/2 journée</th>
				<th>Journée complète</th>
				<th>Forfait Week-End<br>(Samedi 10h jusqu'à Dimanche 16h)</th>
			</tr>
			<tr>
				<td><p class="ptable">Vaiana</p><a href="images/petit/vaiana.png"><img src="images/petit/small_vaiana.png" alt="Chateau Vaiana"></a></td>
				<td>19 506 TTC</td>
				<td>24 380 TTC</td>
				<td>36 570 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Dinosaure</p><a href="images/petit/dinosaure.png"><img src="images/petit/small_dinosaure.png" alt="Chateau dinosaure"></a></td>
				<td>19 206 TTC</td>
				<td>24 380 TTC</td>
				<td>36 570 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Disney</p><a href="images/moyen/disney.jpg"><img src="images/moyen/small_disney.jpg" alt="Chateau disney"></a></td>
				<td>19 206 TTC</td>
				<td>24 380 TTC</td>
				<td>36 570 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Etoilé</p><a href="images/petit/etoilé.jpg"><img src="images/petit/small_etoilé.jpg" alt="Chateau étoilé"></a></td>
				<td>17 490 TTC</td>
				<td>22 260 TTC</td>
				<td>33 390 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Rio</p><a href="images/petit/rio.jpg"><img src="images/petit/small_rio.jpg" alt="Chateau rio"></a></td>
				<td>17 490 TTC</td>
				<td>22 260 TTC</td>
				<td>33 390 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Océan</p><a href="images/petit/océan.jpg"><img src="images/petit/small_océan.jpg" alt="Chateau océan"></a></td>
				<td>17 490 TTC</td>
				<td>22 260 TTC</td>
				<td>33 390 TTC</td>
			</tr>
			<tr>
				<td><p class="ptable">Clochette</p><a href="images/petit/clochette.jpg"><img src="images/petit/small_clochette.jpg" alt="Chateau clochette"></a></td>
				<td>17 490 TTC</td>
				<td>22 260 TTC</td>
				<td>33 390 TTC</td>
			</tr>
		</table>
<?php $content = ob_get_clean(); ?> 
<?php include 'view/layout.php';?>
