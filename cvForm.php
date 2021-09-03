<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add project</title>
  </head>
  <body>
    <!-- //TODO Création du formulaire et de la base de donnée -->

    
    <form action="cvForm.php" method="post">
      <fieldset>
      <legend><b>INFORMATIONS A PROPOS DU PROJET</b></legend>
      <label for="projectTitleField"><b>Titre du projet:</b></label>
      <input id="projectTitleField" name="projectTitle" type="text" size="128" placeholder="Exemple: Réalisation d'un drone quadrirotor"><br><br>
      <label for="dateDebutField"><b>Commencé le:</b></label>
      <input type="date" name="DateDebut" id="dateDebutField">
      <label for="dateDebutField"><b>Fini le:</b></label>
      <input type="date" name="DateFin" id="dateFinField"><br><br>
      <label for="projectDescription"><b>Description:</b></label><br>
      <textarea name="projectDescriptionField" id="projectDescription" placeholder="Exemple: Ce projet consiste à la réalisation d'un drone quadrirotor, le but est de réussir à stabiliser le drone dans une altitude dans des conditions climatiques normal..." cols="130" rows="10"></textarea><br><br>
       <label for="usedLogicField"><b>Logique utilisée:</b></label><br>
       <textarea name="projectLogic" id="usedLogicField" placeholder="Exemple: J'ai commencé à réaliser le modele mathématique du drone sous Matlab Simulink, j'ai simulé en ajustant les paramètres du système et de la commande pour garantir les spécifications du cahier des charges...etc " cols="130" rows="10"></textarea><br><br>
      <label for="projectSkillsField"><b>Compétences acquises:</b></label><br>
      <input id="projectSkillsField" name="projectSkills" type="text" size="144" placeholder="Exemple: Solidworks, Matlab/Simulink, Modelisation ... etc "><br><br>
    </fieldset>
    </form>

  </body>
</html>
