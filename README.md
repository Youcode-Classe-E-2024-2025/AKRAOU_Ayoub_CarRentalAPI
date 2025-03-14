# Documentation README

## Contexte du Projet

Dans l’industrie de la mobilité, les services de location de véhicules sont en forte croissance. De nombreuses entreprises cherchent à automatiser et simplifier leur gestion grâce à des solutions numériques. Ce projet propose de concevoir une API REST robuste et sécurisée qui pourra être intégrée à une application mobile ou web pour faciliter la gestion des locations.

## Objectif du Projet

L’objectif de ce projet est d’apprendre à créer une API en Laravel, en respectant les principes REST et en intégrant les bonnes pratiques de développement. Les apprenants devront :

- Mettre en place une architecture Laravel adaptée aux API.
- Gérer l’authentification et l’autorisation avec Laravel Sanctum.
- Manipuler les requêtes CRUD avec Eloquent ORM.
- Assurer la validation des données et la gestion des erreurs.
- Implémenter la pagination et la gestion des filtres.
- Rédiger une documentation API avec Swagger (Laravel OpenAPI).
- Tester les endpoints avec Postman.

## Installation

1. **Clonez le dépôt :**
   ```bash
   git clone https://github.com/Youcode-Classe-E-2024-2025/AKRAOU_Ayoub_CarRentalAPI.git
   ```

2. **Installez les dépendances :**
   ```bash
   cd CarRentalAPI
   composer install
   ```

3. **Configurez votre environnement :**
   ajustez les paramètres dans `.env` selon votre configuration.

4. **Migrations de la base de données :**
   ```bash
   php artisan migrate
   ```

## Utilisation

- **Démarrer le serveur :**
  ```bash
  php artisan serve
  ```

- **Accéder à l'API :**
  L'API sera accessible à l'adresse `http://localhost:8000/api`.

## Tests

Utilisez Postman pour tester les endpoints de l'API. Importez le fichier de collection Postman fourni dans le projet.

## Conclusion

Ce projet est une excellente opportunité d'apprendre à créer une API RESTful avec Laravel tout en respectant les meilleures pratiques de développement. N'hésitez pas à explorer et à étendre les fonctionnalités selon vos besoins.