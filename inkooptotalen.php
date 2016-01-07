<h1>Inkoop totalen</h1>
<p>Hieronder ziet u de inkoop totalen per leverancier:</p>

<?php
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT 
			    bedrijfsnaam, ROUND(SUM(prijs), 2) AS totaalprijs
			FROM
			    fabrieksassortiment
			GROUP BY bedrijfsnaam
			ORDER BY totaalprijs DESC;";
	$result = $conn->query($sql);
	
	echo 
	"<table>
		<tr>
			<th>Bedrijfsnaam</th>
			<th>Totaal</th>
		</tr>";
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo 
	    	"<tr>
	    		<td>" . $row['bedrijfsnaam'] . "</td>
	    		<td>&euro;" . $row['totaalprijs'] . "</td>
	    	</tr>";
	    }
	} else {
		echo "<td colspan='2' style='text-align: center'>Geen resultaten gevonden...</td>";
	}
	
	echo "</table>";
	
	$conn->close();
?>
	
<h3>De query die gebruikt is:</h3>
<p>Om de lijst van inkooptotalen te krijgen:</p>
<p>SELECT <br />
	    bedrijfsnaam, ROUND(SUM(prijs), 2) AS totaalprijs<br />
	FROM<br />
	    fabrieksassortiment<br />
	GROUP BY bedrijfsnaam<br />
	ORDER BY totaalprijs DESC;</p>