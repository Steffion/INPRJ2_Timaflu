<h1>Openstaande orders</h1>

<?php
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT 
			    bedrijfsnaam,
			    bestelregel.ordernummer,
			    artikelcode,
			    aantal,
			    statusBeschrijving
			FROM
			    bestelling
			        JOIN
			    bestelregel ON bestelling.ordernummer = bestelregel.ordernummer
			WHERE
			    statusBeschrijving NOT LIKE 'verzonden';";
	$result = $conn->query($sql);
	
	echo 
	"<table>
		<tr>
			<th>Bedrijfsnaam</th>
			<th>Ordernummer</th>
			<th>Artikelcode</th>
			<th>Aantal</th>
			<th>Status</th>
		</tr>";
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo 
	    	"<tr>
	    		<td>" . $row['bedrijfsnaam'] . "</td>
	    		<td>" . $row['ordernummer'] . "</td>
	    		<td>" . $row['artikelcode'] . "</td>
	    		<td>" . $row['aantal'] . "</td>
	    		<td>" . $row['statusBeschrijving'] . "</td>
	    	</tr>";
	    }
	} else {
		echo "<td colspan='5' style='text-align: center'>Geen resultaten gevonden...</td>";
	}
	
	echo "</table>";
	
	$conn->close();
?>
	
<h3>De query die gebruikt is:</h3>
<p>Om de lijst met openstaande orders te krijgen:</p>
<p>SELECT 
	    bedrijfsnaam,
	    bestelregel.ordernummer,
	    artikelcode,
	    aantal,
	    statusBeschrijving
	FROM
	    bestelling
	        JOIN
	    bestelregel ON bestelling.ordernummer = bestelregel.ordernummer
	WHERE
	    statusBeschrijving NOT LIKE 'verzonden';</p>