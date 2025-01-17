<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('../include/head.php'); ?>
<title>TP PHP 2.2 - Employés</title>
<style type="text/css">
    .tabsalaire {position:fixed; left:30%; border:1px black solid;}
    .hautsalaire {background-color:orange;}
    .bassalaire {background-color:lightblue;}
    main{display:block;margin:8px;justify-content:center;border-collapse:separate;}
</style>
<header>
        <?php include('../include/header.php') ?>
</header>
<body>
<section class ='titre'>
    <h1>TP PHP 2 - Génération HTML</h1>
    <h3>Exercice 2. Génération de tableau HTML avec mise en forme conditionnelle</h3>
    <hr>
</section>
<main>
    <div class = "tabsalaire"><p class="hautsalaire">Haut salaire &gt; 5000</p><p class="bassalaire">Bas salaire &lt;= 5000</p><input type="text" value="Désactivé si âge &gt; 50" disabled/></div>
    <?php  
    $employees = array ( 
    0 => array ( 'id' => '6', 'name' => 'Geraldine Meyer', 'salary' => '872', 'age' => '95', ), 
    1 => array ( 'id' => '7', 'name' => 'Idona Glenn', 'salary' => '4230', 'age' => '25', ), 
    2 => array ( 'id' => '8', 'name' => 'Martena Hyde', 'salary' => '9776', 'age' => '70', ), 
    3 => array ( 'id' => '9', 'name' => 'Colette Mcmillan', 'salary' => '6873', 'age' => '37', ), 
    4 => array ( 'id' => '10', 'name' => 'Raya Cook', 'salary' => '6296', 'age' => '45', ), 
    5 => array ( 'id' => '11', 'name' => 'Warren Hendrix', 'salary' => '6822', 'age' => '62', ), 
    6 => array ( 'id' => '12', 'name' => 'Lionel Best', 'salary' => '345', 'age' => '53', ), 
    7 => array ( 'id' => '13', 'name' => 'Louis Brown', 'salary' => '7477', 'age' => '41', ), 
    8 => array ( 'id' => '14', 'name' => 'Ginger Wolf', 'salary' => '4137', 'age' => '77', ), 
    9 => array ( 'id' => '15', 'name' => 'Sade May', 'salary' => '9829', 'age' => '65', ), 
    10 => array ( 'id' => '16', 'name' => 'George Doyle', 'salary' => '4405', 'age' => '97', ), 
    11 => array ( 'id' => '17', 'name' => 'Devin Sheppard', 'salary' => '3136', 'age' => '70', ), 
    12 => array ( 'id' => '18', 'name' => 'Marah Witt', 'salary' => '551', 'age' => '99', ));

    function nb_voyelles(string $name): int {
        $voyelle = ['a', 'e', 'i', 'o', 'u', 'y'];
        $cpt = 0;
        foreach (str_split($name) as $lettre) {
            if (in_array($lettre, $voyelle)) {
                ++$cpt;
            }
        }
        return $cpt;
    }

    function disabled(int $age):string {
        if($age > 50)
            return 'disabled';
        return '';
    }

    function taille_salaire(int $salaire):string{
        if($salaire > 5000)
            return 'hautsalaire';
        return 'bassalaire';
    }

    foreach($employees as $e){
        echo '<table>';
            echo '<tr class="' . taille_salaire($e['salary']) . '">';
                echo '<td title="' . nb_voyelles($e['name']) . 'voyelles, ' . $e['salary'] . ' euros" width = 200px>' . $e['name'] . '</td>';
                echo '<td><input type="number" min="0" max="100" value="' . $e['age'] . '" ' . disabled($e['age']) . ' /></td>';
            echo '</tr>';
        echo '</table>';  
    }
    ?>
</main>
<!--
    EXEMPLE DE GENERATION HMTL POUR LES 3 PREMIERS EMPLOYES
<table>
    <tr class="bassalaire">
        <td title="7 voyelles, 872€">Geraldine Meyer</td>
        <td><input type="number" min="0" max="100" value="95" disabled/></td>
    </tr>
    <tr class="hautsalaire">
        <td title="4 voyelles, 4230€">Idona Glenn</td>
        <td><input type="number" min="0" max="100" value="25"/></td>
    </tr>
    <tr class="hautsalaire">
        <td title="5 voyelles, 9776 euros">Martena Hyde</td>
        <td><input type="number" min="0" max="100" value="70" disabled /></td>
    </tr>
</table>
-->

<nav aria-label="Page navigation example">
  <ul class="pagination fixed-bottom justify-content-center">
    <li class="page-item"><a class="page-link" href="ex01tp2.php">Exo.1</a></li>
    <li class="page-item"><a class="page-link" href="exo2tp2.php">Exo.2</a></li>
    <li class="page-item"><a class="page-link" href="statistiquesexo2tp3.php">Exo.3</a></li>
  </ul>
</nav>
<footer>
    <?php include('../include/footer.php') ?>
</footer>
</body>
</html>