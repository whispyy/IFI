# 1 - Rappel

## Bonnes pratiques

Dans un fichier php il est conseillé de ne pas mettre la balise fermante de PHP car cela peut causer des problèmes avec certains éditeurs de texte qui rajoutent une ligne.

Exemple :

```PHP
<?php
  echo 'Hello World';
```
> Bonne Pratique :
>
> Ne pas mélanger HTML et PHP. Ne pas mettre le tag fermant.


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
