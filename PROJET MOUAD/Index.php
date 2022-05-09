<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'database.php';
        include_once 'includes/nav.php';
        //REQUEST
        $sqlState = $pdo->query('SELECT * FROM stagiaires');
        //GET VALUES
        $stagiaires = $sqlState->fetchAll(PDO::FETCH_OBJ);
        //echo "<pre>";
        //print_r($stagiaires);
        //echo "</pre>";
    ?>
    <div class="container my-4">
        <a href="ajouter.php" class='btn btn-success btn-sm link float-end'>Ajouter</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">Opérations</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($stagiaires as $stagiaire){ ?>
                    <tr>
                        <td><?= $stagiaire->id//$stagiaire['id'] ?></td>
                        <td><?= $stagiaire->prenom//$stagiaire['prenom'] ?></td>
                        <td><?= $stagiaire->nom//$stagiaire['nom'] ?></td>
                        <td>
                        <?php 
                            // < 20  : bg-success (green)
                            // > 20  : bg-warning (orange)
                            // > 30  : bg-danger (red)
                            if($stagiaire->age >= 30){
                                $color = 'bg-danger';
                            }
                            elseif($stagiaire->age >=20){
                                $color = 'bg-warning';
                            }
                            elseif($stagiaire->age < 20){
                                $color = 'bg-success';
                            }
                        ?>
                        <span class="badge rounded-pill <?= $color ?>"><?= $stagiaire->age//$stagiaire['age'] ?> ans</td></span>
                        <td>
                            <form method="post" action="supprimer.php">
                                <input type="hidden" name="id" value="<?php echo $stagiaire->id ?>">
                                <input class='btn btn-primary btn-sm' type="submit" value="Modifier" name="modifier">
                                <input class='btn btn-danger btn-sm' type="submit" value="Supprimer" name="supprimer" onclick="return confirm('Voulez vous supprimer le stagiaire ?')">
                            </form>
                        </td>
                    </tr>
                    <?php 
                }
                    ?>   
        </tbody>
</table>
    </div>
</body>
</html>