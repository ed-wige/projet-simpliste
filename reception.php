<?php
session_start();
require('connexion.php');

//reception des données
//pour notre apprenant

$nom= $_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$ville=$_POST['ville'];
$genre=$_POST['genre'];
$formation=$_POST['formation'];
$etablissement=$_POST['etablissement'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$photo=$_FILES['photo'];
move_uploaded_file( $photo['tmp_name'], 'ima/'.$telephone.'photo.jpg');
$projet=$_POST['projet'];
//pour notre tuteur
$nom_tuteur=$_POST['nom_tuteur'];
$prenom_tuteur=$_POST['prenom_tuteur'];
$telephone_tuteur=$_POST['telephone_tuteur'];
$profession_tuteur=$_POST['profession_tuteur'];

$insert=$db->prepare ('INSERT INTO tuteur( nom, prenom, contact, profession ) value(?,?,?,?)');
$insert->execute (array($nom_tuteur,$prenom_tuteur,$telephone_tuteur,$profession_tuteur));

$selec=$db->prepare('SELECT * FROM tuteur WHERE contact=:ctc ');
$selec->execute(array("ctc"=>$telephone_tuteur));
$donnes=$selec->fetch();

// echo "Votre Nom est:".$nom."Votre prénom est:".$prenom."Votre email est:".$email."Votre message est:".$message;
$insert1=$db->prepare ('INSERT INTO apprenant(contact,nom,prenom,genre,dateDeNaissance,villeD_origine, formationSuivie, etablissementPrecedent, telephone, email, photo, projetPersonnel ) value(?,?,?,?,?,?,?,?,?,?,?,?)');

$nb=$db->prepare(" SELECT email AS nb FROM apprenant WHERE email=?");
$nb->execute(array($email));
$result=$nb->fetchAll();                                    
if (count($result)==0){

$insert1->execute (array($donnes['contact'],$nom,$prenom,$genre,$date,$ville,$formation,$etablissement,$telephone, $email,'ima/'.$telephone.'photo.jpg',$projet));

}else {
        echo("Cet apprenant existe déja.");
exit;
}