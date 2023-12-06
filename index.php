<?php 




    $pokemons_api = file_get_contents("https://pokeapi.co/api/v2/pokemon");

    $pokemons = json_decode($pokemons_api, true);

    for ($i=0; $i < 20 ; $i++) { 
        $pokemon = $pokemons['results'][$i];
        $todas_infos_api = file_get_contents($pokemon['url']);
        $pokemons['results'][$i] = json_decode($todas_infos_api, true);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <style>
        #pesquisa {
            background : #dbb6ee;
            font-family : Verdana, Geneva , Tahoma, sans-serif;
            padding :20px;
            text-align : center;

        }
            
        #pesquisa input[type="text"]{

            width: 300px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;

        }

        #pesquisa input[type="submit"]{

            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;


        }
        .pokemon {
            padding : 15px;
            width :20%;
            border : solid #000000;
            background: #E6E6FA;
            float : left;
            text-align: center;
            margin: 1% ;
        }
        .pokemon img{
            max-width: 100%;
            height: 170px;
        }
    </style>
</head>
<body>
    <div id="pesquisa"> 
        <form action="logica.php" method="post">
                <input type="text" placeholder ="Digite o pokemon">
                <input type="submit" value="Buscar">
        </form>
    </div>
    <div id="pokemons">
        <?php
            for ($i=0; $i < 20 ; $i++): ?>
                <div class="pokemon">
                    <h1><?= $pokemons['results'][$i]['name']?></h1>
                    <img src="<?= $pokemons['results'][$i]['sprites']['other']['dream_world']['front_default']?>" alt="Pokemon Dewgong " width="200px">
                    <p>Altura <?= $pokemons['results'][$i]['sprites']?></p>
                    <p>Peso <?= $pokemons['results'][$i]['sprites']?></p>
                    </div>
            
    </div>
          <?php  endfor ?>

  
</body>
</html>
