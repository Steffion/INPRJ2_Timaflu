<h1>Verkoop</h1>

<?php
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT 
			    *
			FROM
			    klant
			ORDER BY bedrijfsnaam;";
	$result = $conn->query($sql);
	
	echo 
	'<form method="post" action="">
		<fieldset class="bedrijfsgegevens">
			<legend>Bedrijfsgegevens</legend>
			<table>
				<tr>
					<th>
						<label for="bedrijf">Bedrijf:
					</th>
					<th>
						<select name="bedrijf">';
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo '				<option value="' . $row['bedrijfsnaam'] . '">' . $row['bedrijfsnaam'] . '</option>';
	    }
	} else {
		echo '					<option value="noresults">Geen resultaten gevonden...</option>';
	}
	
	echo 
	'						</select>
						</label>
						<input type="text" name="search" placeholder="Zoeken..." />
					</th>
				</tr>
				<tr>
					<td>
						<label for="bedrijfsnaam">Bedrijfsnaam:
					</td>
					<td>
						<input type="text" name="bedrijfsnaam" value="Appie" readonly></label>
					</td>
				</tr>
				<tr>
					<td>
						<label for="straatnaam">Straatnaam:
					</td>
					<td>
						<input type="text" name="straatnaam" value="Reactorweg" readonly></label>
					</td>
				</tr>
				<tr>
					<td>
						<label for="huisnummer">Huisnummer:
					</td>
					<td>
						 <input type="text" name="huisnummer" value="76" readonly></label><br />
					</td>
				</tr>
				<tr>
					<td>
						<label for="woonplaats">Woonplaats:
					</td>
					<td>
						<input type="text" name="woonplaats" value="Utrecht" readonly></label>
					</td>
				</tr>				
			</table>
		</fieldset><br />';
?>
		<fieldset class="bestelling">
		<legend>Bestelling</legend>
			<table>
				<tr>
					<th>Medicijn</th>
					<th>Aantal</th>
					<th>Prijs</th>
					<th>Totaalprijs</th>
				</tr>
			<?php
				$sql = "SELECT 
						    *
						FROM
						    medicijn
						ORDER BY naam;";
				
				for ($i = 0; $i < 5; $i++) {
					$result = $conn->query($sql);
					echo'
				<tr>
					<td>
						<select>';
					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					    	echo
					    	'<option value="' . $row['artikelcode'] . '">' . $row['naam'] . '</option>';
					    }
					} else {
						echo '<option value="noresults">Geen resultaten gevonden...</option>';
					}
					
					echo
					'	</select>
					</td>
					<td><input type="number" name="XXXXXXX_aantal" min="0" max="99999" value="0"></td>
					<td>&euro;XX,XX</td>
					<td>&euro;XX,XX</td>
				</tr>';
				}
			?>
			<tr>
				<th></th>
				<th></th>
				<th>Totaal (excl. korting):</th>
				<th>&euro;XX,XX</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>Korting 5%:</td>
				<td>&euro;XX,XX</td>
			</tr>
			<tr>
				<th></th>
				<th></th>
				<th>Totaal (incl. korting):</th>
				<th>&euro;XX,XX</th>
			</tr>
		</table>
	</fieldset><br />
	<fieldset>
		<input class="submit" type="submit" name="submit" value="Bestellen" onclick="alert('Bestelling is doorgevoerd!')"/><br />
	</fieldset>
</form>

<h3>Queries die gebruikt zijn:</h3>
<p>SELECT <br />
	    *<br />
	FROM<br />
	    klant<br />
	ORDER BY bedrijfsnaam;</p>
<p>Om de lijst van klanten te krijgen.</p>
<br />
<p>SELECT <br />
	    *<br />
	FROM<br />
	    medicijn<br />
	ORDER BY naam;</p>
<p>Om de lijst van medicijnen te krijgen.</p>