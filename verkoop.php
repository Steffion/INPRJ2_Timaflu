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
		<label for="bedrijf">Bedrijf: 
			<select name="bedrijf">';
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo '<option value="' . $row['bedrijfsnaam'] . '">' . $row['bedrijfsnaam'] . '</option>';
	    }
	} else {
		echo '<option value="noresults">Geen resultaten gevonden...</option>';
	}
	
	echo 
	'		</select>
		</label>
		<input type="text" name="firstname" value="John" readonly>
	</form>';
	
	$conn->close();
?>