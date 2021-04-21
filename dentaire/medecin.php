<br/><br/><br/><br/>

<h2> Gestion des médecins </h2>
<br>
<h3>Ajout d'une médecin</h3>
<form method="post" action ="">
<table border =0>

<tr><td>Nom du médecin:</td>
	<td><input type="text" name="nomM"></td>
</tr>

<tr><td>Prénom du médecin:</td>
	<td><input type="text" name="prenomM"></td>
</tr>

<tr><td>Spécialiste du médecin:</td>
	<td><input type="text" name="specialiste"></td>
</tr>

<tr><td>Adresse postale du médecin:</td>
	<td><input type="text" name="adresse"></td>
</tr>

<tr><td>Adresse mail du médecin:</td>
	<td><input type="text" name="email"></td>
</tr>
<tr><td>Numéro de téléphone du médecin:</td>
	<td><input type="text" name="tel"></td>
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
			insertMedecin($_POST);
			echo "<br/> Insertion reussie du médecin </br>";
		} 	
		if(isset($_GET['numM']))
		{
			$numM = $_GET['numM'];
			deleteMedecin($numM);
			echo "<br/> Suppression reussie</br>";
		}
	?>

<br/>
<h3>Liste des médecins </h3>
<table border=1>
<tr><td>Numéro du médecin</td>
	<td>Nom du médecin</td>
	<td>Prénom du médecin</td>
	<td>spécialiste du médecin</td>
	<td>Adresse postale du médecin</td>
	<td>Adresse mail du médecin</td>
	<td>Numéro téléphone du médecin</td>
	<td>Suppression</td>
</tr>

	<?php
		$lesMedecins = selectAllMedecin();
		foreach ($lesMedecins as $unMedecin)
		{
			echo "<tr>  <td>".$unMedecin['numM']." </td>
						<td>".$unMedecin['nomM']." </td>
						<td>".$unMedecin['prenomM']." </td>
						<td>".$unMedecin['specialiste']." </td>
						<td>".$unMedecin['adresse']." </td>
						<td>".$unMedecin['email']." </td>
						<td>".$unMedecin['tel']." </td>

						<td> <a href='index.php?page=1&numM=".$unMedecin['numM']."'>
							<img src = 'images/suprimer.png' width='30' height='30'>
							</a> </td>
				</tr>";
		}
	?>	
</table>
