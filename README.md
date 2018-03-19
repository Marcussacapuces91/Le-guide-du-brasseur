Le guide du brasseur
====================

[![License](https://img.shields.io/github/license/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS.png)](https://github.com/picocms/Pico/blob/master/LICENSE.md)
[![Version](https://img.shields.io/badge/release-V0.1-blue.png)](https://github.com/Marcussacapuces91/Le-guide-du-brasseur-PICO-CMS/releases/latest)
[![Mise en page](https://img.shields.io/badge/Avancement%20mise%20en%20page-faible-orange.png)](https://github.com/picocms/Pico/blob/master/content)
[![Style](https://img.shields.io/badge/Avancement%20du%20style-faible-orange.png)](https://github.com/picocms/Pico/blob/master/theme/site)
![PHP tested](https://img.shields.io/badge/PHP%20tested-5.6%20%26%207.1-brightgreen.png)

C'est un site web complet contenant à la fois :
* un moteur de publication : [Pico](http://picocms.org/) (voir aussi [Au sujet de Pico](http://picocms.org/about/) pour plus d'informations.) ;
* le contenu du livre « Le guide du brasseur ou l'art de faire la bière », tombé 
dans le domaine public, et disponible sous la forme de scan / OCR auprès de la 
[Bibliothèque Nationale de France](http://www.bnf.fr/fr/acc/x.accueil.html).

Le but de ce fork est donc de faire un lieu permettant à chacun la correction et 
le maintient à jour de cette édition, et pourquoi pas son enrichissement.

Couverture
----------
![Couverture](https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/blob/master/images/Le_guide_du_brasseur_ou_%5B...%5DMulder_Gerardus_bpt6k130227v.jpeg)


Installation
------------
Pour installer le site web... 

###### Étape 1 - pour les utilisateurs
[Télécharger le *code source* de la dernière version de l'ensemble][LatestRelease], 
et uploader tous les fichiers dans le répertoire `httpdocs` (par ex. `/var/www/html`)
de votre serveur Web, puis se placer dans ce répertoire avec le `shell`.

###### Étape 1 - pour les développeurs
Ouvrir un `shell` et se placer dans un sous-répertoire de `httpdocs` (par ex. `/var/www/html`) pour procéder à l'installation.
Vous pouvez cloner le `repo git` du projet de la manière suivante :
```shell
$ git clone https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS .
```
Noter que cela donne accès à une version *en cours* qui *n'est peut-être pas exploitable en production* !

###### Étape 2
Télécharger [composer][] et le lancer avec l'option `install` :
```shell
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
```

Mise à jour
-----------
Il suffit de remplacer tous les fichiers de votre version actuelle, *toujours* 
après avoir pris soin d'en faire une sauvegarde. C'est tout !

Lancer la publication
---------------------

#### Vous n'avez pas de serveur web ?
À partir de PHP 5.4, la manière la plus simple d'assurer la publication est 
d'utiliser le [serveur interne de PHP][PHPServer].

Il faut quand même noter que ce serveur est réservé au développement ou à des 
environnements de test seulement !

###### Étape 1
En utilisant le `shell`, se déplacer vers le répertoire où est déployé le projet.

###### Étape 2
Démarrer le serveur Web interne de PHP :
```shell
$ php -S 127.0.0.1:8080
```

###### Étape 3
Accéder au site via http://localhost:8080.

Besoin d'aide
-------------

Pour tout ce qui concerne Pico, là c'est vers leur site qu'il faut se tourner.

Concernant le contenu du site (le livre et ses annexes), pour les utilisateurs, 
il n'y a pas d'autre aide que cette page.

Pour les auteurs qui souhaiteraient faire évoluer ou corriger le texte, je vous
encourage à me contacter soit au travers du git, soit en passant par 
https://join.slack.com/t/dispositifs/signup.
 
**Avant de créer un nouveau ticket (issue)**, merci de vérifier que le point n'a 
pas déjà été signalé en utilisant [GitHubs search engine][IssuesSearch]. Merci 
de decrire le sujet avant autant de clarté que possible et de préciser la 
version  du projet installée. J'ai besoin d'informations précisant *les 
comportement réels et attendus*, ainsi que *les étapes pour reproduire* le 
problème, ainsi que les opérations ayant pu résoudre le problème (*votre propre 
débug*).

Contribuer
----------

Vous voulez contribuer au projet ? J'apprécierais beaucoup ! Vous pouvez m'aider 
à améliorer le site aussi bien sur le contenu que sur la mise en page, en 
[contribuant au code][PullRequests] ou en [remontant des problèmes][Issues], 
mais s'il vous plait tenez compte [règles de contribution][ContributionGuidelines].

Dans tous les cas, c'est simple : ouvrer un `fork` depuis le site 
https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS, modifiez les 
fichiers et faite [une demande de mise à jour (`pull request`)][PullRequests].

J'attends vos contributions ! 

[LatestRelease]: https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/releases/latest
[composer]: https://getcomposer.org/
[PHPServer]: http://php.net/manual/en/features.commandline.webserver.php
[Issues]: https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/issues
[IssuesSearch]: https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/search?type=Issues
[PullRequests]: https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/pulls
[ContributionGuidelines]: https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/blob/master/CONTRIBUTING.md

<!--
[HelpUpgrade]: http://picocms.org/in-depth/upgrade/
[HelpUserDocs]: http://picocms.org/docs/
[HelpDevDocs]: http://picocms.org/development/
[Submit]: http://picocms.org/in-depth/submission_guidelines
[OfficialPlugins]: http://picocms.org/plugins/
[OfficialThemes]: http://picocms.org/themes/
[Wiki]: https://github.com/picocms/Pico/wiki
[WikiPlugins]: https://github.com/picocms/Pico/wiki/Pico-Plugins
[WikiThemes]: https://github.com/picocms/Pico/wiki/Pico-Themes
[Issues]: https://github.com/picocms/Pico/issues
[IssuesSearch]: https://github.com/picocms/Pico/search?type=Issues
[PullRequests]: https://github.com/picocms/Pico/pulls
[ContributionGuidelines]: https://github.com/picocms/Pico/blob/master/CONTRIBUTING.md
[EditInlineDocs]: https://github.com/picocms/Pico/edit/master/content-sample/index.md
[EditUserDocs]: https://github.com/picocms/picocms.github.io/tree/master/_docs
[EditDevDocs]: https://github.com/picocms/picocms.github.io/tree/master/_development
-->
