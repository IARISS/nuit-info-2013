<?php
//Template maitre, les pages supplémentaires sont à mettre dans le dossier pages
if (empty($_GET['page'])) {
    header('Location: /searchPage');
    exit();
}

// Contenu de la page
$_GET['page'] = str_replace("\0", '', $_GET['page']); //Protection bytenull
$_GET['page'] = str_replace(DIRECTORY_SEPARATOR, '', $_GET['page']); //Protection navigation
$contentPage = 'pages/'.$_GET['page'].'.php';
$contentPage = file_exists($contentPage)?$contentPage:'errors/404.php';

include 'include/header.php';
?>

<div id="content">
    <?php include($contentPage); ?>
</div>

<?php
	include 'include/footer.php';
?>