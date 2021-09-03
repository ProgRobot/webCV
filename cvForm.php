<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styleFormulaireProjet.css">
    <title>Add project</title>
  </head>
  <body>

    <form action="cvForm.php" method="post">
      <fieldset>
      <legend><b>INFORMATIONS A PROPOS DU PROJET</b></legend>
      <label for="projectTitleField"><b>Titre du projet:</b></label>
      <input id="projectTitleField" name="projectTitle" type="text" size="128" placeholder="Exemple: Réalisation d'un drone quadrirotor"  required><br><br>
      <label for="dateDebutField"><b>Commencé le:</b></label>
      <input type="date" name="DateDebut" id="dateDebutField" required>
      <label id="finiLeLabel" for="dateFinField"><b>Fini le:</b></label>
      <input type="date" name="DateFin" id="dateFinField" required><br><br>
      <label for="projectDescription"><b>Description:</b></label><br>
      <textarea name="projectDescriptionField" id="projectDescription" placeholder="Exemple: Ce projet consiste à la réalisation d'un drone quadrirotor, le but est de réussir à stabiliser le drone dans une altitude dans des conditions climatiques normal..." cols="133" rows="10" required></textarea><br><br>
      <label for="usedLogicField"><b>Logique utilisée:</b></label><br>
      <textarea name="projectLogic" id="usedLogicField" placeholder="Exemple: J'ai commencé à réaliser le modele mathématique du drone sous Matlab Simulink, j'ai simulé en ajustant les paramètres du système et de la commande pour garantir les spécifications du cahier des charges...etc " cols="133" rows="10" required></textarea><br><br>
      <?php 
      //TODO add "Taches effectuées" + Add the attribute in the database
      ?>
      <label for="projectSkillsField"><b>Compétences acquises:</b></label><br>
      <input id="projectSkillsField" name="projectSkills" type="text" size="148" placeholder="Exemple: Solidworks, Matlab/Simulink, Modelisation ... etc " required><br><br>
      <a href="index.php">Revenir au CV</a>
      <input id="btnAjouterProjetForm" type="submit" name="btnAjouter" value="Ajouter+">
     
      <?php 
      
    if (isset($_POST['projectTitle']) && isset($_POST['DateDebut']) && isset($_POST['DateFin'])&&isset($_POST['projectDescriptionField'])&&isset($_POST['projectLogic'])&&isset($_POST['projectSkills'])&&isset($_POST['btnAjouter'])) {

         try 
          {
          //Connection to the database
          $bdd = new PDO('mysql:host=localhost;dbname=cvwebdb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          } catch (Exception $e) {
          // In the event of an error, a message is displayed and everything is stopped
          die('Erreur' . $e->getMessage());
          }

        //Insertion
        $req = $bdd->prepare('INSERT INTO cvwebdb.projet(intitule, date_debut, date_fin,description,logique_utilise,competences_acquises) VALUES(:intitule, :date_debut, :date_fin,:description,:logique_utilise,:competences_acquises)');
        $req->execute(array('intitule' => $_POST['projectTitle'],'date_debut' => $_POST['DateDebut'],'date_fin' => $_POST['DateFin'],'description'=>$_POST['projectDescriptionField'],'logique_utilise'=>$_POST['projectLogic'],'competences_acquises'=>$_POST['projectSkills']));
        $req->closeCursor();
        header("Location: index.php" );
      }
    echo "</fieldset></form>";
    ?>

  </body>
</html>
