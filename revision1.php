<?php 
//Déclaration de Question 1 
$etudiant=[
    "nom"=>"Sara",
    "prenom"=>"Sasa",
    "matricule"=>"A10000"
 ];
 //Déclaration de Question 3
 $produits=array(
    "produit 1"=>array("nom"=>"PRD A","prix"=>100),
   "produit 2"=>array("nom"=>"PRD B","prix"=>200),
   "produit 3"=>array("nom"=>"PRD C","prix"=>300)
 );

//Déclaration de Question 4
$scores=array(
"score 1"=>80,
"score 2"=>70.5,
"score 3"=>50,
"score 4"=>55,
"score 5"=>60
);


//Déclaration de Question 5
$pays=array(
"Maroc"=> 38000000 ,
"Algérie"=> 45000000  ,
"Égypte"=> 110000000 ,
"Italie"=> 60000000 ,
"Espagne"=> 48000000 
);







echo "<br><br><br><h3>Voici la réponse de la question 2 :</h3><br>";
echo "Le nom :".$etudiant["nom"]."<br>Le prénom :".$etudiant["prenom"]."<br>Matricule :".$etudiant["matricule"];
$etudiant["note"]=13;
$etudiant["note"]=15;
echo "<br>Le nom :".$etudiant["nom"]."<br>Le prénom :".$etudiant["prenom"]."<br>Matricule :".$etudiant["matricule"]."<br>Note :".$etudiant["note"];




echo "<br> <br><br><h3>Voici la réponse de la question 3 :</h3><br>";
foreach($produits as $produit=>$value){
    echo "Nom du  ".$produit.":".$value["nom"]." <br>" ;
    echo "Prix du  ".$produit.":".$value["prix"]." <br>" ;

}



$m=0;
echo "<br><br><br><h3>Voici la réponse de la question 4 :</h3><br>";
foreach($scores as $score)
{ 
    $m=$m + $score;
 
}
$m=$m/5;
echo "La moyenne des scores est :".$m;





echo "<br><br><br><h3>Voici la réponse de la question 5 :</h3><br>";
arsort($pays);
echo "Les pays triées par population en ordre décroissant :  ";
foreach($pays as $pay)
{ 
    echo "<br>".$pay;
}


echo "<br><br><br><h3> Voici la réponse de la question 6 :</h3><br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$nom=$_POST['nom'];
$age=$_POST['age'];
if(filter_var($age,FILTER_VALIDATE_INT)!== false && $age>0) { 
    echo "Bienvenue $nom, vous avez $age ans!"; }
else { 
    echo "Erreur: Veuillez entrer un age valide (entier supérieur à 0.)";
    }
}


echo "<br><br><br><h3> Voici la réponse de la question 8 :</h3><br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$c=$_POST['couleur_preferee'];
echo "Votre couleur préférée est : $c";
   }



   echo "<br><br><br><h3> Voici la réponse de la question 9 :</h3><br>";
   if(isset($_GET['A']) && isset($_GET['B']))
   { 
    $a=$_GET['A'];
    $b=$_GET['B'];
   

    $somme ;
    $somme=$a + $b;
    echo "La somme de $a et $b est : $somme";
    
   }
   else {  
    echo "Erreur";
   } 


   echo "<br><br><br><h3> Voici la réponse de la question 10 :</h3><br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$TypeC=$_POST['tc'];
if($TypeC=='Administrateur'){ 
    echo"Bienvenue, administrateur !"; 
}
else {  
echo "Bienvenue, utilisateur simple !"
}
   }

















