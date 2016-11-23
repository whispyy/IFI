# symfony

## Initialisation du projet
A la racine du projet créer un fichier `composer.json` et y insérer les dépendances.

```json
{
    "require": {
        "symfony/yaml": "^3.1"
    }
}
```

> Le '^' pour le numéro de version signifie qu'il fera uniquement les mises a jours mineures.
>
> Ex : '^3.1' il installera les mises a jour 3.2.. etc sans jamais passer a 4.

Une fois crée, soit composer est installé et dans ce cas il suffit de taper la commande `composer install` ou insérer à la racine du projet le `composer.phar` et `php composer.phar install`

En production on tape `php composer.phar install --no-dev`

Pour update les dépendances `php composer.phar update`. Pour update un paquet en particulier `php composer.phar update <nom du paquet>`

## Appel à Symfony

On appelle toujours l'autoload, les dépendances seront chargés automatiquement.
Ensuite on peut appeller use pour utiliser un composant en particulier.

```php
<?php
require __DIR__.'/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
```

> Voir test.php & test.yml

## Symfony Requète

* Requète get

```php
$request->query->get('nom');
$request->query->get('nom','valeurParDefaut');
```

* Requète post

```php
$request->request->get('bar');
```

* Requète en-tête & variable d'envrionnement

```php
$request->server->get('HTTP_POST');
//ou juste les headers avec
$request->headers->get('host');
```

> Voir request.php

## Symfony Requète-Réponse

> voir request2.php

## Symfony Rootage

> voir routage.php
>
> Par convention il est préférable de le nommer index.php

Nous pouvons également router avec un switch pour une meilleure lisibilité.
