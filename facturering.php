<div class="factuurbutton">
	<ul><a href="?page=verkooporders">Verkooporders</a></ul>
	</div>
<div class="center">
<p>
select factuur.betaald, klant.telefoonnummer,
from factuur
</p>
<p>
join
bestelling on factuur.ordernummer=bestelling.ordernummer
join 
klant on bestelling.bedrijfsnaam=klant.bedrijfsnaam

	<h1>hier komt een lijst met wanbetalers</h1>
<table>
	<tr>
		<td>bedrijf</td>
		<td>weken achterstand</td>
		<td>nog te betalen</td>
		<td>telefoonnummer</td>
	</tr>
	<tr>
		<td>vb1</td>
		<td>3</td>
		<td>3000</td>
		<td>0658957895</td>
	</tr>
	<tr>
		<td>vb2</td>
		<td>2</td>
		<td>250</td>
		<td>0635215254</td>
	</tr>
	<tr>
		<td>vb3</td>
		<td>5</td>
		<td>2500</td>
		<td>0634255284</td>
	
	</tr>

</table>
</div>