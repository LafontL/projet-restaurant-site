Check list du projet :

● une page d’accueil fonctionnelle avec un menu de navigation adaptée : En cours

* Finir de mettre en place les ancrages et les liens vers les pages annexes. Ainsi que de mettre une navbar sur ces dernières.

● une page de listing de plat : A faire

* Besoin de résoudre un problème lors du SetCategorie_ID dans le controller.

● les pages de détails affichant la totalité des informations associées à un plat : A faire

● un espace à accès restreint (back office) permettant d’administrer le site : A faire
	- Gestion des plats (ajouter un plat, supprimer un plat, éditer un plat)
	- Gestion des utilisateurs pouvant accéder au back office (ajouter un utilisateur, supprimer un utilisateur, éditer un utilisateur)
  
  * Problème clé étrangère, refaire la gestion des rôles à la fin du projet.
  
● un ensemble de pages statiques (pas d’administration back office) : Fini

	- Mentions légales
	- Page de contact
	- Page de présentation du restaurant
  
  Bonus : faire en sorte d'être redirigé vers la page de connexion après une inscription, au lieu de revenir sur la page d'inscription.
  
  Changelog :

- Mise à jour du template et des src, ajout dans la base de donnée d'une Table "Plat" et Catégorie.
- Mise en page de l'index, création des pages statiques, amélioration des pages de connexion/inscription créer par Symfony.
