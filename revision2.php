<?php 
//Déclaration de Question 1
$Employes=array(
    "Emp1"=>array("nom"=>"Ali","poste"=>"Chef de projets","salaire"=>4500),
    "Emp2"=>array("nom"=>"Salma","poste"=>"Designer","salaire"=>3500),
    "Emp3"=>array("nom"=>"Imane","poste"=>"Analyste","salaire"=>4000),
    "Emp4"=>array("nom"=>"Youness","poste"=>"Developpeur","salaire"=>3500),
    "Emp5"=>array("nom"=>"Sara","poste"=>"Directeur marketing","salaire"=>4000),
);

//Déclaration de Question 3
$utilisateurs=array(
    "user1@gmail.com"=>"1234",
    "user2@gmail.com"=>"2345",
    "user3@gmail.com"=>"3456"
);


//Déclaration de Question 4
$produits = array(
    "Pomme" => 2.5,
    "Banane" => 1.2,
    "Orange" => 3.0,
    "Mangue" => 5.0,
    "Ananas" => 4.5
);


echo "<br><br><br><h3> Voici la réponse de la question 1 :</h3><br>";

function Salaire_Moyen($Employes){
 $moy=0;
 foreach($Employes as $Employe=>$infos) { 
  $moy=$moy+$infos["salaire"];
 }
 $moy=$moy/5;

    return $moy ;
}
echo "Le salaire moyen des Employés est : ".Salaire_Moyen($Employes);


echo "<br><br><br><h3> Voici la réponse de la question 2 :</h3><br>";
if($_SERVER["REQUEST_METHOD"]=="POST") 
{ $Emp_Rech=$_POST['nomEmp']; 
foreach($Employes as $Employe=>$infos) 
{ 
if($Emp_Rech==$infos["nom"]) { 
    echo "Le nom de l'employe recherché : ".$infos["nom"]. "<br>Le poste est :".$infos["poste"]."<br> Le salaire est : ".$infos["salaire"];
break; 
}
 else{ 
    echo "L'employé n'existe pas."; break;
 }
}
 } 


 echo "<br><br><br><h3> Voici la réponse de la question 3 :</h3><br>";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email=$_POST['email']; 
    $mdp=$_POST['mdp']; 
    if (array_key_exists($email, $utilisateurs) && $utilisateurs[$email] === $mdp) {
        echo "Connexion réussie! Bienvenue,".$email;

}else 
echo "Erreur";

  }



  echo "<br><br><br><h3> Voici la réponse de la question 4 :</h3><br>";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantites = $_POST['quantite'];
    $panier = array(); 
    $total = 0;

    foreach ($quantites as $produit => $quantite) {
        if ($quantite > 0) { 
            $prix = $produits[$produit] ; 
            $sousTotal = $quantite * $prix;
            $panier[] = array( 
                "nom" => $produit,
                "quantite" => $quantite,
                "prix" => $prix,
                "sousTotal" => $sousTotal
            );
            $total += $sousTotal;
        }
    }
    echo "<h1>Résumé de votre panier</h1>";
    if (!empty($panier)) {
        echo "<table border='1'>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire (€)</th>
                    <th>Sous-total (€)</th>
                </tr>";
        foreach ($panier as $produit) {
            echo "<tr>
                    <td>" . $produit['nom'] . "</td>
                    <td>" . $produit['quantite'] . "</td>
                    <td>" . $produit['prix'] . "</td>
                    <td>" . $produit['sousTotal'] . "</td>
                </tr>";
        }
        echo "</table>";
        echo "<h3>Total : $total €</h3>";
    } else {
        echo "<p>Votre panier est vide.</p>";
    }
} else {
    echo "<p>Veuillez retourner à la page du formulaire et sélectionner des produits.</p>";
}
?>



