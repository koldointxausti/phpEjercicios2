<html>
    <head>
        <title>ejercicio1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            $numeros = [];
            $factoriales = [];
            for($i = 0 ; $i < 10 ; $i++){
                array_push($numeros, $i);
                if($numeros[$i]==0)
                    array_push($factoriales, 1);
                else{
                    $factorial = 1;

                    for ($j = 1; $j <= $numeros[$i] ; $j++)
                        $factorial *= $j;

                    array_push($factoriales, $factorial);
                }

                echo '<br>'.$factoriales[$i].'<br><br>';

            }              


        ?>
    </body>
</html>