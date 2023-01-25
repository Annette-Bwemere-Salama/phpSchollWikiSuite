<?php echo 'Si vous voulez integrer du code PHP Dans le document XHTML ou XML, Utilisez ces balises'?>

vous pouvez utiliser la balise courte pour  <?= 'écrire ce texte'?>.
Ce dernier est équivalent à <?php echo 'écrire ce texte'?>.

<? echo 'ce code est entre des balises courtes'; ?>

le code suivant <?= 'du text' ?> est un raccourci pour <? echo 'du texte' ?>

<p>
    Note: Si un fichier contient seulement du code PHP , il est préférable de ne pas placer la balise de fermeture à la fin du fichier.
    <br>
    ceci permet d'éviter d'oublier un espace ou une nouvelle ligne après la balise de fermeture de PHP, ce qui causerait des effets non voulus car PHP,
    Commencera à afficher la sortie, ce qui n'est souvent pas le cas désiré.
</p>

<?php
echo "Bonjour le monde!";

//... encore du codele 


echo "Dernier instruction";

?>

// le script se termine ici, sans la balise de fermeture PHP


<p>Ceci sera ignoré par PHP Et affiché au navigateur</p>
<?php echo 'Alors que ceci sera analysé par PHP'; ?>
<p>Ceci sera aussi ignore par PHP et affiché au navigateur.</p>

<?php if ($expression == true): ?>
    ceci sera afficher si l'$expression est vraie.
<?php else: ?>
    sinon, ceci sera affiché.
 <?php endif; ?>       