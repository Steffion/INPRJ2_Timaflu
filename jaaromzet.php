<div class=afbeelding>
				<p>
SELECT
naam, medicijn.artikelcode, SUM(aantal) AS totaalaantal,
prijs,(sum(aantal) * prijs) as omzet 

FROM
bestelregel
</p>
<p>
JOIN
medicijn ON bestelregel.artikelcode = medicijn.artikelcode
join
prijsHistorie ON bestelregel.artikelcode = medicijn.artikelcode

GROUP BY artikelcode
ORDER BY totaalaantal DESC;
</p>

			</div>
			<div class=afbeelding>
				<img src="rapport_omzet.png">
				
			</div>