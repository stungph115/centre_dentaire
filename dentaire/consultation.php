<br/><br/><br/><br/>

<h2> Gestion des consultation </h2>
<br>
<h3>Ajout d'une consultation</h3>
<form method="post" action ="">
<table border =0>

<tr><td>Numéro de patient:</td>
	<td><input type="text" name="numdos"></td>
</tr>

<tr><td>Numéro du médecin:</td>
	<td><input type="text" name="numM"></td>
</tr>

<tr><td>Salle de la consulation:</td>
	<td><input type="text" name="numS"></td>
</tr>

<tr><td>Numéro de l'asisstant:</td>
	<td><input type="text" name="numA"></td>
</tr>

<tr><td>Type de la consultation:</td>
	<td><input type="text" name="typeC"></td>
</tr>

<tr><td>Date de la consultation:</td>
	<td><input type="date" name="dateC"></td>
</tr>

<tr><td>Heure de la consultation:</td>
	<td><input type="time" name="heureC"></td>
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
			insertConsultation($_POST);
			echo "<br/> Insertion reussie de la consultation </br>";
		} 	
		if(isset($_GET['numC']))
		{
			$numC = $_GET['numC'];
			deleteConsultation($numC);
			echo "<br/> Suppression reussie</br>";
		}
	?>

<br/>
<h3>Liste des consultations</h3>
<table border=1>
<tr><td>Numéro de la consulation</td>
	<td>Numéro du patient</td>
	<td>Numéro du médecin</td>
	<td>Numéro de la salle </td>
	<td>Numéro de l'asisstant</td>
	<td>Type de la consultation</td>
	<td>Date de la consultation</td>
	<td>Heure de la consultation</td>
	<td>Suppression</td>
</tr>

	<?php
		$lesConsultation = selectAllConsultation();
	
		foreach ($lesConsultation as $uneConsultation)
		{
			echo "<tr>  <td>".$uneConsultation['numC']." </td>
						<td>".$uneConsultation['numdos']." </td>
						<td>".$uneConsultation['numM']." </td>
						<td>".$uneConsultation['numS']." </td>
						<td>".$uneConsultation['numA']." </td>
						<td>".$uneConsultation['typeC']." </td>
						<td>".$uneConsultation['dateC']." </td>
						<td>".$uneConsultation['heureC']." </td>


						<td> <a href='index.php?page=5&numC=".$uneConsultation['numC']."'>
							<img src = 'images/suprimer.png' width='30' height='30'>
							</a> </td>
				</tr>";
		}
	?>	
</table>
