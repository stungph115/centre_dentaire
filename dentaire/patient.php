<br/><br/><br/><br/>

<h2> Gestion des patients </h2>
<br>
<h3>Ajout d'un patients</h3>
<form method="post" action ="">
<table border =0>

<tr><td>Nom du patient:</td>
	<td><input type="text" name="nomP"></td>
</tr>

<tr><td>Prénom du patient:</td>
	<td><input type="text" name="prenomP"></td>
</tr>

<tr><td>Date de naissance du patient:</td>
	<td><input type="date" name="datenaissP"></td>
</tr>

<tr><td>Sexe du patient:</td>
	<td><select id="sexe" name="sexe">
	 <option value="male">male</option>
    <option value="female">female</option></td>
</tr>

<tr><td>Adresse postale du patient:</td>
	<td><input type="text" name="adresse"></td>
</tr>

<tr><td>Adresse mail du patient:</td>
	<td><input type="text" name="email"></td>
</tr>

<tr><td>Numéro de sécurité social du patient:</td>
	<td><input type="text" name="numsecu"></td>
</tr>

<tr><td>Numéro de téléphone du patient:</td>
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
</table>
</form>

	<?php 
		if(isset($_POST['Valider']))
		{
			insertPatient($_POST);
			echo "<br/> Insertion reussie du patient </br>";
		} 	
		if(isset($_GET['numdos']))
		{
			$numdos = $_GET['numdos'];
			deletePatient($numdos);
			echo "<br/> Suppression reussie</br>";
		}
	?>

<br/>
<h3>Liste des patients</h3>
<table border=1>
<tr><td>Numéro du patient</td>
	<td>Nom du patient</td>
	<td>Prénom du patient</td>
	<td>Date de naissance du patient</td>
	<td>Sexe du patient</td>
	<td>Adresse postale du patient</td>
	<td>Adresse mail du patient</td>
	<td>Numéro sécurité social du patient</td>
	<td>Numéro téléphone du patient</td>
	<td>Suppression</td>
</tr>

	<?php
		$lesPatients = selectAllPatient();
	
		foreach ($lesPatients as $unPatient)
		{
			echo "<tr>  <td>".$unPatient['numdos']." </td>
						<td>".$unPatient['nomP']." </td>
						<td>".$unPatient['prenomP']." </td>
						<td>".$unPatient['datenaissP']." </td>
						<td>".$unPatient['sexe']." </td>
						<td>".$unPatient['adresse']." </td>
						<td>".$unPatient['email']." </td>
						<td>".$unPatient['numsecu']." </td>
						<td>".$unPatient['tel']." </td>

						<td> <a href='index.php?page=3&numdos=".$unPatient['numdos']."'>
							<img src = 'images/suprimer.png' width='30' height='30'>
							</a> </td>
				</tr>";
		}
	?>	
</table>
