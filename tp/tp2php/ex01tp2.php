<?php
$L = ["TRUE","FALSE",1,0,-1,"1","0","-1","NULL","[]",'""'];

function comparaison($v1, $v2) : string
{
    if($v1 == $v2)
        return "TRUE";
    else    
        return "";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../include/head.php'); ?>
    <link href="exo1tp2.css" rel="stylesheet">
    <title>Exo1 - TP2</title>
</head>
<body>
    <header>
        <?php include('../include/header.php') ?>
    </header>
    <main>
        <section class ='titre'>
            <h1>TP PHP 2 - Génération HTML</h1>
            <h3>Exercice 1. Génération du tableau HTML de comparaison par l’opérateur ===</h3>
            <hr>
        </section>
        <div class='ctn-table'>
            <table>
                <thead>
                    <tr>
                        <th> == </th>
                        <?php
                            for($e = 0; $e < count($L); ++$e){
                                echo '<th>' . $L[$e] . '</th>' ;
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($L as $v) {?>
                        <tr>
                            <?= '<th>' .$v. '</th>' ?>
                            <?php foreach($L as $vi) {?>
                                <?= '<td>' .comparaison($v,$vi). '</td>' ?>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            
            </table>
        </div>
        <nav aria-label="Page navigation example">
        <ul class="pagination fixed-bottom justify-content-center">
            <li class="page-item"><a class="page-link" href="ex01tp2.php">Exo.1</a></li>
            <li class="page-item"><a class="page-link" href="exo2tp2.php">Exo.2</a></li>
            <li class="page-item"><a class="page-link" href="statistiquesexo2tp3.php">Exo.3</a></li>
        </ul>
        </nav>
        
    </main>
    <footer>
        <?php include('../include/footer.php') ?>
    </footer>
</body>
</html>