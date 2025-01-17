<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('../include/head.php'); ?>
<title>TP PHP 2.3 - Statistiques</title>
<body>
<header>
    <?php include('../include/header.php'); ?>
</header>
<section class ='titre'>
    <h1>TP PHP 2 - Génération HTML</h1>
    <h3>Exercice 3. Manipulation de tableaux : filtrage, tri, parcours</h3>
    <hr>
</section>
<?php
require("tabEmployeesexo2tp3.php");

$ageMoyen = 0;// Age moyen des employés
$salaireMoyen = 0; // Salaire moyen des plus de 55 ans

$tenRichest = array(); // Tableau contenant les 10 employés ayant le plus haut salaire

// A COMPLETER
// Q1 : age moyen de tous les employés
function agemoyen (array $employees):int{
    $totalage = 0;
    foreach($employees as $e){
        $totalage += $e['age'];
    }
    return $totalage / count($employees);
}
$ageMoyen = agemoyen($employees);

// Q2 : salaire moyen des employés de plus de 55 ans
function salaire_moyen_vieux (array $employees):int{
    $totalsalaire = 0;
    $nb_vieux = 0;
    foreach($employees as $e){
        if($e['age'] > 55)
            $totalsalaire += $e['salary'];
            ++$nb_vieux;
    }
    return $totalsalaire / $nb_vieux;
}
$salaireMoyen = salaire_moyen_vieux($employees);

// Q3 : Les 10 plus haut salaire
// Exemple : $tenRichest = ["Oren Dudley (9985 €)", "Jerome Flynn (9881 €)", ...]
function top10_salaire(array $employees):array{
    $top10 = [];
    for($i = 0; $i<10 ; ++$i){
        $max = $employees[0]['salary'];
        for($j = 0; $j<count($employees); ++$j){
            if($employees[$j]['salary'] > $max && !in_array($employees[$j]['salary'],$top10)){
                $max = $employees[$j]['salary'];
            }
        }
        $top10[$i] = $max;
    }
    return $top10;
}

$tenRichest = top10_salaire($employees);



// Affichage des 3 variables remplies dans les réponses aux questions 1 à 3
echo "<p>Age moyen des employés : ".round($ageMoyen,2)." ans</p>";
echo "<p>Salaire moyen des employés de plus de 55 ans : ".round($salaireMoyen,2)." €</p>";
echo "<p>Top 10 des plus haut salaire : <ol>";
foreach($tenRichest as $e) echo "<li>$e</li>";
echo "</ol></p>";
?>
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