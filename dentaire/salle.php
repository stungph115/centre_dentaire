<br/><br/><br/><br/>
<h2> Gestion des salles </h2>
<br>
<h3>Ajout d'une salle</h3>
<form method="post" action ="">
<table border =0>

<tr><td>Nom de la salle:</td>
	<td><input type="text" name="nomS"></td>
</tr>

<tr><td>Type de la salle:</td>
	<td><input type="text" name="typeS"></td>
</tr>



<tr><td> 

	<div class="dropdown">
  		<button type="submit" name="Valider" value="Valider" style="border: 0; background: transparent"> 
  				<img src="images/valider.png" width="40" height="40" alt="submit" />
   			 </button>


 		 <div class="dropdown-content">
 		 <p>Cliquer pour valider</p>
 		 </div>
	</div>



	<div class="dropdown">
  		<button type="reset" name="annuler" value="annuler" style="border: 0; background: transparent"> 
  				<img src="images/annuler.png" width="40" height="40" alt="reset" />
   			 </button>


 		 <div class="dropdown-content">
 		 <p>Cliquer pour annuler</p>
 		 </div>
	</div>
</table>
</form>

	<?php 
		if(isset($_POST['Valider']))
		{
			insertSalle($_POST);
			echo "<br/> Insertion reussie de la salle </br>";
		} 	
		if(isset($_GET['numS']))
		{
			$numS = $_GET['numS'];
			deleteSalle($numS);
			echo "<br/> Suppression reussie</br>";
		}
	?>

<br/>
<h3>Liste des salles</h3>
<table border=1>
<tr><td>Numéro de la salle</td>
	<td>Nom de la salle</td>
	<td>Type de la salle</td>
	<td>Suppression</td>
</tr>

	<?php
		$lesSalles = selectAllSalle();
	
		foreach ($lesSalles as $uneSalle)
		{
			echo "<tr>  <td>".$uneSalle['numS']." </td>
						<td>".$uneSalle['nomS']." </td>
						<td>".$uneSalle['typeS']." </td>
						

						<td> <a href='index.php?page=4&numS=".$uneSalle['numS']."'>
							<img src = 'images/suprimer.png' width='30' height='30'>
							</a> </td>
				</tr>";
		}
	?>	
</table>
