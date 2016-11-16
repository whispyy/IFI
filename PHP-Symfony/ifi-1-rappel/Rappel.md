# 1 - Rappel

## Bonnes pratiques & Rappels généraux

Dans un fichier php il est conseillé de ne pas mettre la balise fermante de PHP car cela peut causer des problèmes avec certains éditeurs de texte qui rajoutent une ligne.

Exemple :

```PHP
<?php
  echo 'Hello World';
```

> Bonne Pratique :
>
> Ne pas mélanger HTML et PHP. Ne pas mettre le tag fermant.

La concaténation se fait avec un '.', on peut également imputer un paramètre avec une valeur par défaut.

Exemple :

```PHP
<?php

function getWelcomeMessage($name = 'Kévin')
{
    return 'Hello'.$name."\n";
}

echo getWelcomeMessage('Lille 1');
```

> Bonne Pratique :
>
> Utiliser les simple quotes pour tout ce qui est concaténation.
> Les doubles quotes n'échappent pas les caractères spéciaux et les interpretent.

Deux façons de faire un tableau :

```PHP
$arr = array('a', 22, false);
$b = [1, null, array('a'),]; // préféré
```

On peut faire du casting comme en java :

```PHP
<?php

$a = (string) 10;
```

## Interpreteur & Lite-Server

Lancer l'Interpreteur interactif via :

```
php -a
```

Lancer un serveur lite :

```
php -S localhost:8000
```

Lancer un navigateur http://localhost:8000/MonFichier

## Namespace & Autoloader

Pour que les classes soient importées automatiquement via l'autoloader : il faut les nommer de façon identique au noms des dossiers. Elle s'appelle la convention PSR-0 qui a été surchargée par la convention PSR-4.
Avec PSR-4 il est possible de mettre uniquement le dernier niveau du dossier et d'ajouter un préfixe correspondant à la base du chemin d'accès dans le fichier de configuration du module composer.

> Bonne Pratique :
>
> Une classe par fichier.
