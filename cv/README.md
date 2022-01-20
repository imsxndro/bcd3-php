# Exercice : bwd3-cv

## Consigne :

Regrouper la totalité des données pour la création de votre CV dans un fichier externe et publié de nouveau sur GitHub (même repository).

## Vous devez utiliser :

* "include" ou "require" dans index.php pour include le fichier nommé "config.php" (ou directement en entete de votre index.php).
* Utilisez des variables. 
```
Ex :
$titre   = "Mon CV";
$prenom  = "John";
$nom     = "DOE";
$email   = "johndoe@tld.com";
$age     = 25;
$tel     = "06 23 45 67 89";
$adresse = "140 rue Lorem Ipsum, 17000 LA ROCHELLE, France";
$langues = ["English", "German", "French"];

$reseaux = [
    "facebook"  => "url_vers_votre_page",
    "twitter"   => "url_vers_votre_page",
    "linkedin"  => "url_vers_votre_page",
    "instagram" => "url_vers_votre_page",
];
```
* Utilisez des tableaux 
```
Ex : 
$workExperience = [
  [
    "dateDebut"   => "...",
    "dateFin"     => "...",
    "societe"     => "...",
    "titre"       => "...",
    "description" => "...",
  ],
  ...
];
```
* Utilisez des boucles "foreach".
* Faire fonctionner le formulaire pour qu'il affiche l'ensemble des données des champs, juste au dessus du formulaire.
