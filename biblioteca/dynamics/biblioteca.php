<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <?php
        $buscar = (isset($_POST['buscar']) && $_POST != "")? $_POST['buscar']: 'No especifico';
        $timezone = (isset($_POST['timezone']) && $_POST != "")? $_POST['timezone']: 'No especifico';
        $modo = (isset($_POST['modo']) && $_POST != "")? $_POST['modo']: 'No especifico';
        $buscar = strtoupper($buscar);
        $gol;
        $i = rand(4, 10);
        $palabras = rand(300, 500);
        $um = rand(1, $palabras);
                echo "<table border='1'cellpadding='25px' style='margin:50px'>";
                    echo '
                    <thead>
                        <tr>
                            <th>Libro '. $um. ($um + 413).'</th>
                        </tr>
                    </thead>
                    ';
                    echo'
                    <tbody>
                        <tr>
                            <td>';
                                for($c = 0; $c <= $palabras; $c++)
                                {
                                    for($a = 0; $a <= $i; $a++)
                                    {
                                        $num = rand(97, 122);
                                        $char = chr($num);
                                        echo $char;
                                    }
                                    if($c == $um && $modo == "Normal")
                                    {
                                        echo '<strong style="font-size:20px"><i> '.$buscar.'</i></strong>';
                                    }
                                    else if($c == $um && $modo == "Orden")
                                    {
                                        /*$psIngresadas = explode(" ", $buscar);
                                        $ascii = ord($psIngresadas[0]);
                                        $ascii2 = ord($psIngresadas[1]);*/
                                        $psIngresadas = explode(" ", $buscar);
                                        sort($psIngresadas);
                                        foreach($psIngresadas as $llave => $valor)
                                        {
                                            echo "<strong style='font-size:20px'><i> $valor</i></strong>";
                                        }
                                        //echo $psIngresadas;
                                    }
                                    else if($modo == "Palabras")
                                    {
                                        $psIngresadas = explode(" ", $buscar);
                                        $cuenta = count($psIngresadas);
                                        $h = rand(1, $um);
                                        $g = rand($um, $palabras);
                                        //echo "<strong style='font-size:20px'><i>".$psIngresadas[$cuenta]."</i></strong>";
                                        if($c == $um)
                                        {
                                            do
                                            {
                                                $n = rand(0, $cuenta - 1);
                                            }
                                            while($psIngresadas[$n] == NULL);
                                            echo "<strong style='font-size:20px'><i> $psIngresadas[$n]</i></strong>";
                                            $psIngresadas[$n] = NULL;
                                            $um = rand($um+1, $palabras);
                                        }
                                    }
                                    echo "  ";
                                }    
                            echo'</td>
                        </tr>
                    </tbody>
                    ';
                echo '</table>';

                if ($timezone == "Asia/Hong_Kong")
                            {
                                $fecha=date('d M Y  h:i a');
                                echo'<i>La fecha de consulta de este libro fue:'.$fecha.' en '.$timezone.'</i>';
                            }
                if ($timezone == "Africa/Dakar")
                            {
                                $fecha=date('d M Y  h:i a');
                                echo'<i>La fecha de consulta de este libro fue:'.$fecha.' en '.$timezone.'</i>';
                            }
                if ($timezone == "Indian/Christmas")
                            {
                                $fecha=date('d M Y  h:i a');
                                echo'<i>La fecha de consulta de este libro fue:'.$fecha.' en '.$timezone.'</i>';
                            }
                if ($timezone == "America/Mexico_City")
                            {
                                $fecha=date('d M Y  h:i a');
                                echo'<i>La fecha de consulta de este libro fue:'.$fecha.' en '.$timezone.'</i>';
                            }
    ?>
</body>
</html>