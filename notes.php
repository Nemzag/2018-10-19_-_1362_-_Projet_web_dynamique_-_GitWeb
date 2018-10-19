<?php
/**
 * Created by PhpStorm.
 * User: nemzag aka Gazmen Arifi
 * Date: 2018-10-19
 * Time: 09:45
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Git</title>
</head>
<body>
<h2>Installation :</h2>
git install, with executable, download at

desactive windows integraiton

install nano editor pas vim.

   terminal let by default.

extra options : default

Une fois intallé :

git --version

<p>C'est une installation globale. Il est dans l'environnement est detecté par PHPStorm.</p>

<p>on doit initialisé GitHub.</p>

git init

Il faut configurer le config.

il faut configurer git.

<pre><code class="language-php line-numbers">git config --global user.name "John Doe" // Deux variables
    // Ne doit pas correspond à GitHub obligatoirement mais peut.</code>

<pre><code class="language-php line-numbers">git config --global user.email "john.doe@email.com"

    // Cet étapde ne ce fait qu'une fois.</code></pre>

    <pre><code class="language-php line-numbers">git config --list</code></pre>

    <pre><code class="language-php line-numbers">git add index.php // plusieur commande, mais d'abord indiqué le nom du fichier.</code></pre>

    git status

    on va créé un ".gitignore"
    Qui permet d'ajouter les fichiers que l'on ne veus pas commiter.

#
 * Created by PhpStorm.
 * User: nemzag
 * Date: 2018-10-19
 * Time: 10:12
 #

.idea/* # pas idéa & tout ce qui à dans le dossier. Pattern de base.
fichier.ext # si on ne veut pas un fichier, le nom et l'extension.



</body>
</html>

