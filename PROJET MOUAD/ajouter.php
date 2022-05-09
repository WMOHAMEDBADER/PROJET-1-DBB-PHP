<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajouter</title>
</head>
<body>
    <?php 
        require_once 'database.php';
        include_once 'includes/nav.php';
    ?>
    <div class="container my-4">
        <?php 
            if(isset($_POST['ajouter'])){
                $prenom = htmlspecialchars($_POST['prenom']);
                $nom    = htmlspecialchars($_POST['nom']);
                $age    = htmlspecialchars($_POST['age']);

                if(!empty($prenom) && !empty($nom) && !empty($age)){
                    $sqlState = $pdo->prepare('INSERT INTO stagiaires VALUES(null,?,?,?)');
                    $sqlState->execute([$nom,$prenom,$age]);
                    header('Location: index.php');
                }else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Required fields.
                    </div>
                    <?php
                }

            }
        ?>
    <form method="POST">
    <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
        </div>

        <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
    </form>
    </div>
</body>
</html>