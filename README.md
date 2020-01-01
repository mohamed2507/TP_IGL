##### Manuel d'instalation


#### Frontend

- installer les packages npm : npm install

#### Les services

- installer les packages npm : npm install
- installer composer : composer install
- copier le fichier .env.exemple dans un fichier .env
- lancer la commande php artisan key:generate

##### Manuel d'utilisation

- lancer la commande cd pour aller au repertoire du Frontend
- lancer le serveur de npm q travers la commande : npm run serve
- lancer la commande cd pour aller au repertoire du service admin
- lancer le serveur du laravel a travers la commande : php artisan serve --port=8001
- lancer la commande cd pour aller au repertoire du service etudiant
- lancer le serveur du laravel a travers la commande : php artisan serve
- configurer la base de donné pour chaque service
- lancez la commande : php artisan migrate pour la migration des tables 
- ** URL : localhost:8080/form-etudiant ** pour acceder au formulaire d'etudiant
- ** URL : localhost:8080/form-admin ** pour acceder au formulaire d'admin
