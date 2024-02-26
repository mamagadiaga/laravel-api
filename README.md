# Découvrez Laravel

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">

Laravel représente bien plus qu'un simple framework pour le développement web. Il incarne une approche où la créativité rencontre l'efficacité, offrant une expérience de développement fluide et enrichissante. Laravel simplifie les tâches récurrentes dans la création d'applications web, offrant des fonctionnalités telles que :

- [Un système de routage simple et performant](https://laravel.com/docs/routing).
- [Un conteneur d'injection de dépendances puissant](https://laravel.com/docs/container).
- Prise en charge de plusieurs back-ends pour le [stockage de session](https://laravel.com/docs/session) et le [cache](https://laravel.com/docs/cache).
- ORM de base de données expressif et intuitif, connu sous le nom d'[Eloquent](https://laravel.com/docs/eloquent).
- [Migrations de schéma](https://laravel.com/docs/migrations) indépendantes de la base de données.
- Gestion robuste des [tâches en arrière-plan](https://laravel.com/docs/queues).
- Diffusion en temps réel des événements avec [Broadcasting](https://laravel.com/docs/broadcasting).

Laravel offre la puissance nécessaire pour les projets les plus ambitieux, tout en restant accessible à tous les niveaux d'expérience.

## Apprendre et Maîtriser

La documentation de Laravel est l'une des plus complètes et des plus détaillées, accompagnée d'une vaste bibliothèque de tutoriels vidéo. Cela rend l'apprentissage et la maîtrise du framework à la portée de tous.

## Contribuer au Projet

Vous êtes encouragés à contribuer au développement continu de Laravel ! Consultez le [guide de contribution](https://laravel.com/docs/contributions) pour savoir comment participer.

## Installation
cloner le depot

git clone https://github.com/mamagadiaga/laravel-api.git

installer Composer

https://getcomposer.org/download/

composer update/install

composer install

Install Nodejs

https://nodejs.org/en/download/

npm install

Run Vite

npm run dev

Go into .env file change Database and Email credentials. Then setup some configuration with your own credentials

Run the migration

php artisan migrate

Or run the migration with seeder if you want seeding the related data

php artisan migrate --seed

Generate a New Application Key

php artisan key:generate

Create a symbolic link

php artisan storage:link

## Licence

Laravel est un framework open-source distribué sous la licence [MIT](https://opensource.org/licenses/MIT).
