<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $buscar = (isset($_POST['buscar']) && $_POST != "")? $_POST['buscar']: 'No especifico';
        $timezone = (isset($_POST['timezone']) && $_POST != "")? $_POST['timezone']: 'No especifico';
        $modo = (isset($_POST['modo']) && $_POST != "")? $_POST['modo']: 'No especifico';
        $i = rand(4, 10);
        $um = rand(97, 122);
        $palabras = rand(300, 500);
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