# deezer-sf

* Le langage de développement utilisé : PHP7.2

* Framework : Symfony 4 :
      * Création d'un projet avec une structure bien comprensible et bien detreminée. 
      * Utilisation composant necessaire pour le developpement des points d'entrés :  Composant de serialization/deserialization des objets, les composant Httpfoundation/Request & Httpfoundation/Request pour faire l'abstraction des requetes et reponses sous forme des classes qui leur correspondent, Doctrine : ORM pour le mapping objet relationnel.
      * Utilsation des DTO au cours de la récuperation des notifications ( Obejts qui assurent le transfere des données).
      * Design Pattern AbstractFactroy : Usine pour la creation des objets DTO nécessaires a la génération de la reponse.
      * Ajout du bundle FosRestBundle : pour le developpement d'une API qui resepcte les contraintes necessaire development d'une API:               
            * Architecture client : separation des responsabiliés  entre le client et le serveur.
            * Mise en cache : optimisation de temps de génération d'une reponse.
            * API Stateless : une requete ne depends de la requete précédente ( pas de session).
            * Layered system : le client ne connaît pas ce que se deroule dans l'API.
            * Identifant unique : Chaque resource a une representation et un identfiant unique.
            * Uilisation de bonnes méthodes http et gestion de negociation de la contenu.

==============================================================

* La mise en place du projet :
    1. Lancer la commande 'composer install' afin de telecharger toute les dependances.
    2. import de la base de donnees.
    3. Lancer la commande './bin/console server:run' => lancer le server web local.
    
    
   ==============================================================
   
* Les ENDPOINTS : 
      * Pour la lecture d'une notification:    [PUT]    http://localhost:8000/api/notification/{id}/read
      * Pour la recuperation des notification: [GET]    http://localhost:8000/api/notifications
