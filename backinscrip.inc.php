 <?php 
 $dateinscr = date('Y-m-d');

 include("connexion.php");

 
 if((!empty($_POST["submit1"])) AND (!empty($_POST["nom"]) AND !empty($_POST["email"]) AND !empty($_POST["password1"]) AND !empty($_POST["password2"])))
{
  $nom = htmlspecialchars($_POST['nom']);
 $email = htmlspecialchars($_POST['email']);
 $password1 = htmlspecialchars($_POST['password1']);
 $password2 = htmlspecialchars($_POST['password2']);
  if($_POST["password1"]== $_POST["repassword2"]){
     
 
  // comparaison existence membre



  $recupUser = $pdo -> prepare('SELECT * FROM users WHERE nom = ? AND password1 = ? ');
$recupUser-> execute(array($nom,$password1));
if ($recupUser->rowCount()>0){

  echo '<script>alert(" Vous etes deja inscrits ou ces identifiants sont deja utilisés")</script>';
  echo '<script>window.location.replace("login.inc.php");</script>';

}
else{

// creation user

 

 



//recuperation id 





// Requête mysql pour insérer des données
$sql ="INSERT INTO `users` (`nom`,`email`,`motdepass`,`date-adhe`) VALUES (:nom,:email,:password1,:dateinscri)";

$res = $pdo->prepare($sql);
$exec = $res->execute(
  array(
":nom" => $nom,
":email" => $email,
":password1" => $password1,
":password2" => $password2,
":dateadhe" => $dateinscr,
));
if ($exec) {
  echo "Enregistrement ajouté avec succès.";
} else {
  echo "Erreur lors de l'ajout de l'enregistrement : " . $stmt->error;
}
  echo '<script>alert(" Votre inscription est terminée")</script>';
  echo '<script>window.location.replace("?li=forfait");</script>';

 
}

}

else{ 
  echo '<script>alert("Veuillez remplir entièrement le formulaire")</script>';
  echo '<script>window.location.replace("?li=inscription");</script>';
}



 

/*
}
else{ 
  echo '<script>alert("ACCES REFUSE")</script>';
  echo '<script>window.location.replace("?li=inscription");</script>';
}*/

// vérifier si la requête d'insertion a réussi




 }
 ?>