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

<h2>Une fois intallé :</h2>

<pre><code class="language-php line-numbers">git --version</code></pre>

<p>C'est une installation globale. Il est dans l'environnement est detecté par PHPStorm.</p>

<h3>on doit initialisé GitHub.</h3>

<pre><code class="language-php line-numbers">git init</code></pre>

<p>il faut configurer git.</p>

<pre><code class="language-php line-numbers">git config --global user.name "John Doe" // Deux variables
        // Ne doit pas correspond à GitHub obligatoirement mais peut.</code></pre>

<pre><code class="language-php line-numbers">git config --global user.email "john.doe@email.com"

    // Cet étapde ne ce fait qu'une fois.</code></pre>

    <pre><code class="language-php line-numbers">git config --list</code></pre>

    <pre><code class="language-php line-numbers">git add index.php // plusieur commande, mais d'abord indiqué le nom du fichier.</code></pre>

<pre><code class="language-php line-numbers">git status</code></pre>

<p>on va créé un ".gitignore"<br>
    Qui permet d'ajouter les fichiers que l'on ne veus pas commiter.</p>

    Fichier .gitignore commentaire à ajouté par après.
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
Author: John Doe &lt;john.doe@email.com&gt;
Date:   Fri Oct 19 10:21:21 2018 +0200

    premier commit projet (files)

            C:\Users\nemza\Google Drive\www\gitweb></code></pre>

    <pre><code class="language-php line-numbers">git log --stat // La meme chose car rien à comparer.

    C:\Users\nemza\Google Drive\www\gitweb>git log --stat
commit efb1ac5734caed0614aa5f1288bdd70037e88ffc (HEAD -> master)
Author: John Doe &lt;john.doe@email.com&gt;
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
  (use "git reset HEAD &lt;file&gt;..." to unstage)

        new file:   css/main.css
        new file:   css/style.css
        new file:   lire.txt

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

        modified:   .gitignore
        modified:   css/main.css
        modified:   css/style.css
        modified:   lire.txt
        modified:   notes.php
        modified:   todo.md

Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)

        admin.php


C:\Users\nemza\Google Drive\www\gitweb>git add --all

C:\Users\nemza\Google Drive\www\gitweb>git status
On branch master
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

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

        <pre><code class="language-php line-numbers">git commit --amend
            // La on peut changer le message. Mais on ne le fera pas.
            // ctrl+x</code></pre>
        C:\Users\nemza\Google Drive\www\gitweb>git commit --amend
[master 58dca1a] Ajout des CSS
 Date: Fri Oct 19 11:18:21 2018 +0200
 7 files changed, 184 insertions(+), 6 deletions(-)
 create mode 100644 admin.php
 create mode 100644 css/main.css
 create mode 100644 css/style.css
 create mode 100644 lire.txt

C:\Users\nemza\Google Drive\www\gitweb>

    </code>

    <pre><code class="language-php line-numbers">C:\Users\nemza\Google Drive\www\gitweb>git add --all

C:\Users\nemza\Google Drive\www\gitweb>git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        modified:   .gitignore
        new file:   css/grid.css
        modified:   notes.php
        modified:   todo.md


C:\Users\nemza\Google Drive\www\gitweb></code></pre>

    <pre><code class="language-php line-numbers">C:\Users\nemza\Google Drive\www\gitweb>git rm --cached lire.txt // rm : remove.
rm 'lire.txt'
// Voila comment le retirer avant le commit.
</code></pre>

    <pre><code class="language-php line-numbers">C:\Users\nemza\Google Drive\www\gitweb>git add --all

C:\Users\nemza\Google Drive\www\gitweb>git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        modified:   .gitignore
        new file:   css/grid.css
        modified:   notes.php
        modified:   todo.md


C:\Users\nemza\Google Drive\www\gitweb>
</code></pre>

    Création de home.php

    Ajoute de <?= "Hello Git" ?> dans le content.

<pre><code class="language-php line-numbers">C:\Users\nemza\Google Drive\www\gitweb>git add --all

C:\Users\nemza\Google Drive\www\gitweb>git commit --m "Ajout message dans home.php"
[master 2ce6714] Ajout message dans home.php
 5 files changed, 89 insertions(+), 22 deletions(-)
 create mode 100644 css/grid.css
 create mode 100644 home.php

        C:\Users\nemza\Google Drive\www\gitweb></code></pre>

    <pre><code class="language-php line-numbers">C:\Users\nemza\Google Drive\www\gitweb>git log
commit 2ce6714947316e36e6067d096668666ee071a022 (HEAD -> master)
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 11:35:09 2018 +0200

    Ajout message dans home.php

commit 58dca1ae2de5dbf5a3cbf6f88af44595139fd911
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 11:18:21 2018 +0200

    Ajout des CSS

commit efb1ac5734caed0614aa5f1288bdd70037e88ffc
Author: John Doe <john.doe@email.com>
Date:   Fri Oct 19 10:21:21 2018 +0200

    premier commit projet (files)
(END)
</code></pre>

    Vous voulez supprimez le commit ? Attention, vous effacez tout les modifications.

    <pre><code class="language-php line-numbers">git log</code></pre>

    On recupere le cha1

    <pre><code class="language-php line-numbers">git reset 2ce6714947316e36e6067d096668666ee071a022 --hard</code>
</body>
</html>

