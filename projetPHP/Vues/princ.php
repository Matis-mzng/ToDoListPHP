<html>
<head><title>VuePrincipale</title>
</head>

<body>

<h1>Vue princ</h1>
<?php
if (isset ($listTask)) {
    foreach ($listTask as $task) {
        echo "<a href=.index.php?action=AffPageDef&.URL='.$task->getURL.'>'.$task->getTitre().'</a></br>";
    }
}
?>

</body> </html>



<!--à rendre sur moodle 23 déc minuit zip avec le nom du binôme avec la bdd (.SQL) faire un export de phpMyAdmin-->