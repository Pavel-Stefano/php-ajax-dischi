<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà 
attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->

<?php 

include __DIR__.'./database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>dischi</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach($dischi as $card) { ?>
                    <div class="card box m-3 text-center" style="width: calc(100% / 6);">
                        <img src="<?php echo $card['poster'] ?>" class="my-2" alt="<?php echo $card['author'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $card['title'] ?></h5>
                            <p class="card-text"><?php echo $card['author'] ?></p>
                            <span><?php echo $card['year'] ?></span>
                    
                        </div>
                    </div>
                <?php } ?>
            
            </div>

        </div>
    </main>
    
</body>
</html>

