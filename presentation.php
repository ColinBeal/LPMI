<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
  <?php
    include 'head.php';
  ?>
  <body>
      <?php
        include "entete_page.php";
      ?>


    <button class="collapsible">Description</button>
    <div class="content_coll">
      <br/>
      <p>
        <strong>Soyez acteur de la transformation numérique de notre société</strong>
        <br/><br/>
        La Licence Professionnelle Applications Web forme depuis 2001 des assistants ingénieurs et des cadres spécialisés dans le domaine de l’Internet. Il s’agit majoritairement de développeurs spécialistes des technologies logicielles pour la construction d'applications Web et Web mobile (applications réparties avec une forte interaction utilisateur).
        <br/><br/>
        Orientée « métier », notre licence professionnelle met l’accent sur de solides acquis techniques mais également sur des savoirs dans les domaines économiques, sociaux et relationnels.
        <br/><br/>
        La formation de 450 heures développe une solide expérience de l’entreprise à travers les projets et le stage en entreprise d’une durée minimum de 14 semaines (en général 5 mois).
        <br/><br/>
        <strong>Alternance, se former autrement</strong>
        <br/><br/>
        Formation qui conjugue insertion professionnelle via les Contrats de Professionnalisation et acquisition d’une licence en systèmes Intra/Internet pour l’entreprise.
      </p>
      <br/>
    </div>



    <button class="collapsible">Programme</button>
    <div class="content_coll">
      <br/>
      <p>
        Le programme comprend 9 unités d’enseignement  de 50 heures regroupées en trois catégories de compétences :
        <ul>
          <li>Un « noyau dur » de compétences : programmation objet, système, réseau, base de données</li><br/>
          <li>Des compétences spécifiques pour les développements d’applications Internet/Intranet</li><br/>
          <li>Des cours sur les enjeux de l’entreprise : métier, droit de l’informatique, rédaction d’un cahier des charges, gestion de projet</li>
        </ul>
      </p>
      <br/>
    </div>



    <button class="collapsible">Parcours de professionnalisation</button>
    <div class="content_coll">
      <br/>
      <p>
        Un projet tuteuré d’une durée de 120 heures, mettant en œuvre plusieurs compétences, permet de répondre à une problématique en proposant une solution concrète comme un prototype.
        <br/><br/>
        Un stage d’une durée minimum de 14 semaines : à l’issue des cours, vous aurez les compétences pour chercher votre stage.
        <br/><br/>
        À l’issue de la formation, les étudiants auront acquis les savoir-faire suivants :

        <ul>
          <li>Analyser un problème et définir ses objectifs</li><br/>
          <li>Mettre en œuvre des technologies, des outils et des méthodes</li><br/>
          <li>S’intégrer dans une gestion de projets ou gérer des petits projets</li><br/>
          <li>Rédiger des spécifications, des dossiers techniques, des comptes-rendus de réunions, etc.</li><br/>
        </ul>
        <br/>
        Durant les enseignements théoriques, les étudiants auront acquis la culture informatique nécessaire à leur insertion professionnelle.
      </p>
      <br/>
    </div>



    <button class="collapsible">Modalités d’accès et calendrier</button>
    <div class="content_coll">
      <br/>
      <p>
        La Licence Professionnelle Métiers de l’Informatique : Applications Web s’adresse  à des étudiants titulaires d’un diplôme de premier cycle :

        <ol>
          <li>de plein droit avec une Licence 2 validée en Licence de Sciences et Technologie dans un parcours Informatique/Électronique ou Mathématiques/Informatique</li><br/>
          <li>sur sélection :
            <ul>
              <li>DUT Informatique (IQ), DUT Informatique Année spéciale</li><br/>
              <li>BTS services informatiques aux organisations</li><br/>
              <li>BTS systèmes numériques, option informatique et réseaux</li><br/>
              <li>Autres diplômes de niveau Bac +2 et CPGE avec validation d’accès</li><br/>
              <li>L3 informatique en réorientation</li><br/>
              <li>DUT Métiers du Multimédia et de l’Internet (MMI)</li><br/>
              <li>DUT Réseaux et Télécommunication (RT)</li><br/>
            </ul>
          </li>
        </ol>

        <br/>
        La Licence Professionnelle s'adresse également à des étudiants titulaires d'un diplôme de premier cycle  souhaitant poursuivre leurs études en alternance (via un contrat de professionnalisation) et à un public de formation continue. Dans ces deux cas il s’agit d’une sélection sur dossier avec audition éventuelle.
        <br/><br/>
        Formation en alternance :
        <br/>
        la formation est ouverte au Contrat de Professionnalisation, les candidats sont accompagnés dans la constitution de leur dossier par un ingénieur de formation du Service Commun des Formations Continue et par Alternance (SEFCA http://sefca.u-bourgogne.fr/) et par le responsable de la Licence Professionnelle.
        <br/><br/>
        Formation continue :
        <br/>
        la formation s’adresse aux salariés proposés par les entreprises, aux salariés en congé individuel de formation, aux demandeurs d’emploi.
        <br/><br/>

        Calendrier :
        <br/>
        Réception des dossiers papier jusqu’au 17 juin 2018
        <br/>
        Jury de sélection fin juin - Auditions éventuelles la semaine suivante
        <br/>
        Réponse mi juillet
      </p>
      <br/>
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script_perso.js"></script>
    <script src="ckeditor/ckeditor.js"></script>

  </body>
</html>
