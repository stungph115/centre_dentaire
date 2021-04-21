<br/><br/><br/><br/>

<h2> Gestion des assisstants </h2>
<br>
<h3>Ajout d'un assisstant</h3>
<form method="post" action ="">
<table border =0>

<tr><td>Nom de l'assisstant:</td>
	<td><input type="text" name="nomA"></td>
</tr>

<tr><td>Prénom de l'assisstant:</td>
	<td><input type="text" name="prenomA"></td>
</tr>

<tr><td>Adresse postale de l'assisstant:</td>
	<td><input type="text" name="adresse"></td>
</tr>

<tr><td>Adresse mail de l'assisstant:</td>
	<td><input type="email" name="email"></td>
</tr>
<tr><td>Numéro de téléphone de l'assisstant:</td>
	<td><input type="tel" name="tel"></td>
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




</td></tr>

</table>
</form>

	<?php 
		if(isset($_POST['Valider']))
		{
			insertAsisstant($_POST);
			echo "<br/> Insertion reussie de l'asisstant </br>";
		} 	
		if(isset($_GET['numA']))
		{
			$numA = $_GET['numA'];
			deleteAsisstant($numA);
			echo "<br/> Suppression reussie</br>";
		}
	?>

<br/>
<h3>Liste des assisstants</h3>
<table border=1>
<tr><td>Numéro de l'assisstant</td>
	<td>Nom de l'assisstant</td>
	<td>Prénom de l'assisstant</td>
	<td>Adresse postale de l'assisstant</td>
	<td>Adresse mail de l'assisstant</td>
	<td>Numéro téléphone de l'assisstant</td>
	<td>Suppression</td>
</tr>

	<?php
		$lesAsisstants = selectAllAsisstant();
		
		foreach ($lesAsisstants as $unAsisstant)
		{
			echo "<tr>  <td>".$unAsisstant['numA']." </td>
						<td>".$unAsisstant['nomA']." </td>
						<td>".$unAsisstant['prenomA']." </td>
						<td>".$unAsisstant['adresse']." </td>
						<td>".$unAsisstant['email']." </td>
						<td>".$unAsisstant['tel']." </td>

						<td> <a href='index.php?page=2&numA=".$unAsisstant['numA']."'>
							<img src = 'images/suprimer.png' width='30' height='30'>
							</a> </td>
				</tr>";
		}
	?>	
</table>
