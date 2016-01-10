<div class="factuurbutton">
			<ul><a href="?page=facturering">terug</a></ul>
			<ul><a href="?page=nieuwfactuur">nieuwe factuur</a></ul>
		
		</div>
		<div class="center">
		<p>
		select bestelling.ordernummer, bestelling.bedrijfsnaam, factuur.factuurnummer
		from bestelling
		</p>
		<p>
		join factuur on bestelling.ordernummer= factuur.ordernummer
		
		<h1> 3 orders binnen </h1>
		<table>
			<tr>
				<td>bedrijf</td>
				<td>ordernummer</td>
				<td>prijs</td>
				<td>factuurnummer</td>
			</tr>
			<tr>
				<td>vb1</td>
				<td>2304</td>
				<td>3530</td>
				<td>7644</td>
			</tr>
			<tr>
				<td>vb2</td>
				<td>2495</td>
				<td>2554</td>
				<td>5634</td>
			</tr>
			<tr>
				<td>vb3</td>
				<td>5321</td>
				<td>2400</td>
				<td>0634</td>
			
			</tr>

		</table>
		</div>