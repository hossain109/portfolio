<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta name="description" content=" I am a freelancer based in France and i have been building noteworthy websites for years.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portfolio</title>
	<link rel="icon" sizes="32x32" href="{{url('public/img/sohrab.png')}}" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{url('public/vendors/css/grid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/vendors/css/normalize.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/responsive.css')}}">
</head>
<body>
<!--Start Header section-->
<header id="header">
	<nav>
		<div class="row">
			<span id="openNavId" onclick="openNav()">&#9776;</span>

			<div class="open_nav" id="myNav">
				<div class="nav_title">
					<div class="title_menu">Menu</div>
					<a class="closebtn" onclick="closeNav()" href="javascript:void(0)">&times;</a>
				</div>
				<ul class="main_nav">
					<li><a href="#header">Accueil</a></li>
					<li><a href="#aboutMe">A Propos</a></li>
					<li><a href="#resume">Résumé</a></li>
					<li><a href="#my_services">Services</a></li>
					<li><a href="#skill">Compétence</a></li>
					<li><a href="#my_work">Mes Projets</a></li>
					<li><a href="#contact_me">Contact</a></li>
				</ul>
			</div>

<!--Mobile menu & Overlay section-->
			<div class="mobile-menu">
				<span class="mobile_openNavId" onclick="mobile_openNav();">&#9776;</span>
				<div id="mobile_nav" class="hm_menu">
					<a class="closebtn" onclick="mobile_closeNav();" href="javascript:void(0)">×</a>
					<div class="hm_menu_content">
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#header">Accueil</a>
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#aboutMe">A Propos</a>
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#resume">Résumé</a>
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#my_services">Services</a>
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#skill">Compétence</a>
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#my_work">Mes Projets</a>
						<a class="hm_menu_link" onclick="mobile_closeNav()" href="#contact_me">Contact</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 5rem;">
			<div class="personelle_text_box">
				<a href="https://hossainmohammad.eu/portfolio/"><img src="{{url('public/img/sohrab.png')}}" alt="image-logo" class="logo"></a>
				<h1>HOSSAIN Mohammad</h1>
				<h6 class="poste">Concepteur Dévéloppeur Informatique</h6>
				<div  class="social_icon">
					<ul>					
						<li><a title="Github"  href="https://github.com/hossain109"><i class="fab fa-github"></i></a></li>
						<li><a  title="Linkedin" href="https://www.linkedin.com/in/hossainmohammad109/"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a  title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a title="Facebook"  href="https://www.facebook.com/sohrab.hossain.9/"><i class="fab fa-facebook-f"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
<!--stiky nav menu-->
	<div class="stiky-nav" id="my_stiky">
		<a href="https://hossainmohammad.eu/portfolio/"><img src="{{url('public/img/sohrab.png')}}" alt="image-logo" class="logo"></a>
		<span class="mobile_openNavId" onclick="mobile_openNav();">&#9776;</span>
		<ul class="main_nav">
			<li><a href="#header" class="active">Accueil</a></li>
			<li><a href="#aboutMe">A Propos</a></li>
			<li><a href="#resume">Résumé</a></li>
			<li><a href="#my_services">Services</a></li>
			<li><a href="#skill">Compétence</a></li>
			<li><a href="#my_work">Projets</a></li>
			<li><a href="#contact_me">Contact</a></li>
		</ul>
	</div>
</header>
<!--End Header section-->
<!--End ABOUT ME section-->
<section class="about_me js--services-section" id="aboutMe">
	<img src="{{url('public/img/personelle.jpg')}}" alt="image_personnelle" class="image_perso">
	<div class="row about_wrap">
		<h2>A Propos de Moi</h2>
		<p class="description">
            Passionné de développement depuis 3ans à Paris j'ai été développeur front-end puis back-end sur différents frameworks et projets variés, je suis a la recherche opportunités professionnel ! Je maitrise sur les language et framework PHP,UML,JMerise, Laravel,GIT, Javascript, React, Jquery etc.
		</p>
		<p class="description">
			Titulaire d'un double titre concepteur développeur d'application (équivalent Bac+3) à Paris,, je suis HOSSAIN Mohammad, prêt a relever de nouveaux défis et à contribuer à des projets innovants.
		</p>
		<p class="description">
			Mon objectif ? Trouver une opportunité dans le dev au plus vite ! Actuellement à la recherche d'un CDI,CDD ou d'une alternance en tant que développeur fullstack Laravel/PHP/React JS , je suis convaincu que expertise technique, associée a ma motivation sans faille, fait de moi un candidat idéal pour votre équipe.
		</p>
		<p class="description">
			Consulter mon cv pour découvrir mes compétences approfondies et mes projets sur Git Hub et mon portfolio passionnants. Pret a embarquer dans une aventure professionnelle captivante ! N'hésitez pas à me contacter pour discuter de la manière dont je peux contribuer à votre équipe. CV disponible ci-joint.
		</p>
		<p class="description">Repository github: <a href="https://github.com/hossain109" target="_blank" style="color:crimson;">GitHub</a></p>
	</div>
	<div class="row about_wrap">
		<div class="col span_1_of_3 small_device_biodata">
			<ul class="biodata">
				<li><strong class="col span_1_of_3 biodata_item">Date de naissance</strong><div class="col span_2_of_3 xs_device_data">:&nbsp;01/01/1986</div></li>
				<li><strong class="col span_1_of_3 biodata_item">Téléphone portable</strong><div class="col span_2_of_3 xs_device_data">:&nbsp;0751292264</div></li>
				<li><strong class="col span_1_of_3 biodata_item">Email</strong><div class="col span_2_of_3 xs_device_data">:&nbsp;mohammadhossain109@gmail.com</div></li>
				<li><strong class="col span_1_of_3 biodata_item">Siteweb</strong><div class="col span_2_of_3 xs_device_data">:&nbsp;https://hossainmohammad.eu/</div></li>
				<li><strong class="col span_1_of_3 biodata_item">Adresse</strong><div class="col span_2_of_3 xs_device_data">:&nbsp;19 rue pinel, 93200 Saint Denis, France</div></li>
			</ul>
			<h4 class="signature">HOSSAIN Mohammad</h4>
			<div class="download_cv">
				<a class="" href="{{url('/download/file/cv_HOSSAIN_Mohammad.pdf')}}" target="_blank"><i class="fas fa-download"></i>Télécharger CV</a>
			</div>
		</div>
		<div class="col span_2_of_3 hobbies_interests small_device_hobbies">
			<h6 class="title_hobbies">Loisirs & Lntérêts</h6>
			<div class="row"> 
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fas fa-gamepad hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">jeux</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fas fa-headphones hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Musique</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fas fa-plane hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Avion</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fab fa-apple hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Apple</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fas fa-video hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Cinéma</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fas fa-coffee hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Café</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="fas fa-car hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Voiture</div>
					</div>
				</div>
				<div class="col span_1_of_4 circle"  style="margin: 5px 0 0 0;">
					<div class="hobbies_item"><i class="far fa-money-bill-alt hobbies"></i>
						<div class="hobbies" style="margin-top: 2rem;font-size: 1.3rem;">Argent</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End ABOUT ME section-->
<!--Start Resume section-->
<section class="resume" id="resume">
	<div class="row">
		<h2>Résumé</h2>
	</div>
	<div class="row title">
		<h3 class="experience">Expériences professionnelle</h3>
	</div>
	<div class="row">
        <div class="col span_2_of_2 experience_box">
			<h6>Développeur d'application (11/2023 à continue)</h6>
			<p><strong>Projet Réalisé avec laravel et react JS</strong></p>
			<ul style="margin-top:1.6rem;">
				<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Réalisation projet e-commerce</li>
				<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Réalisation projet système de gestion école management</li>
				<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Créer un site de vente tuto en ligne en utilisation React/Laravel</li>
				<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Maquetter des applications</li>
				<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer des composants d'accès aux données</li>
				<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Préparer et exécuter le déploiement d'une application</li>
				<li style="list-style-type: none;text-align: left;margin-top: 0.6rem;"></li>
			</ul>
            <p style="line-height: normal;padding-bottom:15px;">Compétences : Axios · Laravel · React Js · PHP · JavaScript · MySQL · Jquery · Bootstrap · UML</p>
		</div>
        <div class="col span_2_of_2 experience_box">
                <h6>Développeur web CDD(05/2023 -10/2023)</h6>
                <p><strong>Société: Marketing Studio,Paris</strong></p>
            <ul style="margin-top:1.6rem;">
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Rédaction de scripts et de processus pour integration de données et correctif</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Optimisation des performances et amélioration de la sécurité des données</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Doneés affiché different types de graphes(bar chart, line chart, pie, table chart en utilisan chart js)</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Integration PUG,Bootstrap, Jquery(AJAX)</li> 
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Modélisation et conception base donées</li>
            </ul>
            <p style="line-height: normal;">Compétences : AJAX · Laravel · Chart Js · PUG · Développement web · PHP · JavaScript · MySQL · Git · UML</p>
        </div>
	</div>
		<div class="row">
			<div class="col span_2_of_2 experience_box">
				<h6>Dévéloppeur Web(2021-2022)</h6>
				<p style="padding-bottom: 20px;"><strong>Travail Independant/Distance </strong></p>
				<ul style="margin-top:1.6rem; ">
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Création de application web en utilisant laravel,blade,bootstrap,Axios</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Migration des sites sur hébergements</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Sécurisation des données (client / serveur)</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Conversion PSD à HTML</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Conversion Responsive PSD à HTML</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;"> Conversion siteweb HTML à Wordpress</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Intégration HTML/CSS JavaScript</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Modélisation et conception d'une base de donée</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Maintenance des applications existantes</li>
				</ul>
				<p style="line-height: normal;padding-bottom:25px;">Compétences : Intégration HTML· CSS · JavaScript · jquery · laravel · WordPress · Divi Elementor etc.</p>
			</div>

			<div class="col span_2_of_2 experience_box">
				<h6>Dévéloppeur symfony-2/3 (3 mois-2017)</h6>
				<p><strong>Société: IKNSA, Cergy</strong></p>
				<ul style="margin-top:1.6rem;">
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développement d'une solution de facturation en SAAS</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développement sous symfony2/3</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Utilisation de Composer</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Gestion des dépendances front-end avec Bower</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Automatiser les taches récurrentes avec Grunt</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Implémentation SASS/Compass</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Intégration HTML/CSS JavaScript</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Maintenance des applications existantes</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développement en Agile/Scrum</li>
					<li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Versionning avec Git/Github (Gitflow)</li>
				</ul>
				<p style="line-height: normal;">Compétences : Intégration HTML· SAAS · GIT · jquery · Symfony · Bower · Grant · Mysql · UML · JMerise etc.</p>
			</div>
		</div>
	</div>
		<div class="row title">
		<h3 class="experience">Formation</h3>
	</div>
	<div class="row">
        <div class="col span_2_of_2 experience_box">
			<h6>Concepteur développeur d'application
			Bac+3</h6>
			<p><strong>G2R Formation: Mai 2023, Paris</strong></p>
            <ul style="margin-top:1.6rem;">
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Maquetter une application en utilisant Figma</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer une interface utilisateur de type desktop en utilisant Figma</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer des composants d'accès aux données </li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer la partie front-end d'une interface utilisateur web</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer la partie back-end d'une interface utilisateur web</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Mettre en place une base de données</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer des composants dans le langage d'une base de données</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Concevoir une application </li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Construire une application organisée en couches</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer une application mobile</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Préparer et exécuter le déploiement d'une application</li>
            </ul>
            <p><strong>Compétences :</strong> React.js · Electron.js · React Native · Laravel · PHP</p>
            <p style="line-height: normal;"><strong>Langages de programmation et interfaces :</strong> PHP, Laravel10, SQL, HTML, CSS, JS, JQuery, PHP, UML,Figma JMerise,Electron JS,React JS, React Native, Electrron JS, Node JS, Composer,Visual Stuio, Sublime text</p>
		</div>
		<div class="col span_2_of_2 experience_box">
			<h6>Concepteur développeur informatique
			Bac+3</h6>
			<p><strong>M2I Formation: 2017, Paris</strong></p>
            <ul style="margin-top:1.6rem;">
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer une application n-tiers</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développer des pages web en lien avec une base de données</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Mettre en place une base de données</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Concevoir une application</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Développement en Agile/Scrum</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Versionning avec Git/Github (Gitflow)</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Construire une application organisée en couches</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Préparer et exécuter le déploiement d'une application</li>
            </ul>
            <p><strong>Compétences : PHP · JavaScript · Java · MySQL · Symfony 3</strong></p>
            <p style="line-height: normal;padding-bottom:35%;"><strong>Langages de programmation et interfaces :</strong> JAVA , j2EE, Symfony, SQL, HTML, CSS, JS, JQuery, PHP, UML,Power AMC, JMerise, Composer,Visual Stuio, Sublime text</p>
		</div>
	</div>
	<div class="row">
		<div class="col span_2_of_2 experience_box">
			<h6>Ingenieur Informatique(Niveau-II)</h6>
			<p><strong>SUST: 2010</strong></p>
			<p>Diplôme intitulé en informatique et de l'ingénierie, comparabilité en France niveau 2(bac+3/4) Shahjalal université des sciences et de la technologie.</p>
            <ul style="margin-top:1.6rem; ">
                <li style="list-style-type: none;text-align: left;margin-top: 0.6rem;"></li>
            </ul>
        </div>
		<div class="col span_2_of_2 experience_box">
			<h6>Professionnel Programmation de SiteWeb</h6>
			<p><strong>CNAM: 2014, Ile-de-France</strong></p>
			<p>Certificat Professionnel Programmation de Site Web, Conservatoire national des arts et métiers (CNAM)</p>
            <ul style="margin-top:1.6rem;">
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Intégrer les éléments devant composer les pages web (menus, pied de page, images, texte) en utilisant le langage HTML et CSS afin de produire des pages web correspondant aux maquettes définies.</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Dynamiser les pages web et les rendre interactives en utilisant le langage JavaScript.</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Personnaliser fonctionnellement un CMS</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Mettre en œuvre la charte graphique définie par les designers</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Tester le bon fonctionnement des pages sous différents environnements</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Création des sites Dynamique</li>
                <li style="list-style-type: circle;text-align: left;margin-top: 0.6rem;">Hébérger le site internet</li>
            </ul>
            <p style="line-height: normal;">Compétences : CSS3 · Java · MySQL · PHP · HTML5 · Hébérgement · GIMP</p>
		</div>
	</div>
</section>
<!--End Resume section-->
<!--Start MY SERVICES section-->
<section class="my_services" id="my_services">
	<div class="row">
		<h2>Mes Services</h2>
	</div>
	<div class="row">
		<div class="col span_1_of_2 box">
			<div class="service_depcription_left">
				<h6>Conception</h6>
				<p>&#128073;Maquetter une application en utilisant Figma</p>
				<p>&#128073;Développer une interface utilisateur de type desktop en utilisant Figma</p>
				<p>&#128073;Concevoir une application</p>
			</div>
			<div class="service_icon_left">
				<i class="fas fa-code"></i>
			</div>
		</div>
		<div class="col span_1_of_2 box">
			<div class="service_icon_right">
				<i class="fas fa-code"></i>
			</div>
			<div class="service_depcription_right">
				<h6>Dévéloppement</h6>
				<p>&#128073;Développer la partie back-end et back-end en utilisant Laravel, React JS, MySQL etc.</p>
				<p>&#128073;Réalise un projet A*Z.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col span_1_of_2 box">
			<div class="service_depcription_left">
				<h6>Cahier des charges</h6>
				<p>&#128073;Analyser un cahier des charges, étudier les besoins, lister les fonctionnalités demandées,rédiger les spécifications détaillées, sélectionner une solution technique adaptée.</p>
			</div>
			<div class="service_icon_left">
				<i class="fas fa-code"></i>
			</div>
		</div>
		<div class="col span_1_of_2 box">
			<div class="service_icon_right">
				<i class="fas fa-code"></i>
			</div>
			<div class="service_depcription_right">
				<h6>Dévéloppement</h6>
				<p>&#128073;Codage personnalisé pour le site Web en PHP, MYSQL HTML, CSS, javascript</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col span_1_of_2 box">
			<div class="service_depcription_left">
				<h6>Migration</h6>
				<p>&#128073;Migrer votre site wordpress vers un nouvel hébergeur.</p>
				<p>&#128073;Préparer et exécuter le déploiement d'une application</p>
			</div>
			<div class="service_icon_left">
				<i class="fas fa-code"></i>
			</div>
		</div>
		<div class="col span_1_of_2 box">
			<div class="service_icon_right">
				<i class="fas fa-code"></i>
			</div>
			<div class="service_depcription_right">
				<h6>Dévéloppement</h6>
				<p>&#128073;Concevoir et développer une conception de site Web wordpress responsive en utlilisant Bootstrap, elementor, thème DIVI.</p>
				<p>&#128073;Maintenance des sites existants</p>
			</div>
		</div>
	</div>
</section>
<!--End MY SERVICES section-->
<!--Start SKILL section-->
<section class="skill" id="skill">
	<div class="row">
		<h2>Compétence</h2>
	</div>
	<div class="row" style="margin: auto">
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="85" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
			</svg>
			<h3>Laravel</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="50" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">50%</text>
			</svg>
			<h3>React JS</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="90" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
			</svg>
			<h3>PHP</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="80" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">80%</text>
			</svg>
			<h3>MySql</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="75" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
			</svg>
			<h3>Javascript</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="90" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%%</text>
			</svg>
			<h3>Bootstrap 4/5</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="85" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
			</svg>
			<h3>Symfony2/3/6</h3>
		</div>
		<div class="col span_1_of_4 box small_device_skill">
			<svg class="radial-progress" data-percentage="88" viewBox="0 0 80 80">
	  			<circle class="incomplete" cx="40" cy="40" r="35"></circle>
	  			<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
	  			<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">88%</text>
			</svg>
			<h3>Wordpress</h3>
		</div>
	</div>
</section>
<!--End SKILL section-->
<!--Start MY WORK section-->
<section class="my_work" id="my_work">
	<div class="row">
		<h2>Mes Projets</h2>
	</div>
	<div class="row">
		<div class="data_filter">
			<button type="button" class="btn_mixup" name="btn_mix" data-filter="all">Tous</button>
			<button type="button" class="btn_mixup" name="btn_mix" data-filter=".psd2html">Laravel</button>
			<button type="button" class="btn_mixup" name="btn_mix" data-filter=".psd2html">Symfony</button>
			<button type="button" class="btn_mixup" name="btn_mix" data-filter=".responsive">HTML/CSS</button>
			<button type="button" class="btn_mixup" name="btn_mix" data-filter=".conversionWP">React JS</button>
			<button type="button" class="btn_mixup" name="btn_mix" data-filter=".projects_wordpress">Wordpress</button>
			<button type="button" class="btn_mixup" name="btn_mix" data-filter=".siteweb_dynamique">Siteweb Dynamique</button>
		</div>
	</div>
	<div class="row container">
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/blogin.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/Blogin/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Blogin</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/coulmnist.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/columnist/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Columnist</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/concomittant.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/concomittant/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Concomittant</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/education.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/education_institue/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Education Institue</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/fedilecious.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/Fadilecious/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Fadilecious</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/freshlook.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/freshlook/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Freshlook</span>
			</div>
			</a>
		</div>		
		<div class="col span_1_of_4 small_device_work box mix psd2html">
			<img class="mix_pic" src="public/img/psdahtml/galleriepic.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/psdAhtml/galleripic/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Galleripic</span>
			</div>
			</a>
		</div>
		<!--fin psd a html-->

		<div class="col span_1_of_4 small_device_work box mix responsive ">
			<img class="mix_pic" src="public/img/psdaresponsive/fashionable.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/responsivepsdAhtml/education_department/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Education Department</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix responsive ">
			<img class="mix_pic" src="public/img/psdaresponsive/education.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/responsivepsdAhtml/fashionable/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Fashionable</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix responsive ">
			<img class="mix_pic" src="public/img/psdaresponsive/business.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/responsivepsdAhtml/open_business/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Open Business</span>
			</div>
			</a>
		</div>
		<!--fin psd a Responsive html-->

		<div class="col span_1_of_4 small_device_work box mix projects_wordpress">
			<img class="mix_pic" src="public/img/projet/pressing.jpg" alt="image">
			<a class="mix_link" href="https://www.hossainmohammad.eu/projet_wordpress/lepressing/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Pressing Philippe Auguste</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix  projects_wordpress ">
			<img class="mix_pic" src="public/img/projet/resto.jpg" alt="image">
			<a class="mix_link" href="https://www.hossainmohammad.eu/projet_wordpress/Rfc_Restauration/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">RFC Restauration</span>
			</div>
			</a>
		</div>
		<!-- fin de projet wordpress-->
		<div class="col span_1_of_4 small_device_work box mix  conversionWP">
			<img class="mix_pic" src="public/img/conversionwp/cudaportfolio.jpg" alt="image">
			<a class="mix_link" href="https://www.hossainmohammad.eu/conversionWP/portfolio/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Portfolio</span>
			</div>
			</a>
		</div>
		<div class="col span_1_of_4 small_device_work box mix  conversionWP">
			<img class="mix_pic" src="public/img/conversionwp/galleriefic.jpg" alt="image">
			<a class="mix_link" href="https://www.hossainmohammad.eu/conversionWP/gallerie/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">Galleriepic</span>
			</div>
			</a>
		</div>
		<!--fin de projet conversionWP-->
		<div class="col span_1_of_4 small_device_work box mix siteweb_dynamique  ">
			<img class="mix_pic" src="public/img/sitecomplet/restaurant.jpg" alt="image">
			<a class="mix_link" href="https://hossainmohammad.eu/siteweb_complet/restov/">
			<div class="overlay">
				<div class="text_icon"><i class="fas fa-plus"></i></div>
				<span class="project_title">RestoV</span>
			</div>
			</a>
		</div>
	</div>
</section>
<!--End My WORK section-->
<!--Start CONTACT ME section-->
<section class="contact_me" id="contact_me">
	<div class="row">
		<h2>Contactez moi</h2>
		<div class="row">
			<div class="col span_1_of_3">
				<div class="address_icon"><i class="fas fa-map-marker-alt"></i></div>
				<div class="address_details">
					<strong>Adresse</strong>
					<P>19 RUE Pinel</P>
					<P>93200 SaintDenis, France</P>
				</div>
			</div>
			<div class="col span_1_of_3">
				<div class="email_icon"><i class="far fa-envelope"></i></div>
				<div class="email_details">
					<strong>Email</strong>
					<P>mohammadhossain109@ gmail.com</p>
					<P>sohrab_sust_cse@ yahoo.com</P>
				</div>
			</div>
			<div class="col span_1_of_3">
				<div class="myphone">
				<div class="phone_icon"><i class="fas fa-phone-alt"></i></div>
				<div class="phone_details">
					<strong>Portable</strong>
					<P>07 51 29 22 64</P>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col span_2_of_2">
			@if (session('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif
		</div>
	</div>
	<div class="row">
		<form action="{{route('contactwithme')}}" method="post" class="contact_form">
			@csrf
			<div class="row">
				<div class="mail_input col span_1_of_2">
					<input type="text" name="name" class="name" placeholder="Votre Nom *" >
					@error('name')<div class="error">{{ $message }}</div>@enderror
				</div>
					
				<div class="mail_input col span_1_of_2">
					<input type="email" name="email" class="email" placeholder="Votre Email *" >
					@error('email')<div class="error">{{ $message }}</div>@enderror
				</div>
				
			</div>
			<div class="row">
			<textarea placeholder="votre Message *" name="message" cols="10" rows="10"></textarea>
			@error('message')<div class="error">{{ $message }}</div>@enderror
			</div>
			
			<div class="row">
				<button type="submit"  class="btn_submit">
					<span class="send_icon"><i class="fas fa-paper-plane"></i></span>ENVOIE MESSAGE
				</button>
			</div>
		</form>
	</div>
</section>

<div class="row" style="max-width: 100%;margin-bottom: 2rem;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d2621.128301873959!2d2.356169815676998!3d48.931998029294796!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.932016499999996!2d2.3584407!4m5!1s0x47e66eb3daec1f49%3A0x3320e4cf826ea11d!2s19%20Rue%20Pinel%2C%2093200%20Saint-Denis!3m2!1d48.932037699999995!2d2.3583727999999997!5e0!3m2!1sfr!2sfr!4v1602747844110!5m2!1sfr!2sfr" style="width: 100%;border: 0" height="450" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="footer">
	<div class="row">
		<div class="designer">
			<p>Website By <strong>Sohrab Hossain</strong></p>
		</div>
		<div  class="social_icon" style="float: right;">
			<ul>					
				<li><a title="Github"  href="https://github.com/hossain109"><i class="fab fa-github"></i></a></li>
				<li><a  title="Linkedin" href="https://www.linkedin.com/in/hossainmohammad109/"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a  title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a title="Facebook"  href="https://www.facebook.com/sohrab.hossain.9/"><i class="fab fa-facebook-f"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<!--End CONTACT ME section-->

<script src="https://kit.fontawesome.com/bd04edcd10.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="{{url('public/vendors/js/html5shiv.min.js')}}"></script>
<script src="{{url('public/vendors/js/selectivizr.js')}}"></script>
<script src="{{url('public/vendors/js/respond.min.js')}}"></script>
<script src="{{url('public/vendors/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('public/vendors/js/mixitup.min.js')}}"></script>
<script src="{{url('public/vendors/js/animated-circle.js')}}"></script>
<script src="{{url('public/js/main.js')}}"></script>
</body>
</html>