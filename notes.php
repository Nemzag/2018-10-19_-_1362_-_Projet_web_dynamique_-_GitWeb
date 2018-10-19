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
<p>git install, with executable, download at <a href="https://git-scm.com/">https://git-scm.com/</a></p>

desactive windows integraiton.

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

    fichier .gitignore comment à a jouté par après.
#
 * Created by PhpStorm.
 * User: nemzag
 * Date: 2018-10-19
 * Time: 10:12
 #

.idea/* # pas idéa & tout ce qui à dans le dossier. Pattern de base.
fichier.ext # si on ne veut pas un fichier, le nom et l'extension.

<pre><code class="language-php line-numbers">git add --all
        C:\Users\nemza\Google Drive\www\gitweb>git add --all</code></pre>


 <pre><code class="language-php line-numbers">git status.

    C:\Users\nemza\Google Drive\www\gitweb>git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <>..." to unstage)

        new file:   .gitignore
        new file:   index.php
        new file:   notes.php
        new file:   todo.md


C:\Users\nemza\Google Drive\www\gitweb></code></pre>

    git commit

    nano apparait en interne. Le commentaire est très important. Il doit être sensé !
 j'écrit :
    premier commit projet (files)
ensuite ctrl+x

    C:\Users\nemza\Google Drive\www\gitweb>git commit
[master (root-commit) efb1ac5] premier commit projet (files)
 4 files changed, 91 insertions(+)
 create mode 100644 .gitignore
 create mode 100644 index.php
 create mode 100644 notes.php
 create mode 100644 todo.md

C:\Users\nemza\Google Drive\www\gitweb>

    ou

    <pre><code class="language-php line-numbers">git commit --m "premier commit projet (files)" // Alias</code></pre>

    <pre><code class="language-php line-numbers">git log // pour voir tout.

    C:\Users\nemza\Google Drive\www\gitweb>git log
commit efb1ac5734caed0614aa5f1288bdd70037e88ffc (HEAD -> master)
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 10:21:21 2018 +0200

    premier commit projet (files)

            C:\Users\nemza\Google Drive\www\gitweb></code></pre>

    <pre><code class="language-php line-numbers">git log --stat // La meme chose car rien à comparer.

    C:\Users\nemza\Google Drive\www\gitweb>git log --stat
commit efb1ac5734caed0614aa5f1288bdd70037e88ffc (HEAD -> master)
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 10:21:21 2018 +0200

    premier commit projet (files)

 .gitignore |  3 +++
 index.php  |  7 ++++++
 notes.php  | 74 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 todo.md    |  7 ++++++
 4 files changed, 91 insertions(+)
            (END)</code></pre>

    <pre><code class="language-php line-numbers">C:\Users\nemza\Google Drive\www\gitweb>git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   css/main.css
        new file:   css/style.css
        new file:   lire.txt

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        modified:   .gitignore
        modified:   css/main.css
        modified:   css/style.css
        modified:   lire.txt
        modified:   notes.php
        modified:   todo.md

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        admin.php


C:\Users\nemza\Google Drive\www\gitweb>git add --all

C:\Users\nemza\Google Drive\www\gitweb>git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        modified:   .gitignore
        new file:   admin.php
        new file:   css/main.css
        new file:   css/style.css
        new file:   lire.txt
        modified:   notes.php
        modified:   todo.md


C:\Users\nemza\Google Drive\www\gitweb>

<pre><code class="language-php line-numbers">
        C:\Users\nemza\Google Drive\www\gitweb>git commit --m "Ajout des CSS"
[master 3126876] Ajout des CSS
 7 files changed, 113 insertions(+), 6 deletions(-)
 create mode 100644 admin.php
 create mode 100644 css/main.css
 create mode 100644 css/style.css
 create mode 100644 lire.txt

C:\Users\nemza\Google Drive\www\gitweb>git log
commit 31268766e4be568e1b8ecc1b44242fee2dae77d5 (HEAD -> master) // Clé de cryptage en CH1
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 11:18:21 2018 +0200

    Ajout des CSS

commit efb1ac5734caed0614aa5f1288bdd70037e88ffc
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 10:21:21 2018 +0200

    premier commit projet (files)
(END)

        Le commit que je l'ai fait trop rapidement.

        <pre><code class="language-php line-numbers">git add --all</code></pre>
    </code>
</body>
</html>

