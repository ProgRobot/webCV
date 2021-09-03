<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webCV</title>
    <link rel="stylesheet" href="styleCV.css" />
  </head>
  <body>
    <header>
      <img
        id="profilPicture"
        src="./img/imgcv.jpg"
        alt="PhotoProfil"
        style="float: left; height: 170px; width: 10em"
      />

      <h1
        id="owner-name"
        style="
          text-align: center;
          margin-left: 11em;
          margin-right: 6em;
          margin-bottom: 0px;
        "
      >
        Youcef KEFIF
      </h1>
      <h3
        id="whyCV-expression"
        style="text-align: center; margin-top: 0em; font-style: italic"
      >
        Recherche un stage
      </h3>
      <h4
        id="post-to-search"
        style="text-align: center; color: rgb(255, 255, 255)"
      >
        Developpeur web/Testeur logiciel
      </h4>

      <div id="personal-infos">

        <!--TODO ajouter les icons-->
        <p style="display: inline; margin: 0em 2em; font-weight: bold">
          Adresse:&nbsp;37200&nbsp;Tours
        </p>
        <p style="display: inline; margin: 0em 2em; font-weight: bold">
          Tel: +33&nbsp;(0)&nbsp;6&nbsp;44&nbsp;83&nbsp;69&nbsp;99
        </p>
        <p style="display: inline; margin: 0em 2em; font-weight: bold">
          E-mail: kfyoucef&#64;gmail.com
        </p>
        <p style="display: inline; margin: 0em 2em; font-weight: bold">
          Permis de conduire: type B
        </p>
      </div>
    </header>

    <!--TODO Objectif Création d'un CV à partir des données rempli dans un formulaire-->

    <section id="formations-section">
      <h2 class="section-title">FORMATIONS</h2>

      <table id="trainings-table">
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">En cours</span></td>
          <td class="formation-actuelle">
            Master Compétence Complémentaire en Informatique
          </td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">2020</span></td>
          <td>Diplome Master Automatique et Informatique Industrielle</td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">2019</span></td>
          <td>Master Mobilité d'échange international ERASMUS+</td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">2017</span></td>
          <td>
            Diplome Licence Génie Electrique et Electronique, option:
            Automatique
          </td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">2014</span></td>
          <td>Diplome Baccalauréat Mathématiques</td>
        </tr>
      </table>

      <!--
      <ul>
        <li class="formation-actuelle">
          <span class="study-year">En cours</span> Master Compétence
          Complémentaire en Informatique
        </li>
        <li>
          <span class="study-year">2020</span> Diplome Master Automatique et
          Informatique Industrielle
        </li>
        <li>
          <span class="study-year">2019</span> Master Mobilité d'échange
          international ERASMUS+
        </li>
        <li>
          <span class="study-year">2017</span> Diplome Licence Génie Electrique
          et Electronique, option: Automatique
        </li>
        <li>
          <span class="study-year">2014</span> Diplome Baccalauréat
          Mathématiques
        </li>
      </ul>
      -->
    </section>

    <section id="academic-projects-section">
     
    <h2 class="section-title">PROJETS ACADEMIQUES</h2>
    
    <!--//TODO l'affichage à partir d'une base de donnée-->

    <ul id="projects-list">
    <?php

        try 
        {
        //Connection to the database
        $bdd = new PDO('mysql:host=localhost;dbname=cvwebdb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
        // In the event of an error, a message is displayed and everything is stopped
        die('Erreur' . $e->getMessage());
        }

        //Data extraction
        $req = $bdd->prepare('SELECT intitule, date_debut, date_fin,description,logique_utilise,competences_acquises FROM cvwebdb.projet');
        $req->execute();

        while ($donnees = $req->fetch()) {


    ?>

      <li><h3 class="project-name"><?php echo $donnees['intitule'];?></h3> 
        <ul>
          <li class="project-info"><h4>Description du projet</h4></li>
          <p><?php echo $donnees['description'];?></p> 
           <li class="project-info"><h4>Logique utilisé</h4></li>
           <p><?php echo $donnees['logique_utilise'];?></p> 

           <!--
           <li class="project-info" ><h4>Taches effectuées</h4></li>
          <p>L'augmentation du nombre de machines dans un parc machine a complexifié sa gestion et la detection des anomalie de fonctionnement</p> -->
            <li class="project-info" ><h4>Compétences acquises</h4></li>
          <p><?php echo $donnees['competences_acquises'];?></p>
        </ul>
      </li>
    <?php 

      }
    
    $req->closeCursor();
    
    ?>


    <a href="cvForm.php"><b>Ajouter un projet +</b></a>

    </section>

    <section id="professional-experiences-section">
      <h2 class="section-title">EXPERIENCE PROFESSIONELLE</h2>
      <table id="trainings-table">
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">02/2020 à 10/2020</span></td>
          <td>
            SCOMA, La Loupe, Chartres, France
          </td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">05/2019 à 06/2019</span></td>
          <td>SONATRACH/DP Hassi R’Mel-Station du gaz-Unité Boosting, Algérie.</td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">03/2017 à 04/2017</span></td>
          <td>Société Nouvelle de Carreaux Céramique de Remchi,CERAMIR, Spa, Algérie.</td>
        </tr>
      </table>
    </section>

    <section id="competences-techniques-section">
      <h2 class="section-title">COMPETENCES TECHNIQUES</h2>
      <table id="trainings-table">
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">Automatique</span></td>
          <td>
            Automatisme et régulation industrielle, sureté de fonctionnement, étude de faisabilité, gestion de projets, coneption de cellules robotisées, modélisation et conception des commandes.
          </td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">Développement web</span></td>
          <td>HTML, CSS, JS, React, Vue.JS, Angular, JAVA EE, SQL, PHP</td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">Développement logiciel</span></td>
          <td>JAVA,SQL</td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">Logiciels</span></td>
          <td>TIA Portal, Unity Pro, Roboguide, SRS Staubli, MS office, Latex, SolidWorks</td>
        </tr>
        <tr>
          <td>&bull;&nbsp;&nbsp;<span class="study-year">OS</span></td>
          <td>Windows, Linux</td>
        </tr>
      </table>
    </section>

    <section id="loisirs-section">
      <h2 class="section-title">LOISIRS</h2>
      <ul>
        <li>Sport</li>
        <li>Voyage</li>
        <li>Tutorials</li>
      </ul>
    </section>

    <footer>
      <p>Copyright© 2021. Tous droits réservés.</p>
      <!--TODO Lien youtube facebook Twitter Github  -->
    </footer>
  </body>
</html>
