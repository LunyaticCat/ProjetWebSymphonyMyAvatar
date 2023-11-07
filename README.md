<div class="container">
            <h1>Projet <span class="subtitle">API REST, Symfony, Vue.js, Client-Serveur</span></h1>

<h2 id="sujet">Sujet</h2>

<p>Ce projet se fera en <strong>quadrinôme</strong> et s’intéressera au développement de <strong>trois applications</strong> qui vont communiquer entre elles en utilisant les différentes technologies que nous avons abordées pendant ce cours : <strong>Symfony</strong>, <strong>API Platform</strong>, <strong>Vue.js</strong>.</p>

<p>L’objectif est de développer :</p>

<ul>
  <li>
    <p>Une <strong>API Rest</strong> avec Symfony, en utilisant <strong>API Platform</strong> (<a href="/R5.A.05-ProgrammationAvancee-Web/tutorials/tutorial4">TD4 de Symfony</a>). Il s’agit de la partie <strong>back-end</strong> du service que vous allez développer.</p>
  </li>
  <li>
    <p>Une application cliente développée avec Vue.js qui communiquera avec cette API afin de réaliser une interface pour ce service (<a href="https://matthieu-rosenfeld.github.io/tutorials/TD3.html">TD3 de Vue.js</a>). Il s’agit donc de la partie <strong>front-end</strong> de votre service.</p>
  </li>
  <li>
    <p>Un site web classique en “server-side rendering” (qui gère à la fois la partie client et serveur) en utilisant Symfony et Twig (<a href="/R5.A.05-ProgrammationAvancee-Web/tutorials/tutorial1">TD1</a>, <a href="/R5.A.05-ProgrammationAvancee-Web/tutorials/tutorial2">TD2</a> et <a href="/R5.A.05-ProgrammationAvancee-Web/tutorials/tutorial3">TD3</a> de Symfony). Ce site consistera en un micro-service qui permettra d’améliorer le client développé en Vue.js (et même d’autres projets !).</p>
  </li>
</ul>

<p>Le choix du thème est “semi-libre” (ou semi-imposé si vous préférez :P) : nous allons vous donner une description générale du thème du service à développer et vous devrez vous-même le préciser. Nous allons en reparler dans la section suivante.</p>

<h3 id="api-rest-de-recettes-symfony--api-platform">API REST de “Recettes” (Symfony + API Platform)</h3>

<p>La première partie consiste donc au développement d’une <strong>API REST</strong> autour du thème des <strong>recettes</strong> en utilisant Symfony et API Platform, comme dans le <a href="/R5.A.05-ProgrammationAvancee-Web/tutorials/tutorial4">TD4</a>.</p>

<p>L’idée générale de ce service est la suivante :</p>

<ul>
  <li>
    <p>On a différents <strong>ingrédients</strong> nommés.</p>
  </li>
  <li>
    <p>Une <strong>recette</strong> est composée de différents <strong>ingrédients</strong> (avec différentes quantités) et permettent de produire quelque-chose de nouveau.</p>
  </li>
  <li>
    <p>On doit pouvoir connaître la liste des ingrédients, en ajouter, en modifier, en supprimer…</p>
  </li>
  <li>
    <p>On doit pouvoir connaître la liste des recettes, en ajouter, en modifier, en supprimer…</p>
  </li>
  <li>
    <p>On doit pouvoir retrouver les différentes recettes dans lequel est utilisé un ingrédient.</p>
  </li>
  <li>
    <p>On doit pouvoir connaitre les composants d’une recette.</p>
  </li>
  <li>
    <p>Etc…</p>
  </li>
</ul>

<p>Ceci est une description assez <strong>vague</strong> et très générale que <strong>vous allez devoir préciser</strong> avec un <strong>thème</strong> que vous allez nous soumettre. Il faut que vous trouviez un sujet incorporant un système de recette.</p>

<p>Voici quelques idées :</p>

<ul>
  <li>
    <p>Minecraft et son système de crafting (les items sont des ingrédients et servent à crafter d’autres items).</p>
  </li>
  <li>
    <p>Marmiton : littéralement un site de recette de cuisine. Chaque recette possède une description, une difficulté, un temps de préparation, et bien sûr, les ingrédients…</p>
  </li>
  <li>
    <p>Potion Craft : un jeu où on combine différents ingrédients pour réaliser des potions.</p>
  </li>
  <li>
    <p>Little Alchemy : Un <a href="https://littlealchemy2.com/">jeu en ligne</a> où la combinaison de deux éléments permet de donner un nouvel élément. On commence avec quelques éléments basiques et on on obtient de nouveaux au fil des combinaisons.</p>
  </li>
  <li>
    <p>Le système de crafting du jeu Terraria. Certains objets ne peuvent être fabriqués que dans des stations spécifiques…</p>
  </li>
</ul>

<p>Cette liste est non exhaustive et vous pouvez bien sûr faire des propositions !</p>

<p>En fait, vous pouvez choisir n’importe quel système incorporant un système de recette ayant ses propres règles. Cela peut être quelque-chose où cet aspect est le centre du système (comme dans Little Alchemy) où bien comme simple composant (comme dans Minecraft). N’importe quel jeu vidéo avec un système de crafting peut donc potentiellement fonctionner.</p>

<p>Votre API de recette doit donc reprendre l’idée générale qui vous a été présentée en introduction (gérer des ingrédients, recettes, etc.) en adaptant et en étendant le concept au thème ciblé. Il faut que votre API soit conforme aux règles du système de recette du thème choisi.</p>

<p>Par exemple :</p>

<ul>
  <li>
    <p>Sur Minecraft, une recette est composée de 9 ingrédients <strong>au maximum</strong>, qui peuvent se répéter. Chaque ingrédient est à un emplacement précis (dessine une forme).</p>
  </li>
  <li>
    <p>Sur Marmiton, chaque ingrédient n’apparait qu’une fois, avec une quantité et une unité (par exemple, 100 grammes de beurre). On a aussi une liste d’instructions à suivre (préchauffer le four à 180 degrés, battre les œufs avec le lait…)</p>
  </li>
</ul>

<p>Une fois le thème choisi, prévenez votre enseignant qui validera ou non le sujet retenu. <strong>Vous n’avez pas le droit de choisir le même thème qu’une autre équipe de votre groupe TD.</strong> Premier arrivé, premier servi ! Aussi, si le système de recette d’un thème est trop proche d’un autre, il pourra être rejeté.</p>

<p>Décidez donc rapidement du thème et ne vous lancez pas dans le projet avant d’avoir eu le feu vert de votre enseignant.</p>

<p>Au-delà de l’aspect recette, votre API devra aussi gérer des <strong>utilisateurs</strong> (qui peuvent s’inscrire, se connecter, gérer leur compte, etc.). L’authentification sera gérée avec des <strong>JWT</strong>.</p>

<p>Certaines actions ne devront être accessibles qu’aux utilisateurs connectés (comme le fait de créer une recette, par exemple).</p>

<p>Certaines catégories d’utilisateurs devront avoir accès à des fonctionnalités supplémentaires, un peu comme le système de <strong>premium</strong> sur The Feed.</p>

<p>Enfin, on souhaite aussi avoir au moins <strong>un rôle</strong> supplémentaire avec des permissions plus élevées que celles de l’utilisateur. Comme un rôle <strong>administrateur</strong> par exemple, mais cela peut être autre chose.</p>

<p>En interne, vous pouvez ajouter des <strong>commandes symfony</strong> pour effectuer certaines actions, comme changer la catégorie d’un utilisateur, donner/enlever un rôle, etc…</p>

<h3 id="application-cliente-vuejs">Application cliente (Vue.js)</h3>

<p>La seconde partie du projet consiste à développer une application front-end en Vue.js permettant <strong>d’exploiter complétement votre API de recette</strong> ! Globalement, c’est toute l’idée du <a href="https://matthieu-rosenfeld.github.io/tutorials/TD3.html">TD3</a> où on construit le front-end de The Feed.</p>

<p>On attend de vous que vous exploitiez au mieux le concept de <strong>réactivité</strong> que nous avons exploré pendant les cours associés.</p>

<p>Là-aussi, il faudra adapter la présentation de l’interface au thème choisi. Vous n’allez pas présenter de la même façon un site permettant de gérer des recettes Minecraft qu’un site permettant de gérer des recettes de cuisine.</p>

<p>Comme vous gérez des utilisateurs via l’API, il faut aussi avoir tout cet aspect sur le site (inscription, connexion, gestion du compte, etc.).</p>

<p>N’hésitez pas à être ambitieux dans votre projet de manière générale et de proposer quelque-chose de sympa en accord avec le thème choisi. Par exemple, un site avec un thème style “Little Alchemy” pourrait bénéficier d’une partie avec une interface simple où on combine deux éléments pour en obtenir un nouveau.</p>

<h3 id="site-web-classique-myavatar-symfony">Site web classique “MyAvatar” (Symfony)</h3>

<p>Pour terminer, vous allez développer un site “classique” nommé <strong>MyAvatar</strong> en mode <strong>server-side rendering</strong>, avec Symfony (c’est-à-dire, pas une API). Globalement, ce que vous avez fait du TD1 au TD3 de Symfony, en utilisant <strong>twig</strong> pour l’interface.</p>

<p>Ici, même thème pour tout le monde : une imitation du service <a href="https://fr.gravatar.com/">Gravatar</a>.</p>

<p>Ce service permet (en vous inscrivant) d’associer votre adresse mail à une photo de profil. Ainsi, à partir de votre adresse, les différents sites web et applications peuvent charger votre image de profil depuis ce service sans avoir besoin de stocker cette image de leur côté et sans demander à l’utilisateur d’uploader cette image. Il suffit de faire une simple requête à <strong>Gravatar</strong>. Certains sites comme <strong>Bitbucket</strong> utilisent ce mécanisme.</p>

<p>Ainsi, n’importe quelle application manipulant <strong>l’adresse email</strong> d’un utilisateur peut facilement d’aller charger une image depuis <strong>Gravatar</strong>.</p>

<p>Pour obtenir l’image de profil <strong>Gravatar</strong> d’un utilisateur, on prend son adresse mail, on la <strong>hache</strong> avec l’algorithme <strong>MD5</strong> et on fait appel à l’URL : <a href="https://www.gravatar.com/avatar/hash">https://www.gravatar.com/avatar/hash</a></p>

<p>Par exemple, si on prend l’email d’exemple suivant : <code>gravatar.exemple.iut.mtp@gmail.com</code>.</p>

<p>On la hache avec <code>MD5</code> (par exemple avec <a href="https://www.md5hashgenerator.com/">ce site</a>) : <code>ed2e85b77eea9cd92a5348c421ff812b</code>.</p>

<p>Et on obtient l’adresse de l’image de profil via ce lien : <a href="https://www.gravatar.com/avatar/ed2e85b77eea9cd92a5348c421ff812b">https://www.gravatar.com/avatar/ed2e85b77eea9cd92a5348c421ff812b</a></p>

<p>L’idée du projet <strong>MyAvatar</strong> est donc de faire la même chose :</p>

<ul>
  <li>
    <p>Le site permet de s’inscrire en précisant un login, un mot de passe, une adresse email et surtout une photo de profil.</p>
  </li>
  <li>
    <p>L’utilisateur peut modifier les informations de son compte, notamment son adresse email et sa photo de profil. Il peut même supprimer son compte. Attention à bien gérer le fichier contenant la photo de profil dans tous ces cas !</p>
  </li>
  <li>
    <p>On peut accéder à l’image de profil à partir du code obtenu en chiffrant l’adresse email de l’utilisateur en MD5.</p>
  </li>
</ul>

<p>Vous pouvez adopter différentes stratégies :</p>

<ul>
  <li>
    <p>Directement stocker et maintenir la photo de profil avec un nom correspondant au chiffrement MD5 de l’adresse email. Ce qui permet d’avoir un lien direct vers la photo de profil (sans faire de requête passant par le framework). Mais on a moins de contrôle sur l’accès à cette ressource.</p>
  </li>
  <li>
    <p>Faire une autre méthode de stockage et avoir une action dans un controller pour retourner l’image de profil. Cela permet d’avoir plus de contrôle sur ce qui est retourné (par exemple, si l’utilisateur n’existe pas). On peut retourner une donné de type <a href="https://symfony.com/doc/current/components/http_foundation.html#serving-files">BinaryFileResponse</a> dans le controller pour cela.</p>
  </li>
</ul>

<p>Du côté de votre <strong>application Vue.js</strong>, vous devrez utiliser le service “MyAvatar” pour charger les photos de profils de vos utilisateurs en utilisant leur adresse email (information que vous donne l’API). Il suffit de hacher son adresse email et d’accéder au fichier avec un lien vers le site de “MyAvatar”.</p>

<p>Si l’utilisateur n’existe pas, il faudrait afficher une image par défaut (comme l’image “anonyme” sur The Feed). À vous de voir si vous gérez cela du côté du service ‘MyAvatar” ou au niveau de votre application Vue.js, selon vos choix d’implémentations.</p>

<p>Le package <a href="https://www.npmjs.com/package/crypto-js">crypto-js</a> permet de chiffrer du texte, notamment en <strong>MD5</strong> (<code>npm install crypto-js</code>).</p>

<p>Pour le style du site MyAvatar, faites ce que vous voulez, tant que ce n’est pas trop laid ! Cependant, <strong>il est interdit de reprendre le style de The Feed</strong>. Par contre, vous pouvez utiliser n’importe quel Framework CSS (style <strong>bootstrap</strong>). De même, si votre site comporte du JavaScript, vous pouvez utiliser <strong>jQuery</strong>, par exemple.</p>

<h2 id="hébergement-des-applications">Hébergement des applications</h2>

<p>Les différentes applications doivent être hébergées dans le dossier <code>public_html</code> d’un des membres de l’équipe (pas nécessairement le même pour toutes les applications).</p>

<p>Il faudra bien vérifier que vos applications sont accessibles depuis l’extérieur de l’iut sur l’adresse : <a href="http://webinfo.iutmontp.univ-montp2.fr/~login_depot/sous-adresse-du-projet">http://webinfo.iutmontp.univ-montp2.fr/~login_depot/sous-adresse-du-projet</a>.</p>

<p>Il ne faut pas oublier de donner au serveur de l’IUT les droits d’écriture sur vos projets contenu dans <code>public_html</code> :</p>

<pre><code class="language-bash hljs">setfacl -R -m u:www-data:r-w-x ~/public_html
setfacl -R -m d:u:www-data:r-w-x ~/public_html
</code></pre>

<h2 id="rendu">Rendu</h2>

<p>La <strong>deadline</strong> du projet est le <strong>date à définir</strong>.</p>

<p>Le projet sera à rendre sur <strong>Moodle</strong>. Un seul membre du quadrinôme dépose une archive <strong>zip</strong> nommée selon le format : <code>NomPrenomMembre1-NomPrenomMembre2-NomPrenomMembre3-NomPrenomMembre4.zip</code>.</p>

<p>Cette archive devra contenir :</p>

<ul>
  <li>
    <p>Les sources de vos trois projets dans trois dossiers séparés. Attention à ne pas inclure les répertoires liés aux librairies comme <strong>vendor</strong> pour les deux projets liés à Symfony.</p>
  </li>
  <li>
    <p>Un fichier <strong>README</strong> qui contient :</p>

    <ul>
      <li>
        <p>Le lien vers la page où est hébergé chaque application.</p>
      </li>
      <li>
        <p>Une présentation du thème choisi pour les recettes (spécificités, règles…).</p>
      </li>
      <li>
        <p>Une présentation de l’API produite, ses fonctionnalités, etc.</p>
      </li>
      <li>
        <p>Une présentation de l’application Vue.js produite, ses fonctionnalités, etc.</p>
      </li>
      <li>
        <p>Le fonctionnement de “MyAvatar” : comment faire pour récupérer l’image de profil d’un utilisateur. Aussi, éventuellement préciser si vous avez ajouté par rapport à ce qui était demandé.</p>
      </li>
      <li>
        <p>Un récapitulatif de l’investissement de chaque membre du groupe dans le projet (globalement, qui à fait quoi).</p>
      </li>
    </ul>
  </li>
</ul>

<h2 id="déroulement-du-projet-et-accompagnement">Déroulement du projet et accompagnement</h2>

<p>Le projet donnera lieu à <strong>3 notes</strong>, une note pour chaque partie.</p>

<p>Attention, il y a beaucoup à faire, répartissez-vous bien les tâches.</p>

<p>Globalement, la plupart des fonctionnalités sont réalisables à partir des connaissances que vous avez acquises pendant ce cours. Parfois, il faudra un peu adapter. Par exemple, nous n’avons pas fait de fonctionnalité “modifier le profil” sur le site de base de The Feed, mais vous devriez être capable d’implémenter une telle fonctionnalité sur “My Avatar”.</p>

<p>Pour certaines fonctionnalités plus poussées et selon votre modélisation métier du système de recette, il faudra peut-être faire des recherches et vous documenter par vous-même. Du côté de <strong>Symfony</strong> vous pouvez notamment consulter la <a href="https://symfony.com/doc/current/index.html">documentation officielle</a>, mais vous trouverez également de l’aide sur de nombreux forums. Vous pouvez même chatter directement sur le <a href="https://symfony-devs.slack.com/ssb/redirect">Slack</a> de Symfony.</p>

<p>De même, vous pouvez consulter <a href="https://vuejs.org/guide/introduction.html">la documentation</a> du Vue.js.</p>

<p>Aussi, c’est un projet assez conséquent et en équipe : cela signifie donc des outils de gestions appropriés (Trello par exemple ?) et surtout l’utilisation et la bonne organisation d’un dépôt git. N’oubliez pas que vous pouvez utiliser <a href="https://gitlabinfo.iutmontp.univ-montp2.fr">le Gitlab du département</a>.</p>

<p>Quoi qu’il en soit, n’hésitez pas à poser des questions à votre enseignant chargé de TD et à montrer votre avancement ! Bon projet.</p>
