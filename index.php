<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rand PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: gray;
        }
        .bloc{
                background-color: white;
                border: 2px solid #451209;
                border-bottom-right-radius: 15px; 
                border-bottom-left-radius: 15px; 
                box-shadow: 1px 1px 1px black;
        }
    </style>
  </head>
  <body>
    <section class="container jumbotron text-center"> 
        <div class="row">
            <div class="col">
                <h1>Rand PHP</h1>
            </div>
        </div>
    </section>
        <!-- Créer un tableau, dans les 30 cases du tableau placer un nombre aléatoire entre 0 et 100.
                    Afficher le nombre de fois ou chaque valeur est présente dans le tableau. -->
        <section class="container bloc">
            <br>
            <div class="row">
                <div class="col">
                    <table border="double">
                        <tr>
                            <?php 
                                $valeurRandom = -1;
                                $tab = array();

                                for ($i = 1; $i < 101; $i++) { 
                                    $tabNombre[$i] = 0;
                                }
                                for ($i = 1 ; $i < 31 ; $i++) { 
                                    $valeurRandom = rand(0,100);
                                    $tab[$i] = $valeurRandom; 
                            ?> 
                                <td><?php echo $tab[$i]; ?></td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <?php 
                        for ($j = 1; $j < 31; $j++) { 
                            $tabNombre[$tab[$j]]++;
                        }
                        for ($i = 1; $i < 101; $i++) { 
                        ?>
                            <p class="<?php echo ($tabNombre[$i] > 1) ? "alert alert-danger" : "" ?>">
                                <?php echo "La valeur ".($i)." est présente ".$tabNombre[$i]." fois."; ?>
                            </p>
                        <?php }
                    ?>
                </div>
            </div>
        </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>