# Interface de création de joueur en PHP

Il s'agit d'une application développée dans le cadre de mon activité de formateur en développement web. L'objectif avec ce projet est que les étudiants découvrent les utilisations classiques de PHP sur un site web simple, ici une interface qui permet via un formulaire de créer un profil pour un jeu de type RPG. En plus des usages classiques, ils pratiquent également la programmation orientée objet abordée précédemment et s'initient à l'organisation MVC.

Au travers de cet exercice, ils apprennent à :
- Organiser leur fichiers selon la logique de l'application
- Travailler avec une entité objet
- Instancier un objet avec les données d'un formulaire
- Créer un template
- Lever des exceptions
- Gérer la visibilité des attributs et des méthodes
- Transmettre des données par formulaire
- Transmettre des données par url
- Utiliser une session
- Afficher des données stockées
- Réaliser une structure HTML simple pour une page web

## Consignes

Vous venez d'obtenir votre diplôme de développeur et vous avez décidé de vous lancer dans la vie active. Votre profil a retenu l'attention d'une jeune start-up du secteur de l'industrie vidéoludique et celle-ci vous a recruté pour l'aider dans son projet : créer un mmorpg jouable via un navigateur web. L'entreprise vient juste de naître, vous faîtes partie des premières personnes recrutées et tout reste à faire. Pour l'instant les équipes sont en phase de recherche ou de développement de POC.

On vous a demandé de produire une version fonctionnelle de ce que pourrait être l'interface de création des personnages. Pour l'instant pas de design ou de mise en forme, juste du PHP et du HTML mais l'interface doit être utilisable par le joueur. Votre patron décidera ensuite si cette version de l'interface mérite d'être poursuivie.

Cette interface doit permettre de :
- Rentrer les données du personnage via un formulaire
- Créer autant de personnages que le joueur le souhaite
- Voir les personnages créés les uns à côté des autres sur la même page
- Effacer si on le souhaite tous les personnages créés en cliquant sur un lien

Quelques spécifications techniques :
- Vous n'avez pas de base de données, les personnages créés sont donc stockés dans la session du joueur
- Les personnages sont des objets PHP
- Vous utilisez le typage pour les attributs et les méthodes
- Le formulaire contient une validation des données côté HTML

Quelques informations sur les personnages :
- Ils sont composés d'un nom, d'un âge, d'un rôle, d'une description et d'un niveau de vie
- Le nom ne fait pas plus de 50 caractères et ne contient que des lettres
- L'âge est compris entre 15 et 1000
- Les rôles autorisés sont magicien, guerrier et archer
- La description ne fait pas plus de 150 caractères et ne contient que des lettres ou des chiffres
- La vie est par défaut de 100, le joueur ne la choisit pas

## Pour aller plus loin

Pour l'instant la validation des données est réalisée côté front, dans le formulaire HTML. Cependant cela n'a aucune valeur en termes de sécurité puisque l'utilisateur pourrait, s'il le souhaitait, modifier ces règles dans la page du navigateur.

Vous effectuerez donc une validation des données au sein de l'objet personnage, dans les setters, et déclencherez des messages d'erreur ou des exceptions que vous afficherez à l'utilisateur sur la page si ses données ne respectent pas les règles.
