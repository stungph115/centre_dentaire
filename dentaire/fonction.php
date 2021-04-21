<?php 
	function connextion()
	{
		$con = mysqli_connect("localhost", "root", "", "dentaire");
		if ($con==null) 
		{
			echo "<br/> Erreur de connextion du serveur ! </br>";
		}
		return $con;
	}

	function deconnextion($con)
	{
		mysqli_close($con);
	}

//Gestion des medecins
	function insertMedecin($tab)
	{
		$con = connextion();
		if ($con != null) 
		{
			$requette  = "insert into medecin values (null, '".$tab['nomM']."','".$tab['prenomM']."', '".$tab['specialiste']."', '".$tab['adresse']."', '".$tab['email']."', '".$tab['tel']."');";  
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

	function selectAllMedecin ()
	{
		$con = connextion();
		if($con != null)
		{
			$requette ="select * from medecin;";
			$resultats = mysqli_query ($con, $requette);
			deconnextion($con);
			return $resultats;
		}
	}

	function deleteMedecin($numM)
	{
		$con = connextion();
		if($con !=null)
		{
			$requette = "delete from medecin where numM = ".$numM.";";
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

//Gestion des asisstants
	function insertAsisstant($tab)
	{
		$con = connextion();
		if ($con != null) 
		{
			$requette  = "insert into asisstant values (null, '".$tab['nomA']."','".$tab['prenomA']."', '".$tab['adresse']."', '".$tab['email']."', '".$tab['tel']."');";  
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

	function selectAllAsisstant()
	{
		$con = connextion();
		if($con != null)
		{
			$requette ="select * from asisstant;";
			$resultats = mysqli_query ($con, $requette);
			deconnextion($con);
			return $resultats;
		}
	}

	function deleteAsisstant($numA)
	{
		$con = connextion();
		if($con !=null)
		{
			$requette = "delete from asisstant where numA = ".$numA.";";
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

//Gestion des patients
	function insertPatient($tab)
	{
		$con = connextion();
		if ($con != null) 
		{
			$requette  = "insert into patient values (null, '".$tab['nomP']."','".$tab['prenomP']."', '".$tab['datenaissP']."', '".$tab['sexe']."', '".$tab['adresse']."', '".$tab['email']."', '".$tab['numsecu']."', '".$tab['tel']."');";  
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

	function selectAllPatient()
	{
		$con = connextion();
		if($con != null)
		{
			$requette ="select * from patient;";
			$resultats = mysqli_query ($con, $requette);
			deconnextion($con);
			return $resultats;
		}
	}

	function deletePatient($numdos)
	{
		$con = connextion();
		if($con !=null)
		{
			$requette = "delete from patient where numdos = ".$numdos.";";
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

//Gestion des salles

function insertSalle($tab)
	{
		$con = connextion();
		if ($con != null) 
		{
			$requette  = "insert into salle values (null, '".$tab['nomS']."', '".$tab['typeS']."');";  
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

	function selectAllSalle()
	{
		$con = connextion();
		if($con != null)
		{
			$requette ="select * from salle;";
			$resultats = mysqli_query ($con, $requette);
			deconnextion($con);
			return $resultats;
		}
	}

	function deleteSalle($numS)
	{
		$con = connextion();
		if($con !=null)
		{
			$requette = "delete from salle where numS = ".$numS.";";
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

//gestion des consultations

	function insertConsultation($tab)
	{
		$con = connextion();
		if ($con != null) 
		{
			$requette  = "insert into consultation values (null, '".$tab['numdos']."', '".$tab['numM']."', '".$tab['numS']."', '".$tab['numA']."', '".$tab['typeC']."', '".$tab['dateC']."', '".$tab['heureC']."');";  
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}

	function selectAllConsultation()
	{
		$con = connextion();
		if($con != null)
		{
			$requette ="select * from consultation;";
			$resultats = mysqli_query ($con, $requette);
			deconnextion($con);
			return $resultats;
		}
	}

	function deleteConsultation($numC)
	{
		$con = connextion();
		if($con !=null)
		{
			$requette = "delete from consultation where numC = ".$numC.";";
			mysqli_query($con, $requette);
			deconnextion($con);
		}
	}