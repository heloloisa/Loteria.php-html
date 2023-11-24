<html>
    <!-- as duas princpais formas para se interagir com um site são o clique e o formulário. -->

    <head>
    <title>Pokedex</title>

    <style>
        
        #pesquisa { 
            /* https://www.homehost.com.br/blog/tutoriais/tabela-de-cores-html/ */

            background: #B0E0E6;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            text-align:center;
            
        }

        .pokemon {
            width:20%;
            /* a caixa identificada com a class pokemon ficara com 20% do tamanho da tela */
            
            /* existem varios tipos de borda, como a pontilhada, e o resto que eu nao lembro */
            border: solid 2px #555;
            padding:10px; 
            float:left;
        }
        .pokemon img{
            max-width : 100%;
        }
    </style>

    </head>

    <body>
    <!-- o nome das caixas genéricas, que servem pra qualquer coisa dos sites são chamadas de "div" -->
    <!-- para darmos um nome para as div, identificarmos ela nós usamos "<div id = "nome da caixa"> -->
        <div id = "pesquisa">
            <form>

                <!-- o input do html é o readline do php -->


                <input type = "text" placeholder = "Digite um Pokemón">
                <input type = "submit" value = "buscar">

            </form>
        </div>
        <!-- se colocar #nomedadiv  ex: #pokemons, e apertar enter ele ja faz a estrutura das div -->
        
        <div id = "pokemons">

            <?php for( $i = 0; $i<20; $i++): ?>
                <div class = "pokemon">

                    <!-- toda imagem tem que ter pelo menos uma propriedade, a source(src). o alt serve para caso aconteça algo e a imagem seja deletada, ai ele aparece como um texto alternativo. -->
                    
                    <img src= "https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png" alt ="????" > 

                        <!-- para alterar o tamanho usamos widht = "tamanho" (ou %) -->


                    <h1>Venusaur</h1>
                    <p>peso: 100.0 kg</p>
                    <p>altura: 2.0 m</p>
                </div>

            <?php endfor  ?>

        </div>

    </body>
    
</html>
