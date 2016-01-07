<h1>Inkoop</h1>

<?php
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT 
			    *
			FROM
			    medicijn
			        JOIN
			    fabrieksassortiment ON medicijn.artikelcode = fabrieksassortiment.artikelcode
			        JOIN
			    fabrikant ON fabrieksassortiment.bedrijfsnaam = fabrikant.bedrijfsnaam
			WHERE
			    voorraad <= minimaleVoorraad
			GROUP BY medicijn.artikelcode;";
	$result = $conn->query($sql);
	
	echo 
	"<table>
		<tr>
			<th>Naam</th>
			<th>Artikelcode</th>
			<th>Fabrikant</th>
			<th>Telefoonnummer</th>
			<th>Contactpersoon</th>
			<th>Huidige voorraad</th>
			<th>Minimale voorraad</th>
		</tr>";
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo 
	    	"<tr>
	    		<td>" . $row['naam'] . "</td>
	    		<td>" . $row['artikelcode'] . "</td>
	    		<td>" . $row['bedrijfsnaam'] . "</td>
	    		<td>" . $row['telefoonnummer'] . "</td>
	    		<td>" . $row['naamContactpersoon'] . "</td>
	    		<td>" . $row['voorraad'] . "</td>
	    		<td>" . $row['minimaleVoorraad'] . "</td>
	    	</tr>";
	    }
	} else {
		echo "<td colspan='7' style='text-align: center'>Geen resultaten gevonden...</td>";
	}
	
	echo "</table>";
	
	$conn->close();
?>

<h3>De query die gebruikt is:</h3>
<p>Om de lijst met artikelen die ingekocht moeten worden te krijgen:</p>
<p>SELECT <br />
	    *<br />
	FROM<br />
	    medicijn<br />
	        JOINv
	    fabrieksassortiment ON medicijn.artikelcode = fabrieksassortiment.artikelcode<br />
	        JOIN<br />
	    fabrikant ON fabrieksassortiment.bedrijfsnaam = fabrikant.bedrijfsnaam<br />
	WHERE<br />
	    voorraad <= minimaleVoorraad<br />
	GROUP BY medicijn.artikelcode;</p>