# test_didacto
Test technique pour Didacto - Création de fiches produits
<br>
<br>

* Lancement du projet (Linux / Mac) :
  - `cd creation_fiche`
  - `php artisan serve`
  - suivre le lien donné dans le terminal (par défaut : http://127.0.0.1:8000/)

* Gestion des données des produits :
  - SGBD utilisé pour ce test : mySQL
  - via mySQL, créer une base de données "creation_fiche" :
  `CREATE DATABASE creation_fiche`
  - effectuer la migration de la table product : `php artisan migrate`
  - générer des produits de test grâce aux seeder : `php artisan db:seed`<br>
    (--> noms et descriptions complètement aléatoires, image par défaut rouge,
    états visible/soldé aléatoire)
  - supprimer des produits : uniquement faisable en supprimant directement
  des produits via mySQL (`DELETE FROM products;` ...)

* Informations suppplémentaires :
  - Une fois le projet lancé, pour arriverez sur le catalogue répertoriant les
  produits visibles.
  - Vous pouvez ensuite accéder à la fiche produit d'un article en cliquant sur le
  lien "Voir la fiche produit".
  - Enfin, les produits non visible n'apparaissent pas sur le catalogue, et
  leur fiche produit toujours accessible (produit/[id d'un article non
  visible]) affiche alors un message spécifique.

